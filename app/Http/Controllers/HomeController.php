<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Drag;
use App\Models\File;
use App\Models\Game;
use App\Models\Page;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    protected $model_game;
    protected $model_category;
    private $select_post = [
        'g_post.id', 'g_post.title', 'g_post.slug', 'g_post.thumbnail', 'g_post.description', 'g_post.data_mp4_movie'
    ];

    public function __construct()
    {

        $this->model_category = new Category();
        $this->cate_game_id = 1;
        $this->cate_app_id = 20;
    }
    public function home(Request $request)
    {
        // $data['banners_game'] = Drag::getAllData('config_topic_game_home', 'game');

        $data = [
            'title' => "Home", 
        ];
        return view('front_end.home', $data ?? []);
    }
    public function page($slug, Request $request)
    {

        $row = Page::where('slug', $slug)->where(function ($query) {
            if (!(Auth::check())) return $query->where('is_status', 1);
        })->first();
        if (empty($row)){
            Log::error("Link page: '{$request->url()}' - 404");
            return abort(404);
        } 
        $SEO = [
            'title' => $row->meta_title ?? '',
            'meta_title' => $row->meta_title ?? '',
            'meta_description' => $row->meta_description ?? '',
            'meta_keyword' => $row->meta_title ?? '',
            'is_robot' => $row->is_robot ?? 0,
            'image' => $row->thumbnail ?? config('data.cms_setting.logo'),
            'url' => route('page', ['slug' => $row->slug]),
            'schema' => $row->schema
        ];
        $data = [
            'SEO' => $SEO,
            'title' => $row->title,
            'oneItem' => $row
        ];
        if(!empty($row->layout))  return view("front_end.{$row->layout}", $data); 
        return view('front_end.page', $data);
    } 
}
