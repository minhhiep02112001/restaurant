<?php

namespace App\Services;

use App\Models\Category;
use App\Models\File;
use App\Models\Post;
use App\Models\Producer;
use App\Models\Tag;
use App\Models\Version;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class CrawlerDataYelp
{
     protected $_category;
     protected $_post;

     public function __construct()
     {

          $this->_post  = new Post();
          $this->_category = new Category();
     }

     function index()
     {
          // $this->curl_category(); // tải all category
          $this->download_list_category_post(); // tải game từ category
          // $this->dowloadVersionGame(1); // download file từ game

     }


     public function download_list_category($page = 1)
     {
          $url = "https://www.yelp.com/";
          $crawler = \Goutte::request('GET', $url);

          $arr = $crawler->filter('.layout-4-units__09f24__FvTbi .arrange-unit__09f24__rqHTg')->each(function ($node) {
               $title = $node->filter('p.css-lgg6ic')->text();
               $link_img = $node->filter('img')->attr('src');
               $link_crawler = "https://www.yelp.com" . $node->filter('a')->attr('href');
               $slug = \Str::slug($title);
               return ['title' => $title, 'slug' => $slug, 'thumbnail' => $link_img, 'crawler_href' => $link_crawler];
          });
          unset($arr[count($arr) - 1]);

          foreach ($arr as $cate) {

               $this->handle_category($cate);
               echo "\n Done {$cate['title']}";
          }
          echo "\nDone all";
     }

     public function download_list_category_post($page = 1)
     {
          $_categories = Category::orderBy('updated_at', 'asc')->get();
          $countries = DB::table('st_country')->orderBy('updated_at', 'desc') 
          ->where('parent_id', 2)->get();
       
          foreach ($countries as $coutry) {
               foreach ($_categories as $cate) {
                    $url = $this->convert_search($coutry->title, $cate->title);
                    $this->download_list_url($url, 0, $cate['id'], $coutry->id);
                    echo "\n Done all {$coutry->title}";
               }
               DB::table('st_country')->where('id', $coutry->id)->update(['updated_at' => date('Y-m-d H:i:s')]);
               echo "\n Done all {$cate->title}";
          }
          echo "\nDone all";
     }

     public function convert_search($find_loc, $find_desc = '')
     {
          $find_loc = str_replace(' ', '+', $find_loc);
          $find_loc = str_replace(',', '%2C', $find_loc);
          $find_desc = str_replace(' ', '+', $find_desc);
          $find_desc = str_replace(',', '%2C', $find_desc);
          return "https://www.yelp.com/search?find_desc=$find_desc&find_loc=$find_loc";
     }

     public function download_list_url($_url, $offset = 10, $cate_id, $country_id)
     {
          $url = "$_url&start=$offset";
          $crawler = \Goutte::request('GET', $url);

          $arr = $crawler->filter('#main-content .container__09f24__mpR8_')->each(function ($node) {
               $title = $node->filter('h3.css-1agk4wl a')->text();
               $crawler_href = "https://www.yelp.com" . $node->filter('h3.css-1agk4wl a')->attr('href');
               $slug = \Str::slug($title);
               return ['title' => $title, 'slug' => $slug, 'crawler_href' => $crawler_href];
          });
          if (!empty($arr)) {
               foreach (array_reverse($arr) as $item) {
                    if (empty($item)) continue;
                    // $record = Post::where(['slug' => $item['slug']])->first();
                    try {
                         $data = $this->curl_detail_post($item['crawler_href']);

                         $record = Post::where(['slug' => $data['slug']])->first();
                         if(!empty($record)) continue;
                         $category = $data['category'];
                         $data['country_id'] = $country_id;
                         unset($data['category']);
                         if (empty($record)) {
                              $post_id = Post::insertGetId($data);
                         } else {
                              $post_id = $record->id;
                              if (empty($record->country_id)) DB::table('st_post')->where('id', $post_id)->update(['country_id' => $country_id]);
                         }
                         echo "\n Done {$item['title']}";
                         $cate_ids = [$cate_id];
                         if (!empty($category)) {
                              foreach ($category as $item) {
                                   $cate_ids[] = $this->handle_category($item);
                              }
                         }

                         if (!empty($cate_ids)) {
                              foreach ($cate_ids as $cate) {
                                   $count = DB::table('st_post_category')->where([
                                        'post_id' => $post_id,
                                        'category_id' => $cate
                                   ])->count();
                                   if (empty($count)) DB::table('st_post_category')->insert(['post_id' => $post_id,  'category_id' => $cate]);
                              }
                         }
                    } catch (\Exception $ex) {
                         echo "\n Errors {$item['title']}: " . $ex->getMessage();
                    }
               }
               echo "\nDone all $offset, $url";
               $this->download_list_url($_url, $offset + 10, $cate_id, $country_id);
          } else {
               echo "\nDone all";
          }
     }

     function curl_detail_post($url)
     {
          $crawler = \Goutte::request('GET', $url);

          $title = $crawler->filter('h1')->text();

          $slug = $this->toSlug($title);

          $meta_title = $crawler->filter('meta[property="og:title"]')->attr('content');

          $meta_description = $crawler->filter('meta[name="description"]')->count() > 0 ? $crawler->filter('meta[name="description"]')->attr('content') : '';
          $meta_keyword = $crawler->filter('meta[name="keywords"]')->count() > 0 ?  $crawler->filter('meta[name="keywords"]')->attr('content') : "";

          $review =  $crawler->filter("a[href='#reviews']")->count() > 0 ?  $crawler->filter("a[href='#reviews']")->text() : "0";

          $review = str_replace(['(', ' ', ',', ')', 'reviews', 'review'], '', $review);



          preg_match_all('!\d+!', $review, $matches);

          if (!isset($matches[0])) {
               $review = 0;
          }

          $vote = $crawler->filter(".arrange-unit__09f24__rqHTg .css-1fdy0l5")->count() > 0 ?  $crawler->filter(".arrange-unit__09f24__rqHTg .css-1fdy0l5")->text() : "0";


          preg_match_all('!\d+!', $vote, $matches);

          if (!isset($matches[0])) {
               $vote = 0;
          }

          $location = $crawler->filter(".arrange-unit__09f24__rqHTg address")->count() > 0 ?  $crawler->filter(".arrange-unit__09f24__rqHTg address")->text() : "";
          $maps = $crawler->filter(".container__09f24__fZQnf  img")->count() > 0 ?  $crawler->filter(".container__09f24__fZQnf  img")->attr('src') : "";

          $_categories = $crawler->filter(".arrange-unit-fill__09f24__CUubG span.css-1fdy0l5 a.css-19v1rkv")->each(function ($node) {
               $title = $node->text();
               $link_crawler = "https://www.yelp.com" . $node->attr('href');
               $slug = \Str::slug($title);
               return ['title' => $title, 'slug' => $slug, 'thumbnail' => '', 'crawler_href' => $link_crawler];
          });

          $website_link = $crawler->filter('p.css-1p9ibgf a[class="css-1idmmu3"][target="_blank"]')->each(function ($node) {
               return [
                    'website' => $node->text(),
                    'link' => $node->attr('href'),
               ];
          });
          return [
               'slug' => trim($slug),
               'title' => trim($title),
               'meta_title' => trim($meta_title),
               'meta_description' => trim($meta_description),
               'meta_keyword' => trim($meta_keyword),
               'vote' => trim($vote),
               'location' => trim($location),
               'maps' => trim($maps),
               'viewed' => $review ?? 0,
               'crawler_href' => trim($url),
               'website_link' => !empty($website_link) ? json_encode($website_link) : '',
               'category' => $_categories
          ];
     }

     public function curl_html($url)
     {
          $pointer = curl_init();
          curl_setopt($pointer, CURLOPT_URL, $url);
          curl_setopt($pointer, CURLOPT_TIMEOUT, 40);
          curl_setopt($pointer, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($pointer, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.552.28 Safari/534.10");
          curl_setopt($pointer, CURLOPT_SSL_VERIFYHOST, false);
          curl_setopt($pointer, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($pointer, CURLOPT_HEADER, false);
          curl_setopt($pointer, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($pointer, CURLOPT_AUTOREFERER, true);

          $return_val = curl_exec($pointer);

          $http_code = curl_getinfo($pointer, CURLINFO_HTTP_CODE);
          if ($http_code == 404) {
               return false;
          }
          curl_close($pointer);
          unset($pointer);
          return $return_val;
     }

     public function grab_image($url, $saveto, $domain)
     {
          if (!is_dir(dirname($saveto))) {
               mkdir(dirname($saveto), 0755, TRUE);
          }

          $pointer = curl_init();
          curl_setopt($pointer, CURLOPT_URL, $url);
          curl_setopt($pointer, CURLOPT_TIMEOUT, 40);
          curl_setopt($pointer, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($pointer, CURLOPT_USERAGENT, "Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1");
          curl_setopt($pointer, CURLOPT_SSL_VERIFYHOST, false);
          curl_setopt($pointer, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($pointer, CURLOPT_HTTPHEADER, array(
               'Referer: ' . $domain,
          ));
          curl_setopt($pointer, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($pointer, CURLOPT_AUTOREFERER, true);

          $return_val = curl_exec($pointer);
          curl_close($pointer);
          if (file_exists($saveto)) {
               unlink($saveto);
          }
          unset($pointer);
          $fp = fopen($saveto, 'x');
          fwrite($fp, $return_val);
          fclose($fp);
     }

     function handle_category($data)
     {
          $check_category = $this->_category->where('slug', $data['slug'])->first();
          if (empty($check_category)) {
               $id = $this->_category->insertGetId($data);
          } else {
               $id = $check_category->id;
          }
          return $id;
     }

     public function toSlug($doc)
     {
          $str = addslashes(html_entity_decode($doc));
          $str = $this->toNormal($str);
          $str = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
          $str = preg_replace("/( )/", '-', $str);
          $str = str_replace('/', '', $str);
          $str = str_replace("\/", '', $str);
          $str = str_replace("+", "", $str);
          $str = str_replace(" - ", "-", $str);
          $str = str_replace("---", "-", $str);
          $str = str_replace("--", "-", $str);
          $str = str_replace("|", "", $str);
          $str = strtolower($str);
          $str = stripslashes($str);
          return trim($str, '-');
     }

     public function toNormal($str)
     {
          $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
          $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
          $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
          $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
          $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
          $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
          $str = preg_replace("/(đ)/", 'd', $str);
          $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
          $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
          $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
          $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
          $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
          $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
          $str = preg_replace("/(Đ)/", 'D', $str);
          return $str;
     }
}
