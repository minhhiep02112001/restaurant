<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\File;
use App\Models\Game;
use App\Models\Post;
use App\Models\QueryDB;
use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    protected $model_game;
    protected $model_category;

    private $select_game = [
        'g_games.id', 'g_games.title', 'g_games.slug', 'g_games.thumbnail', 'g_games.description', 'g_games.avg_vote', 'g_games.background_img', 'g_games.total_download',  'g_games.total_vote',  'g_games.viewed'
    ];

    public function __construct()
    {
        $this->model_game = new Game();
        $this->model_category = new Category();
        $this->cate_game_id = 1;
        $this->cate_app_id = 20;
    }

    private function getUserIpAddr()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    function voteData(Request $request)
    {
        $ip = $this->getUserIpAddr();
        $vote = $request->vote ?? 0;
        $game = Game::find($request->game_id);
        if (empty($game)) return;
        $votes = Vote::where('game_id', $game->id ?? 0)->orderBy('created_at', 'desc')->get();
        $total = $votes->count() + 1;
        $avg_vote = round((($votes->sum('rating') + $vote) / $total), 1);
        if (!empty($votes) && $votes->count() > 0) {
            $first = $votes->first();
            $time = Carbon::parse($first->created_at, 'Y-m-d H:i:s');
            if ($time->diffInMinutes(Carbon::now()->format("Y-m-d H:i:s")) < 10) {
                return response()->json([
                    'status' => false,
                    'message' => 'You have rated this game of ours'
                ], 404);
            }
        }
        Vote::create([
            'ip_address' => $ip,
            'rating' => $vote,
            'game_id' => $game->id ?? 0,
        ]);

        Game::updateField($game->id, [
            'avg_vote' => $avg_vote,
            'total_vote' => $total
        ]);
        \ResponseCache::clear();

        return response()->json([
            'status' => true,
            'message' => 'Thank you for rating the game',
            'avg_vote' => $avg_vote,
            'total_vote' => $total
        ], 200);
    }

    public function ajax_load_data_page(Request $request)
    {
        $data_seach = $request->only(['order_by', 'type']);
        $data['games'] = Game::getGames($data_seach, $request->page ?? 1, $request->limit ?? 10);
        return view('front_end.ajax.load_game', $data)->render();
    }
    public function ajax_load_data(Request $request)
    {
        $data_seach = $request->only(['tag_id', 'category_id', 'order_by', 'type', 'page', 'limit', 'title']);
        $type =  $data_seach['type'] ?? 'game';
        $page = $data_seach['page'] =  $data_seach['page'] ?? 1;
        $data_seach['type'] = $data_seach['type'] ?? 'home';
        $data_seach['order_by'] = $data_seach['order_by'] ?? 'publish_at';
        if (!empty($data_seach['category_id'])) {
            $cate = $this->model_category->all_child($data_seach['category_id']);
            $data_id = !empty($cate) ? array_column($cate, 'id') : [];
            $data_seach['category_id'] =  array_merge([$data_seach['category_id']], $data_id);
        }
        $limit =  $data_seach['limit'] = $data_seach['limit'] ?? 10;
        $key = env("APP_NAME") . "_{$page}_{$limit}_" . json_encode($data_seach);
        $html = "";

        if (Cache::has("file_$key") && $type != 'search') {
            return Cache::get("file_$key");
        }
        $data_seach['select'] = ['g_post.id', 'g_post.title',  'g_post.description',  'g_post.thumbnail', 'g_post.slug',    'g_post.data_mp4_movie'];

        $rows = $this->query($key, $data_seach);
        switch ($type) {
            case "page":
                $view = 'front_end.ajax.load_page';
                break;
            case "search":
                $view = 'front_end.ajax.load_search_game';
                break;
            default:
                $view = 'front_end.ajax.load_game';
                break;
        }
        $html = view($view, ['games' => $rows])->render();
        if ($type != 'search') Cache::put("file_$key", $html, 300);
        return $html;
    }
    private function query($key, $data)
    {
        $cache = 60 * 60;
        $delete_cache = false;
        $param = [
            'where' => [
                "g_games.is_status" => 0
            ],
            'option' => [
                'select' => $this->select_game,
                'limit' => $data['limit'],
                'page' => $data['page']
            ]
        ];
        if (!empty($data['type'])) {
            switch ($data['type']) {
                case "search":
                    if (empty($data['title'])) return [];
                    $param['where']['title'] =  ['like' => $data['title']];
                    $delete_cache = true;
                    $cache = 300;
                    break;
                case "tag":
                    if (!empty($data['tag_id'])) {
                        $param['where']['join'] =  ['table' => 'g_post_tag', 'foreign_key' => "post_id"];
                        $param['where']['g_post_tag.tag_id'] =  $data['tag_id'];
                    }
                    break;
                case "category":
                    if (!empty($data['category_id'])) {
                        $param['where']['join'] =  ['table' => 'g_game_categorys', 'foreign_key' => "game_id"];
                        $param['where']['g_game_categorys.category_id'] =  $data['category_id'];
                    }
                    break;
                default:
                    break;
            }
        }


        $param['where']['fisrt_join'] =  [
            'table' => 'g_versions',
            'foreign_key' => "game_id",
            'select' => ['g_versions.title as version_title', 'g_versions.id as version_id'],
            'order_by' => 'publish_at'
        ];


        if (!empty($data['order_by'])) {
            $param['option']["order_by"] = $data['order_by'];
        }
        $posts =  $this->model_game->getData($key, $param, $delete_cache, $cache);

        return $posts;
    }

    public function download(Request $request, $id)
    {
        $type = $request->type ?? 'apk';
        $file = File::find($id);
        if (empty($file)) return response()->json(['status' => 'error']);
        $link = "";
        switch ($type) {
            case "apk":
                $link = $file->file_name_apk ?? '';
                break;
            case "pc":
                $link = $file->file_name_pc ?? '';
                break;
            case "app":
                $link = $file->file_name_ap ?? '';
                break;
            default:
                return response()->json(['status' => 'error']);
                break;
        }

        $version = $file->versions()->first();
        if (!empty($version)) {
            $game = Game::find($version->game_id);
            if (!empty($game)) {
                $total_download = ($game->total_download ?? 0) + rand(1, 5);
                DB::table('g_games')->where('id', $game->id)->update([
                    'total_download' => $total_download
                ]);
                DB::table('st_log_download')->insert([
                    'ip' =>  $_SERVER['REMOTE_ADDR'],
                    'game_id' => $game->id,
                    'version_id' => $file->version_id,
                ]);
            }
        } 
        if (empty($link))  return response()->json(['status' => 'error']);
        return response()->json(['status' => 'success', 'href' => $link]); 
    }
}
