<?php

use Intervention\Image\ImageManagerStatic as Image;

if (!function_exists('getImageThumb')) {
     function getImageThumb($image = '', $width = '', $height = '', $crop = true)
     {
          $img_default =  asset("assets/img/default.png");
          // $_this = &get_instance();
          if (empty($image) || !file_exists(public_path($image))) {
               return $img_default;
          }
          if (empty($width) && empty($height)) {
               return $image;
          }
          $image = trim($image);
          $imageOrigin =  public_path($image);
          $sizeText = sprintf('-%dx%d', $width, $height);

          $ext = pathinfo($image, PATHINFO_EXTENSION);

          $newImage = str_replace(".$ext", "$sizeText.$ext", $image);
          $newImage = str_replace("storage", "", $newImage);
          $newImage = str_replace(['///', '//'], '/', ($crop ? "storage/crop/" : 'storage/resize/') . $newImage);

          $pathThumb = public_path($newImage);
          $pathThumb = str_replace(['///', '//'], '/', $pathThumb);

          if (!file_exists($pathThumb)) {
               try {
                    
                    if (!is_dir(dirname($pathThumb))) {
                         mkdir(dirname($pathThumb), 0755, TRUE);
                    }

                    Image::configure(array('driver' => 'gd'));
                    $intval_width = intval($width);
                    $height_width = intval($height);

                    if ($intval_width > 0 && $height_width > 0) {
                         $image = Image::make($imageOrigin)->fit(intval($width), intval($height));
                    } else {
                         $image = Image::make($imageOrigin);
                    }
                    $image->save($pathThumb);
               } catch (Exception $e) {
                    return $img_default;
               }
          }
          return convertPathImage($newImage);
     }
}

if (!function_exists('convertPathImage')) {
     function convertPathImage($path)
     {
          return env('MEDIA_URL') . trim($path, '/');
     }
}


if (!function_exists('getThumbnail')) {
     function getThumbnail($data, $width = '', $height = '', $class = '')
     {
          return '<img loading="lazy" class="' . $class . '" src="' . getImageThumb($data->thumbnail, $width, $height) . '" alt="' . $data->title . '" width="' . $width . '" height="' . $height . '"/>';
     }
}
