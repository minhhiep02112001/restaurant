<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    protected $fillData = [
        'title', 'slug', 'parent_id', 'thumbnail', 'layout', 'type', 'crawler_href', 'is_featured', 'is_status', 'is_robot',
        'description', 'meta_title', 'meta_description', 'meta_keyword', 'order', 'content', 'show_content', 'schema'
    ];

    protected $fillSearch = [
        'title', 'slug', 'crawler_href', 'is_status', 'is_robot', 
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tag.index');
    }

    public function ajax_load_data(Request $request)
    {
        $limit = $request->length ?? 10;
        $offset = $request->start;
        $key_search = $request->has('search') ? $request->get('search') : '';

        

       
        $query = Tag::select('*');
        if (!empty($key_search['value'])) {
            $query->where('title', 'like', "%{$key_search['value']}%");
        }

        if($request->has('params') && !empty($request->params)){
            parse_str($request->params, $filter);
            $param = collect($filter ?? [])->only($this->fillSearch)->filter(function($item) {return $item !="";})->toArray(); 
            if(!empty($param['title'])){
                $query->where('title', 'like', "%{$param['title']}%");
                unset($param['title']);
            }
            if(!empty($param)){
                $query->where($param);
            }
        }  

        $total = $query->count();

        $list = $query->orderBy('id', 'desc')->offset($offset)->limit($limit)->get();

        $rows = [];
        if (!empty($list)) foreach ($list as $item) {
            $row = array();
            $row['checkID'] = $item->id;
            $row['id'] = $item->id;
            $row['title'] =  $item->title ;
            $row['parent_id'] = $item->parent_id;
            $row['is_status']    = $item->is_status;
            $row['is_robot']     = $item->is_robot;
            $row['is_home']     = $item->is_home;
            $row['updated_at'] = $item->updated_at;
            $row['created_at'] = $item->created_at;
            $rows[] = $row;
        }

        $data = [
            "draw" => intval($request->draw ?? 0),
            "iTotalRecords" => $total,
            "iTotalDisplayRecords" => $total,
            "aaData" => $rows,
            'data' => $rows,
        ];
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'action' => route('admin.tag.store'),
            'method' => 'POST',
        ];
        return view('admin.tag.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only($this->fillData);
        try {
            DB::beginTransaction();
            Tag::insert($input);
            DB::commit();
            return $this->responsiveSuccess('Thêm tag thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->responsiveError($ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if (!$request->ajax()) return redirect()->route('admin.tag.index');
        $tag = Tag::find($id);
        if (empty($tag)) return response()->json(['status' => 'error'], 500);
        return response()->json(['status' => 'success', 'data_info' => $tag], 200);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'action' => route('admin.tag.update', ['tag' => $id]),
            'row' => Tag::find($id),
            'method' => 'PUT',
        ]; 
        return view('admin.tag.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $input = $request->only($this->fillData);
        $input = array_filter($input);

        if ($request->has('is_status')) $input['is_status'] = $request->get('is_status') ?? $tag->is_status;
        if ($request->has('is_robot')) $input['is_robot'] = $request->get('is_robot') ?? $tag->is_robot;
        if ($request->has('is_home')) $input['is_home'] = $request->get('is_home') ?? $tag->is_home;
        try {
            DB::beginTransaction();
            $tag->update($input);
            DB::commit();
            return $this->responsiveSuccess('Sửa tag thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->responsiveError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        if (empty($tag)) return $this->responsiveSuccess('Danh mục này không tồn tại', 'warning');
        try {
            DB::beginTransaction();
            $tag->delete();
            DB::commit();
            return $this->responsiveSuccess('Xóa tag thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->responsiveError($ex->getMessage());
        }
    }
}
