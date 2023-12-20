<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Redirect;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RedirectController extends Controller
{
    protected $fillData = ['type', 'url_old', 'url_new', 'key_id', 'is_robot','slug'];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data = [];
        return view('admin.redirect.index', $data);
    }

    public function ajax_load_data(Request $request)
    {
        $limit = $request->length ?? 10;
        $offset = $request->start;
        $key_search = $request->has('search') ? $request->get('search') : '';

        $filter = $request->only(['id', 'title']);


        $query = Redirect::select('*');
        if (!empty($key_search['value'])) {
             $query->where('url_old', 'like', "%{$key_search['value']}%");
             $query->orWhere('url_new', 'like', "%{$key_search['value']}%");
        }

        $total = $query->count();

        $list = $query->orderBy('id', 'desc')->offset($offset)->limit($limit)->get();

        $rows = [];
        if (!empty($list)) foreach ($list as $item) {
            $row = array();
            $row['checkID'] = $item->id;
            $row['id'] = $item->id; 
            $row['type'] =  $item->type;
            $row['url_old'] = "<a target='_blank' href='{$item->url_old}'>{$item->url_old}</a>";
            $row['url_new'] ="<a target='_blank' href='{$item->url_new}'>{$item->url_new}</a>";
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
            'action' => route('admin.redirect.store'),
            'method' => 'POST',
        ];
        return view('admin.redirect.form', $data);
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
            switch ($input['type']) {
                case 'category':
                    $category = Category::find($input['key_id']);
                    $input['slug'] = $category->slug;
                    break;
                case 'post':
                    $story = Post::find($input['key_id']);
                    $input['slug'] = $story->slug ?? '';
                    break;
                case 'tag':
                    $story = Tag::find($input['key_id']);
                    $input['slug'] = $story->slug ?? '';
                    break;
                case 'page':
                    $story = Page::find($input['key_id']);
                    $input['slug'] = $story->slug ?? '';
                    break;
                default:
                    $input['key_id'] = 0;
                    $input['slug'] = '';
                    break; 
            }
            DB::beginTransaction();
            Redirect::insert($input);
            DB::commit();
            return $this->responsiveSuccess('Thêm link 301 thành công');
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
    public function show(Request $request, $id)
    {
        if (!$request->ajax()) {
            return redirect()->route('admin.redirect.index');
        }

        $redirect = Redirect::find($id);
        if (empty($redirect)) {
            return response()->json(['status' => 'error'], 500);
        }

        return response()->json(['status' => 'success', 'data_info' => $redirect], 200);
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
            'action' => route('admin.redirect.update', ['redirect' => $id]),
            'row' => Redirect::find($id),
            'method' => 'PUT',
        ];
        return view('admin.redirect.form', $data);
       
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
        $input = $request->only($this->fillData);
        $input = array_filter($input);
        $redirect= Redirect::find($id);
        if ($request->has('is_status')) {
            $input['is_status'] = $request->get('is_status') ?? $redirect->is_status;
        }
        if ($request->has('is_robot')) {
            $input['is_robot'] = $request->get('is_robot') ?? $redirect->is_robot;
        }
        try {
            DB::beginTransaction();
            Redirect::where('id', $id)->update($input);
            DB::commit();
            return $this->responsiveSuccess('Sửa thành công');
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
        $redirect = Redirect::find($id);
        if (empty($redirect)) {
            return $this->responsiveSuccess('Không tồn tại', 'warning');
        }

        try {
            DB::beginTransaction();
            $redirect->delete();
            DB::commit();
            return $this->responsiveSuccess('Xóa thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->responsiveError($ex->getMessage());
        }
    }
}
