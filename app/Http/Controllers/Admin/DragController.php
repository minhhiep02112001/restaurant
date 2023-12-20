<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DragController extends Controller
{
    protected $fillData = [
        'id', 'type', 'order', 'key'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function game()
    {
        $key = [
            'config_topic_game_home' => 'Config topic game home'
        ];
        return view('admin.drag.index', ['type' => 'game', 'key' => $key]);
    }
    public function category()
    {
        $key = [
            'config_cate_home' => 'Config category home'
        ];
        return view('admin.drag.index', ['type' => 'category', 'key' => $key]);
    }

    public function ajax_load_data(Request $request)
    {
        $key = $request->key;
        $query = DB::table('g_drag')->where('key', $key)->orderBy('order', 'asc')->get()->toArray();
        $arr_id = array_column($query, 'id');

        $data = [];
        if (!empty($arr_id)) {
            $type = array_column($query, 'type')[0];
            if ($type == 'category') {
                $story = DB::table('g_categories')->whereIn('id', $arr_id)->get()->keyBy('id')->toArray();
            }
            if ($type == 'game') {
                $story = DB::table('g_games')->whereIn('id', $arr_id)->get()->keyBy('id')->toArray();
            }
            foreach ($query as $item) {
                $val = $story[$item->id] ?? [];
                if (!empty($val)) $data[] = ['id' => $val->id, 'text' => $val->title, 'type' => $item->type];
            }
        }
        return response()->json($data);
    }


    public function store(Request $request)
    {
        $data = $request->get('drag_id');
        $arr = [];
        foreach ($data as $key =>  $item) {
            $arr[] = [
                'id' => $item['id'],
                'type' => $item['type'],
                'key' => $request->key,
                'order' => $key
            ];
        }
        DB::table('g_drag')->where('key', $request->key)->delete();
        $check = DB::table('g_drag')->insert($arr);
        return response()->json([
            'status' => $check ? 'success' : 'error',
            'message' => $check ? 'Thành công' : 'Lỗi'
        ]);
    }
}
