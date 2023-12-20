<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public $config = [
        // 'content_home',
        // 'title',
        // 'email',
        // 'meta_title',
        // 'h1_home',
        // 'meta_description',
        // 'meta_keyword',
        // 'logo',
        // 'favicon',
        // 'index',
        // 'content',
        // 'facebook',
        // 'address',
        // 'phone',
        'config_website',
        'config_seo',
        'config_social'
    ];

    function setting(Request $request)
    {
        if ($request->method() == "POST") {
            $data = $request->only($this->config);  
            foreach ($data as $key => $value) {
                try {
                    $value = is_array($value) ? json_encode($value) : $value;
                    DB::beginTransaction();
                    Setting::updateOrCreate(['key' => $key], ['value' => $value, 'title' => $key, 'key' => $key, 'domain' => $_SERVER['HTTP_HOST']]);
                    DB::commit();
                } catch (\Exception $ex) { 
                    DB::rollBack();
                }
            }
            if (Cache::has('setting')) {
                Cache::forget('setting');
            }
            return $this->responsiveSuccess("Cập nhập thành công");
        }
        $settings = Setting::select(['key', 'value'])->get()->toArray();
        $settings = array_combine(array_column($settings, 'key'),  array_column($settings, 'value'));
        
        if (!Cache::has('setting')) {
            Cache::put('setting', json_encode($settings), 365 * (24 * 60));
        }

        $data = [
            'setting' => $settings
        ];
        return view('admin.setting', $data);
    }
}
