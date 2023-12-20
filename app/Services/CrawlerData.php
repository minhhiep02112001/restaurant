<?php

namespace App\Services;

use App\Models\Category;
use App\Models\File;
use App\Models\Game;
use App\Models\Post;
use App\Models\Producer;
use App\Models\Tag;
use App\Models\Version;
use Symfony\Component\DomCrawler\Crawler;

class CrawlerData
{
     protected $_category;
     protected $_file;
     private $_game;
     private $_producer;
     private $_version;
     private $_version_file;
     private $_tag;
     private $_verison_variant;
     private $cate_game_id;
     private $cate_app_id;

     public function __construct()
     {
          $this->_file = new File();
          $this->_game = new Game();
          $this->_category = new Category();
          $this->_producer = new Producer();
          $this->_version = new Version();

          $this->cate_game_id = 1;
          $this->cate_app_id = 20;
     }

     function index()
     {
          // $this->curl_category(); // tải all category
          $this->dowload_game_by_category(1); // tải game từ category
          // $this->dowloadVersionGame(1); // download file từ game

     }


     public function update_version_news($page = 1)
     {

          $games = $this->_game->getJobGames($page, 200);
          if (empty($games)) {
               echo "\n Done All";
               die();
          }

          foreach ($games as $game) {
               $version_new  = Version::where('game_id', $game->id)->orderBy('publish_at', 'desc')->first();
               if (empty($version_new)) {
                    continue;
               }
               \DB::table('g_games')->where('id', $game->id)->update(['version_title' => $version_new->title]);
               echo "\n Done Game: $game->id";
          }
          $this->update_version_news($page++);
     }

     public function download_image($page = 1)
     {

          $games = $this->_game->getJobGames($page, 200);
          if (empty($games)) {
               echo "\n Done All";
               die();
          }

          foreach ($games as $game) {
               \DB::table('g_games')->where('id', $game->id)->update(['updated_at' => date('Y-m-d H:i:s')]);

               $url = convert_gglink($game->crawler_href);
               $crawler = \Goutte::request('GET', $url);
               $bg_image = $crawler->filter('meta[property="og:image"]')->count() > 0 ? $crawler->filter('meta[property="og:image"]')->attr('content') : "";
               $img = $crawler->filter(".apk_info img")->count() > 0 ? $crawler->filter(".apk_info img")->eq(0)->attr("src") : '';


               $this->grab_image($img, public_path($game->thumbnail), 'https://prabez.com');

               $this->grab_image($bg_image, public_path($game->background_img), 'https://prabez.com');

               echo "\n Done Images Game: $game->id";
          }
          $this->download_image($page + 1);
     }

     function dowload_game_by_category($page = 1)
     {

          $category  = Category::where('type', 'game')->orderBy('updated_at')->take(0)->limit(200)->get();

          if (!empty($category)) {
               foreach ($category as $cate) {
                    if (!empty($cate->crawler_href)) {
                         $type = $cate->parent_id == $this->cate_game_id ? 1 : 2;
                         echo "\n Start crawler {$cate->title}";
                         $this->curl_game($cate->crawler_href, 1, $type);
                         Category::where('id', $cate->id)->update(['updated_at' => date('Y-m-d H:i:s')]);
                         echo "\n End crawler {$cate->title}";
                    }
               }
          }
     }


     function curl_category()
     {
          $url = 'https://apkpure.com/game-24h';
          $url_game = convert_gglink($url);

          $data_html = $this->curl_html($url_game);
          $crawler = new Crawler($data_html);
          $category_game = $crawler->filter("ul.index-category")->each(function ($item, $index) use ($crawler) {

               $title = trim($crawler->filter(".menu_list .menu_head1")->eq($index)->text());

               $data_child = $item->filter("li")->each(function ($li) {
                    $href = $li->filter('a')->attr('href');
                    return [
                         'title' => $li->filter('a')->text(),
                         'crawler_href' => convert_gglink($href, true)
                    ];
               });
               return ['title' => $title, 'data_child' => $data_child, 'slug' => $this->toSlug($title)];
          });
          if (!empty($category_game)) foreach ($category_game as $item) {
               $parent_id = $this->handle_category(['title' => $item['title'], 'slug' => $item['slug'], 'parent_id' => 0, 'type' => 'game']);
               if (!empty($item['data_child'])) foreach ($item['data_child'] as $key => $child) {
                    $child['parent_id'] = $parent_id;
                    $child['type'] = 'game';
                    $child['slug'] = $this->toSlug($child['title']);
                    $this->handle_category($child);
                    echo "\n Done Category {$child['title']}";
               }
          }
     }




     function curl_game($url, $page = 1, $type = 1)
     {
          $url_game = convert_gglink("$url?page={$page}&ajax=1");
          $data_html = $this->curl_html($url_game);
          $crawler = new Crawler($data_html);
          $link_games =  $crawler->filter(".category-multiple-apk-list-box .grid-col")->each(function ($item) {
               $title = $item->filter('a.grid-item-title')->text();
               $crawler_url = $item->filter('a.grid-item-title')->attr('href');
               return ['title' => $title, 'crawler_url' => $crawler_url];
          });
          if (!empty($link_games)) {
               foreach ($link_games as $item) {
                    $slug = $this->toSlug($item['title']);
                    if (empty($slug)) continue;
                    $record = Game::where('slug', $slug)->first();
                    $data = $this->curl_detail_game($item['crawler_url']);
                    if (empty($record)) {
                         try {
                              $param_store  = array(
                                   'title' => $data['title'],
                                   'content' => $data['content'],
                                   'thumbnail' => $data['thumbnail'],
                                   'background_img' => $data['background_img'],
                                   'link_gg_play' => $data['link_gg_play'],
                                   'slug' => $slug,
                                   'is_status' => 0,
                                   'type' => $type,
                                   'viewed' => rand(10, 200),
                                   'crawler_href' => convert_gglink($item['crawler_url'], true)
                              );
                              if (!empty($data['producer'])) {
                                   $param_store['producer_id'] =  $this->handleProducer($data['producer']);
                              }
                              $id = Game::insertGetId($param_store);

                              if (!empty($data['tags']) && !empty($id)) {
                                   $this->handle_tags($id, $data['tags']);
                              }
                              if (!empty($data['category']) && !empty($id)) {
                                   $this->handle_category_game($id, $data['category']);
                              }

                              echo "\n Save game {$item['title']} ";
                         } catch (\Exception $ex) {
                              echo "\n Error game {$item['title']}: " . $ex->getMessage();
                         }
                    } else {
                         $record->background_img = $data['background_img'];
                         $record->thumbnail = $data['thumbnail'];
                         $record->save();
                         if (!empty($data['category'])) {
                              $this->handle_category_game($record->id, $data['category']);
                         }
                         echo "\n Save game {$record['id']} {$data['thumbnail']}";
                    }
               }
               echo " \nDone $page";
               $this->curl_game($url, $page + 1, $type);
          }
          return;
     }

     function dowloadVersionGame($page  = 1)
     {
          $games = $this->_game->getJobGames($page, 20);

        
          if (empty($games)) {
               echo "\n Done All";
               die();
          }

          foreach ($games as $game) {
               $this->curl_game_version("{$game->crawler_href}/versions", $game->id);
               echo "\n Done Vesion Game: $game->id";
               \DB::table('g_games')->where('id', $game->id)->update(['updated_at' => date('Y-m-d H:i:s')]);
          }


          echo "\n Done version game page: $page";
          $this->dowloadVersionGame($page + 1);
     }


     function curl_detail_game($url)
     {
          $crawler = \Goutte::request('GET', $url);

          $title = $crawler->filter('h1')->text();
          $slug = $this->toSlug($title);
          $meta_title = $crawler->filter('meta[property="og:title"]')->attr('content');
          $meta_description = $crawler->filter('meta[name="description"]')->count() > 0 ? $crawler->filter('meta[name="description"]')->attr('content') : '';
          $meta_keyword = $crawler->filter('meta[name="keywords"]')->count() > 0 ?  $crawler->filter('meta[name="keywords"]')->attr('content') : "";

          $content = $crawler->filter('.description .content .translate-content')->count() > 0 ? $crawler->filter('.description .content .translate-content')->html() : '';

          $bg_image = $crawler->filter('meta[property="og:image"]')->count() > 0 ? $crawler->filter('meta[property="og:image"]')->attr('content') : "";
          $img = $crawler->filter(".apk_info img")->count() > 0 ? $crawler->filter(".apk_info img")->eq(0)->attr("src") : '';
          $developer  = $crawler->filter(".additional-content .additional-item:nth-child(2) .additional-info")->count() > 0 ? $crawler->filter(".additional-content .additional-item:nth-child(2) .additional-info")->text() : '';
          $developer_name = !empty($developer) ? trim(\Str::slug($developer)) : rand(0, 100);

          $background_img = "/storage/bg/{$slug}-{$developer_name}.jpg";
          $thumbnail = "/storage/game/{$slug}-{$developer_name}.jpg";

          $this->grab_image($bg_image, public_path($background_img), 'https://prabez.com');
          if (!empty($img)) $this->grab_image($img,  public_path($thumbnail), 'https://prabez.com');

          $link_gg_play  = $crawler->filter(".additional-content .additional-item:nth-child(4) a")->count() > 0 ? $crawler->filter(".additional-content .additional-item:nth-child(4) a")->attr('href') : '';
          if (!empty($link_gg_play)) $link_gg_play = $this->convert_file_ggdich($link_gg_play, true);
          $cates = [];
          $tags  = $crawler->filter(".tag-box .tag-item")->each(function ($node) use (&$cates) {
               $href = $node->filter('a')->attr('href');
               $href = convert_gglink($href, true);
               $arr = ['title' => trim($node->text()), 'crawler_href' => $href];
               if (strpos($href, '/tag')) return $arr;
               $cates[] = $arr;
               return;
          });

          $link_available_on = $crawler->filter(".additional-content .additional-item:nth-child(4) a")->count() ? $crawler->filter(".additional-content .additional-item:nth-child(4) a")->attr('href') : '';
          $available_on = !empty($link_available_on) ?  convert_gglink($link_available_on, true) : "";
          $report  = $crawler->filter(".additional-content .additional-item:nth-child(6) .additional-info")->count() > 0 ? $crawler->filter(".additional-content .additional-item:nth-child(6) .additional-info")->text() : '';

          // $slides = $crawler->filter("#screen a")->each(function ($node, $index) use ($slug) {
          //      $link = $node->filter('img')->attr("srcset");
          //      $link = $this->convert_file_ggdich($link);
          //      $path = "/{$slug}-{$index}.jpg"; 
          //      return saveImageUrlStorage($link, 'banner', $path); 

          // });


          $producer = $crawler->filter(".developer")->count() > 0 ? $crawler->filter(".developer")->text() : '';

          return [
               'slug' => trim($slug),
               'title' => trim($title),
               'thumbnail' => $thumbnail,
               'content' => trim($content),
               'meta_title' => trim($meta_title),
               'meta_description' => trim($meta_description),
               'meta_keyword' => trim($meta_keyword),
               'developer' => trim($developer),
               'producer' => trim($producer),
               'report' => trim($report),
               'available_on' => trim($available_on),
               'background_img' => $background_img,
               'link_gg_play' => $link_gg_play,
               'tags' => array_filter($tags),
               'category' => array_filter($cates)
          ];
     }

     function replace_href_gg($url)
     {
          $parts = parse_url($url);
          parse_str($parts['query'], $query);
          $link = $query['u'] ?? '';
          $link = str_replace(['2x'], "", $link);
          return trim($link);
     }


     private function handleProducer($title)
     {

          $slug = $this->toSlug($title);
          $checkProduce = Producer::where('slug', $slug)->first();
          if (empty($checkProduce)) {
               $pro_id = Producer::insertGetId([
                    'title' => $title,
                    'slug' => $slug,
               ]);
          } else {
               $pro_id = $checkProduce->id;
          }
          return $pro_id;
     }



     private function  handle_variant($id, $data)
     {
          $checkFile = $this->_verison_variant->getGameVersionBy($id, 'crawler_href', $data['crawler_href']);
          if (empty($checkFile)) {
               $file_id = $this->_verison_variant->save($data);
          } else {
               $file_id = $checkFile->id;
          }
          return $file_id;
     }


     function curl_game_version($url, $game_id = 0)
     {
          $url_game = convert_gglink($url);
          $url_crawler = str_replace('https://m-apkpure-com', 'https://apkpure-com', $url_game);
          $data_html = $this->curl_html($url_crawler);
          $crawler = new Crawler($data_html);

          $title =  trim($crawler->filter('h1')->text());
          $link_games =  $crawler->filter("ul.ver-wrap li")->each(function ($item) use ($title) {
               $dom_version = $item->filter('.ver-item .ver-item-n');
               if ($item->filter('.ver-item')->count() < 1) return;
               $title_version = trim(str_replace($title, "", $dom_version->text()));
               $type = $item->filter(".ver-item-type span")->each(function ($i) {
                    return $i->text();
               });
               $crawler_url = $item->filter('a')->eq(0)->attr('href');
               $storage = $item->filter('.ver-item-s')->text();
               if ($item->filter('.update-on')->count() > 0) {
                    $publish_at = $item->filter('.update-on')->text();
                    $date = date_create_from_format("M j, Y", $publish_at);
                    $publish_at = $date->format('Y-m-d');
               }
               return [
                    'title' => "$title_version",
                    'crawler_url' => convert_gglink($crawler_url, true),
                    'type' => $type,
                    'storage' => $storage ??  '',
                    'publish_at' => $publish_at ??  date('d-m-Y'),
               ];
          });

          if (!empty($link_games)) {
               foreach (array_reverse($link_games) as $item) {
                    if (empty($item)) continue;
                    $slug = str_replace("-", '.', $this->toSlug($item['title']));

                    $key = \Str::slug("{$slug} {$game_id} {$item['storage']}" . json_encode($item['type']));

                    $record = Version::where(['key' => $key, 'crawler_href' => $item['crawler_url']])->first();

                    $version_id = $record->id ?? 0;

                    try {
                         if (empty($record)) {

                              $data_version = [
                                   'game_id' => $game_id,
                                   'title' => $item['title'],
                                   'key' =>  $key,
                                   'type' =>           json_encode($item['type']),
                                   'publish_at' => $item['publish_at'],
                                   'storage' => $item['storage'],
                                   'hash_code' => generateRandomString(),
                                   'crawler_href' => $item['crawler_url']
                              ];

                              $version_id = Version::insertGetId($data_version);
                         }
                         if (strpos($item['crawler_url'], 'variant')) { // kiểm tra xem có variant không 
                              $data = $this->curl_version_file_variant($item['crawler_url']);
                              if (!empty($data)) {
                                   foreach ($data as $file) {
                                        $data =  $this->curl_download($file['crawler_href']);
                                        $this->handle_file($version_id, $data);
                                   }
                              }
                         } else {
                              // nếu không có dowload file trực tiếp  
                              $data =  $this->curl_download($item['crawler_url']);
                              $this->handle_file($version_id, $data);
                         }
                         echo "\n Done Vesion {$item['title']} - game: $game_id";
                    } catch (\Exception $ex) {
                         echo "\n Errors Vesion {$item['title']} - game: $game_id : " . $ex->getMessage();
                    }
               }
          }
          return;
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

     function curl_version_file_variant($url)
     {
          $url_game = convert_gglink($url);
          $data_html = $this->curl_html($url_game);
          $crawler = new Crawler($data_html);

          $data = $crawler->filter('.table .table-row')->each(function ($item, $index) {
               if ($index == 0) return;
               $v = $item->filter('.popup span')->text();
               $title = $item->filter('.table-cell:nth-child(2)')->text();
               $minimum_Version = $item->filter('.table-cell:nth-child(3)')->text();
               $creen = $item->filter('.table-cell:nth-child(4)')->text();
               $link_file = $item->filter('.table-cell:nth-child(5) a')->attr('href');
               return [
                    'title' => trim($title),
                    'minimum_version' => trim($minimum_Version),
                    'screen_dpi' => trim($creen),
                    'variant' => trim($v),
                    'crawler_href' => convert_gglink($link_file, true),
               ];
          });
          return array_filter($data);
     }


     function curl_db_variant_file()
     {
          while (true) {
               $record = $this->_version_file->getByField("is_crawler", 0);
               if (empty($record)) break;
               $url_game = convert_gglink($record->crawler_href);
               $data_html = $this->curl_html($url_game);
               $crawler = new Crawler($data_html);

               $link = $crawler->filter("a.download-start-btn")->count() > 0 ? $crawler->filter("a.download-start-btn")->attr("href") : "";
               $link_pc = $crawler->filter("a.gameloop-btn")->count() > 0 ? $crawler->filter("a.gameloop-btn")->attr("href")  : '';
               $file = $this->convert_file_ggdich($link);
               $file_pc = $this->convert_file_ggdich($link_pc);
               $this->_version_file->update(['id' => $record->id], [
                    'file_name_apk' => $file,
                    'file_name_pc' => $file_pc ?? '',
               ]);
               echo "\nDone File id: {$record->id}";
          }
          echo "\nDone All";
     }


     function curl_download($crawler_href)
     {
          $url_game = convert_gglink($crawler_href);
          $crawler = \Goutte::request('GET', $url_game);

          $link = $crawler->filter("a.download-start-btn")->count() > 0 ? $crawler->filter("a.download-start-btn")->attr("href") : "";
          $link_pc = $crawler->filter("a.gameloop-btn")->count() > 0 ? $crawler->filter("a.gameloop-btn")->attr("href")  : '';
          $data_default['file_name_apk'] = $this->convert_file_ggdich($link);
          $data_default['file_name_pc'] = $this->convert_file_ggdich($link_pc);
          $info = $crawler->filter('.more-info li .info');

          // check data:
          $exists_lang = $crawler->filter("#language-dialog, #fancybox-language-info")->count();

          $i = !empty($exists_lang) ? 1 : 0;

          $data_default['package_name'] = $info->count() > 0 &&  $info->eq(0)->filter('div:nth-child(2)')->count() > 0  ? $info->eq(0)->filter('div:nth-child(2)')->text() : '';
          $requires = $info->count() > 1 &&  $info->eq($i + 1)->filter('div:nth-child(2)')->count() > 0  ? $info->eq($i + 1)->filter('div:nth-child(2)')->text() : '';
          $data_default['content_rating'] = $info->count() > 2  &&  $info->eq($i + 2)->filter('div:nth-child(2)')->count() > 0  ? $info->eq($i + 2)->filter('div:nth-child(2)')->text() : '';
          $structure = $info->count() > 3 &&  $info->eq($i + 3)->filter('div:nth-child(2)')->count() > 0 ? $info->eq($i + 3)->filter('div:nth-child(2)')->text() : '';
          $data_default['permission'] = $info->count() > 4 &&  $info->eq($i + 4)->filter('div:nth-child(2)')->count() > 0  ? $info->eq($i + 4)->filter('div:nth-child(2)')->text() : '';
          $data_default['signature'] = $info->count() > 5 &&  $info->eq($i + 5)->filter('div:nth-child(2)')->count() > 0 ? $info->eq($i + 5)->filter('div:nth-child(2)')->text() : '';
          $data_default['crawler_href'] = $crawler_href;

          $storage = $crawler->filter("a.download-start-btn .download-file-size")->count() > 0 ? $crawler->filter("a.download-start-btn .download-file-size")->text() : '';


          if ($crawler->filter('.info-content .date')->count() > 0) {
               $publish_at = $crawler->filter('.info-content .date')->text();
               $date = date_create_from_format("M j, Y", $publish_at);
               $publish_at = $date->format('Y-m-d');
          }


          $result = array_merge([
               'structure' => trim($structure ?? ''),
               'requires' => trim($requires ?? ''),
               'type' => '',
               'storage' => $storage,
               'publish_at' => $publish_at ?? date('Y-m-d'),
               'slug' => \Str::slug($structure)
          ], $data_default);


          $all_variants = [$result];
          $count = $crawler->filter('#version-list .show-more-content .apk')->count();
          if ($count > 0) {
               $structures  = $crawler->filter("#version-list .group-title")->each(function ($node) {
                    return $node->text();
               });
               $attrs = $crawler->filter('#version-list .show-more-content .apk')->each(function ($node, $index) {
                    $tag = $node->filter('.tag')->each(function ($n) {
                         return $n->text();
                    });
                    $arr['type'] = json_encode($tag);
                    $arr['publish_at'] = $node->filter('.time')->count() > 0 ? $node->filter('.time')->text() : '';
                    $arr['storage'] = $node->filter('.size')->count() > 0 ? $node->filter('.size')->text() : '';
                    $arr['requires'] = $node->filter('.sdk')->count() > 0 ? $node->filter('.sdk')->text() : '';
                    return $arr;
               });
               foreach ($structures as $key => $item) {
                    $attr = $attrs[$key] ?? [];
                    if (!empty($attr['publish_at'])) {
                         $date = date_create_from_format("M j, Y", $attr['publish_at']);
                         $attr['publish_at'] = $date->format('Y-m-d');
                    }
                    if (!empty($attr)) $structures[$key] = array_merge(['structure' => $item, 'slug' => \Str::slug($item)], $attr, $data_default);
               }
               $all_variants = array_merge($all_variants, $structures);
          }
          return $all_variants;
     }

     private function convert_file_ggdich($link)
     {
          $data = parse_url($link, PHP_URL_QUERY);
          parse_str($data, $output);
          return $output['u'] ?? '';
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
          $check_category = $this->_category->getByField('slug', $data['slug'], [], 'game');
          if (empty($check_category)) {
               $id = $this->_category->save($data);
          } else {
               $id = $check_category->id;
          }
          return $id;
     }
     private function  handle_file($id, $data)
     {
          foreach ($data as $item) {
               $item['version_id'] = $id;
               $file = File::where([
                    'crawler_href' => $item['crawler_href'],
                    'slug' => $item['slug'],
               ])->first();

               if (empty($file)) {
                    $file_id = File::insertGetId($item);
                    $file = File::find($file_id);
               }
               if ($file->versions()->where('version_id', $id)->count() == 0) $file->versions()->attach([$id]);
          }
          return;
     }
     private function  handle_category_game($id, $categories)
     {
          $game = Game::find($id);
          if (!empty($game)) {
               $data_category = [];
               $game->categories()->detach();
               if (!empty($categories)) foreach ($categories as $value) {
                    $slug = $this->toSlug($value['title']);
                    $checkCategory = Category::where(['slug' => $slug, 'type' => 'game'])->first();
                    if (empty($checkCategory)) {
                         $category_id =  Category::insertGetId([
                              'title' => $value['title'],
                              'parent_id' => $value['parent_id'] ?? 0,
                              'slug' => $slug,
                              'type' => 'game'
                         ]);
                    } else {
                         $category_id = $checkCategory->id;
                    }
                    $data_category[] = $category_id;
               }

               if (!empty($data_category))  $game->categories()->attach($data_category);
          }
          return true;
     }

     private function  handle_tags($id, $tags)
     {
          $game = Game::find($id);
          if (!empty($game)) {
               $game->tags()->detach();
               $data_tag = [];
               if (!empty($tags)) foreach ($tags as $value) {
                    $slug = $this->toSlug($value['title']);
                    $check = Tag::where('slug', $slug)->first();
                    if (empty($check)) {
                         $tag_id = Tag::insertGetId([
                              'title' => $value['title'],
                              'slug' => $slug,
                              'crawler_href' => $value['crawler_href'],
                              'type' => 'game',
                         ]);
                    } else {
                         $tag_id = $check->id;
                    }
                    $data_tag[] = $tag_id;
               }
               if (!empty($data_tag)) $game->tags()->attach($data_tag);
          }


          return true;
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
