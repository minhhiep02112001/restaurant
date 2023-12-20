<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $cate_game_id;
    protected $cate_app_id;
    function responsiveError($message, $status = 500)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message
        ], $status);
    }

    function responsiveSuccess($message, $status = 'success', $data = [])
    {
        $arr = array('status' => $status, 'message' => $message);
        if (!empty($data)) {
            $arr['data'] = $data;
        }

        return response()->json($arr, 200);
    }

    protected function get_list_data_table($request)
    {
        $limit = $request->length ?? 10;
        $offset = $request->start;
        if (!empty($request->page)) $offset = ($request->page - 1) * $limit;

        $key_search = $request->has('search') ? $request->get('search') : '';

        $filter = $request->only(array_merge($this->fillData, ['search']));
        unset($filter['order']);

        if (!empty($key_search['value'])) $filter['title'] = $key_search['value'];

        if ($request->has('params') && !empty($request->params)) {
            parse_str($request->params, $filter);
            $param = collect($filter ?? [])->only($this->fillSearch)->toArray();
            $filter = array_merge($filter, $param);
        }
        if (!empty($filter)) $filter = array_filter($filter, function ($item) {
            return $item != "";
        });
        if (!empty($filter['title'])) $filter['title'] = ['like' => "%{$filter['title']}%"];
        
        $data['list'] = $this->model->fetchData($filter, ['limit' => $limit, 'offset' => $offset]); 
        $data['total'] =  $this->model->count_data($filter);
        
        return $data;
    }
}
