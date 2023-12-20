<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    protected $fillData = ['thumbnail' , 'layout', 'is_status', 'is_robot', 'title','slug','description' , 'meta_title', 'meta_keyword', 'meta_description', 'content'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.index');
    }
    public function ajax_load_data(Request $request)
    {
        $limit = $request->length ?? 10;
        $offset = $request->start;
        $key_search = $request->has('search') ? $request->get('search') : ''; 

        $query = Page::select('*');
        if (!empty($key_search['value'])) {
             $query->where('title', 'like', "%{$key_search['value']}%");
        } 

        $total = $query->count();

        $list = $query->orderBy('id', 'desc')->offset($offset)->limit($limit)->get();

        $rows = [];
        if (!empty($list)) foreach ($list as $item) {
            $row = array();
            if ($item->is_status == 1) {
                $title = "<a target='_blank' href='" . route('page', ['slug' => $item->slug]) . "' title='{$item->title}'>{$item->title}</a>";
            }
            $row['checkID'] = $item->id;
            $row['id'] = $item->id;
            $row['title'] = $title ?? $item->title ;
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
            'action' => route('admin.page.store'),
            'method' => 'POST',
        ];
        return view('admin.page.form', $data);
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
            Page::create($input);
            DB::commit();
            return $this->responsiveSuccess('Thêm page thành công');
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
        if (!$request->ajax()) return redirect()->route('admin.page.index');
        $page = Page::find($id);
        if (empty($page)) return response()->json(['status' => 'error'], 500);
        return response()->json(['status' => 'success', 'data_info' => $page], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $row = Page::find($id);
        if(empty($row)) return abort(404); 
        $data = [
            'action' => route('admin.page.update', ['page' => $id]),
            'method' => 'PUT',
            'row' => $row
        ];
        return view('admin.page.form', $data);
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
        $page = Page::find($id);
        $input = $request->only($this->fillData);
        $input = array_filter($input);

        if ($request->has('is_status')) $input['is_status'] = $request->get('is_status') ?? $page->is_status;
        if ($request->has('is_robot')) $input['is_robot'] = $request->get('is_robot') ?? $page->is_robot;

        try {
            DB::beginTransaction();
            $page->update($input);
            DB::commit();
            return $this->responsiveSuccess('Sửa page thành công');
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
        $page = Page::find($id);
        if (empty($page)) return $this->responsiveSuccess('Page này không tồn tại', 'warning');
        try {
            DB::beginTransaction();
            $page->delete();
            DB::commit();
            return $this->responsiveSuccess('Xóa thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->responsiveError($ex->getMessage());
        }
    }
}
