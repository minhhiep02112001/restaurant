<?php

use Illuminate\Support\Facades\Cache;

if (!function_exists('convert_gglink')) {
     function convert_gglink($url, $revert = false, $active = true)
     {
          if ($active) {
               if ($revert) {
                    $result_link = preg_replace_callback(
                         '/https?:\/\/([^\/]*)(\/?.*)/m',
                         function ($matches) use ($url) {
                              $domain = implode('.', explode('-', $matches[1]));
                              $url = str_replace($matches[1], $domain, $url);
                              $url = str_replace('.translate.goog', '', $url);
                              $url = preg_replace('/[&?]_x_[^&$]*/m', '', $url);
                              return $url;
                         },
                         $url
                    );
                    return $result_link;
               }

               // $domain = preg_replace('/https?:\/\/([^\/]*)\/?.*/m', '$1',$url);
               $result_link = preg_replace_callback(
                    '/https?:\/\/([^\/]*)(\/?.*)/m',
                    function ($matches) {
                         $hl_domain = str_replace('-', '--', $matches[1]);
                         $domain = implode('-', explode('.', $hl_domain)) . '.translate.goog';
                         $tail = $matches[2];
                         return 'https://' . $domain . $tail . ((strpos($tail, '?') > 0) ? '&' : '?') . '_x_tr_sl=auto&_x_tr_tl=en&_x_tr_hl=en-US&_x_tr_pto=ajax,elem,se';
                    },
                    $url
               );
               return $result_link;
          }
          return $url;
     }
}
if (!function_exists('getCacheSetting')) {
     function getCacheSetting($key = '')
     {
          if (!Cache::has('setting')) {
               $settings = \App\Models\Setting::select(['key', 'value'])->get()->toArray();
               $arr = [];
               foreach ($settings as $val) {
                    $arr[$val['key']] = $val['value'] ?? '';
               }
               Cache::put('setting', json_encode($arr), 365 * (24 * 60));
          }
          $settings = (array) json_decode(Cache::get('setting') ?? '[]');

          if (!empty($key)) {
               return $settings[$key] ?? '';
          }
          return $settings;
     }
}

if (!function_exists('getValueSetting')) {
     function getValueSetting($key)
     {
          $key_cache = "settings_$key";
          if (!Cache::has($key_cache)) {
               $data = \DB::table('st_setting')->where('key', '=', $key)->select(['value'])->first();

               Cache::put($key_cache, $data->value ?? [],  24 * 60 * 60);
          }
          return Cache::get($key_cache);
     }
}

if (!function_exists('saveImageUrlStorage')) {
     function saveImageUrlStorage($url, $folder, $name = '')
     {
          $contents = file_get_contents($url);

          if (empty($name)) {
               $pathName = str_replace("//", "/", "storage/$folder/" . rand(1, 1000000) . '-' . substr($url, strrpos($url, '/') + 2));
          } else {
               $pathName = str_replace("//", "/", "storage/$folder/$name");
          }

          $savedPath = public_path($pathName);
          $savedDir = dirname($savedPath);

          if (!is_dir($savedDir)) {
               mkdir($savedDir, 777, true);
          }
          try {
               file_put_contents($savedPath, $contents);
               return $pathName;
          } catch (\Exception $ex) {
               return '';
          }
     }
}


if (!function_exists('view_vote')) {
     function view_vote($item)
     {
          $_html = "<span class='score'>{$item->avg_vote}</span> ";
          return $_html;
     }
}

if (!function_exists('generateRandomString')) {
     function generateRandomString($length = 11)
     {
          $length = 11;
          $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
          $randomString = '';

          for ($i = 0; $i < $length; $i++) {
               $randomIndex = random_int(0, strlen($characters) - 1);
               $randomString .= $characters[$randomIndex];
          }

          return strtolower($randomString);
     }
}

if (!function_exists('getMenuParent')) {
     function getMenuParent($parent_id, $type = 0)
     {
          $key = "config_menu_$type";
          if (!Cache::has($key)) {
               $menus = \App\Models\Menu::where(['parent_id' => $parent_id, 'location_id' => $type])->orderBy('order', 'asc')->get()->toArray();
               Cache::put($key, json_encode($menus), 365 * 24 * 60 * 60);
          }
          return json_decode(Cache::get($key));
     }
}

if (!function_exists('getBreadCrumbs')) {
     function getBreadCrumbs($arr)
     {
          $_html = '<div id="bread_crumbs" class="default_ellipsis_1 bread_crumbs m_bread_crumbs">';
          $_html .= '<a href="/" title="Home">Home</a>';

          if (!empty($arr)) {
               foreach ($arr as $key => $item) {
                    if ($key == (count($arr) - 1)) {
                         $_html .= "<span>{$item['title']}</span>";
                    } else {
                         $_html .= "<a class='bread_crumbs_mobile' href='{$item['link']}' title='{$item['title']}'>{$item['title']}</a>";
                    }
               }
          }

          $_html .= '</div>';
 
          return $_html;
     }
}

if (!function_exists('replace_title')) {
     function replace_title($content)
     {
         $content = strip_tags($content);
         $content = trim($content);
         $content = str_replace(['"', "'", '“', '“', '”', ': -', '&nbsp;', '[', ']'], '', $content);
         return $content;
     }
 }
 