<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $model;
    protected $fillData = [
        'title', 'slug', 'parent_id', 'thumbnail', 'layout', 'type', 'crawler_href', 'is_featured', 'is_status', 'is_robot',
        'description', 'meta_title', 'meta_description', 'meta_keyword', 'order', 'content', 'show_content', 'schema', 'id'
    ];

    protected $fillSearch = [
        'title', 'slug', 'crawler_href', 'is_status', 'is_robot', 'id'
    ];

    public function __construct()
    {
        $this->model = new Category();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function game()
    {
        return $this->index('game');
    }
    public function post()
    {
        return $this->index('post');
    }
    private function index($type = '')
    {
        return view('admin.category.index', ['type' => $type]);
    }

    public function ajax_load_data(Request $request)
    {
        $data = $this->get_list_data_table($request);
        extract($data);
        $rows = [];
        if (!empty($list)) foreach ($list as $item) {
            $title = $item->title;
            if ($item->is_status == 1) {
                $title = "<a target='_blank' href='' title='{$item->title}'>{$item->title}</a>";
            }

            $row = array();
            $row['checkID'] = $item->id;
            $row['id'] = $item->id;
            $row['title_customer'] =  $title;
            $row['title'] =  $item->title;
            $row['parent_id'] = $item->parent_id;
            $row['is_status']    = $item->is_status;
            $row['is_robot']     = $item->is_robot;
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
            'action' => route('admin.category.store'),
            'method' => 'POST',
        ];
        return view('admin.category.form', $data);
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
            Category::insert($input);
            DB::commit();
            return $this->responsiveSuccess('Thêm danh mục thành công');
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
        if (!$request->ajax()) return redirect()->back();
        $category = Category::find($id);
        if (empty($category)) return response()->json(['status' => 'error'], 500);
        return response()->json(['status' => 'success', 'data_info' => $category], 200);
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
            'action' => route('admin.category.update', ['category' => $id]),
            'row' => Category::find($id),
            'method' => 'PUT',
        ];
        return view('admin.category.form', $data);
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
        $category = Category::find($id);
        $input = $request->only($this->fillData);
        $input = array_filter($input);

        if ($request->has('is_status')) $input['is_status'] = $request->get('is_status') ?? $category->is_status;
        if ($request->has('is_robot')) $input['is_robot'] = $request->get('is_robot') ?? $category->is_robot;
        if ($request->has('is_home')) $input['is_home'] = $request->get('is_home') ?? $category->is_home;

        try {
            DB::beginTransaction();
            $category->update($input);
            DB::commit();
            return $this->responsiveSuccess('Sửa danh mục thành công');
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
        $category = Category::find($id);
        if (empty($category)) return $this->responsiveSuccess('Danh mục này không tồn tại', 'warning');
        try {
            DB::beginTransaction();
            $category->delete();
            DB::commit();
            return $this->responsiveSuccess('Xóa danh mục thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->responsiveError($ex->getMessage());
        }
    }
}
