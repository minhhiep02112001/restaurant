<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    protected $fillData = ['title', 'icon', 'link', 'parent_id', 'order', 'class', 'location_id', 'language_code', 'type'];
    protected $fillSearch = [
        'title', 'location_id', 'type',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_header = Menu::where('location_id', 0)->orderBy('order', 'asc')->get();
        $data_footer = Menu::where('location_id', 1)->get();

        $data = [
            'headers' => $data_header,
            'footers' => $data_footer
        ];
        return view('admin.menu.index', $data);
    }

    public function ajax_load_data(Request $request)
    {
        $limit = $request->length ?? 10;
        $offset = $request->start;
        $key_search = $request->has('search') ? $request->get('search') : '';

        $filter = $request->only(['id', 'title']);


        $query = Menu::select('*');

        if (!empty($key_search['value'])) {
            $query->where('title', 'like', "%{$key_search['value']}%");
        }

        if ($request->has('params') && !empty($request->params)) {
            parse_str($request->params, $filter);
            $param = collect($filter ?? [])->only($this->fillSearch)->filter(function ($item) {
                return $item != "";
            })->toArray();
            if (!empty($filter['title'])) {
                $query->where('title', 'like', "%{$filter['title']}%");
            }
            if (!empty($param)) {
                $query->where($param);
            }
        }

        $total = $query->count();

        $list = $query->orderBy('id', 'desc')->offset($offset)->limit($limit)->get();
        $config = config('data.config_menu');
        $rows = [];
        if (!empty($list)) foreach ($list as $item) {
            $row = array();
            $row['checkID'] = $item->id;
            $row['id'] = $item->id;
            $row['title'] =  "<a href='" . url($item->link) . "' target='_blank'>{$item->title}</a>";
            $row['parent_id'] = $item->parent_id;
            $row['link']    = $item->link;
            $row['position']     = "<p class='text-center' >{$item->order}</p>";
            $row['location_id']     = "<p class='text-center' >" . $config[$item->location_id] . "</p>";
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
            'action' => route('admin.menu.store'),
            'method' => 'POST',
        ];
        return view('admin.menu.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only($this->fillData);
        try {
            DB::beginTransaction();
            Menu::create($input);
            DB::commit();
            return $this->responsiveSuccess('Thêm menu thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->responsiveError($ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if (!$request->ajax()) return redirect()->route('admin.menu.index');
        $menu = Menu::find($id);
        if (empty($menu)) return response()->json(['status' => 'error'], 500);
        return response()->json(['status' => 'success', 'data_info' => $menu], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'action' => route('admin.menu.update', ['menu' => $id]),
            'row' => Menu::find($id),
            'method' => 'PUT',
        ];
        return view('admin.menu.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $input = $request->only($this->fillData);
        $input = array_filter($input);

        if ($request->has('is_status')) $input['is_status'] = $request->get('is_status') ?? $menu->is_status;
        if ($request->has('is_robot')) $input['is_robot'] = $request->get('is_robot') ?? $menu->is_robot;

        try {
            DB::beginTransaction();
            $menu->update($input);
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        if (empty($menu)) return $this->responsiveSuccess('Danh mục này không tồn tại', 'warning');
        $parent_id = $menu->parent_id;
        try {
            DB::beginTransaction();
            $menu->delete();
            Menu::where('parent_id', $id)->update(['parent_id' => $parent_id]);
            DB::commit();
            return $this->responsiveSuccess('Xóa thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->responsiveError($ex->getMessage());
        }
    }
}
