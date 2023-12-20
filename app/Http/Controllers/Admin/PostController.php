<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public $fillable = [
        'title', 'content', 'thumbnail', 'is_status', 'is_featured', 'slug', 'description', 'user_id', 'meta_title', 'meta_description', 'meta_keyword',
        'is_robot', 'status', 'status_story', 'author_id', 'author_title', 'author_slug', 'viewed', 'viewed_week', 'total_vote', 'avg_vote', 'total_chapter',
        'crawler_href', 'website', 'figure'
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
        $data = [];
        return view('admin.post.index', $data);
    }

    public function ajax_load_data(Request $request)
    {

        $limit = $request->length ?? 10;
        $offset = $request->start;
        $key_search = $request->has('search') ? $request->get('search') : '';
        $query = Post::select('*');

        if (!empty($key_search['value'])) {
            $query->where('title', 'like', "%{$key_search['value']}%");
        }

        if ($request->has('params') && !empty($request->params)) {
            parse_str($request->params, $filter);
            $param = collect($filter ?? [])->only($this->fillSearch)->filter(function ($item) {
                return $item != "";
            })->toArray();
            if (!empty($param['title'])) {
                $query->where('title', 'like', "%{$param['title']}%");
                $query->orWhere('id', 'like', "%{$param['title']}%");
                $query->orWhere('slug', 'like', "%{$param['title']}%");
                unset($param['title']);
            }
            if (!empty($param)) {
                $query->where($param);
            }
        }

        $total = $query->count();

        $list = $query->orderBy('id', 'desc')->offset($offset)->limit($limit)->get();

        $rows = [];
        if (!empty($list)) foreach ($list as $item) {
            $title = $item->title;
            if ($item->is_status == 1) {
                $title = "<a target='_blank' href='" . route('detail', ['slug' => $item->slug, 'id' => $item->id]) . "' title='{$item->title}'>{$item->title}</a>";
            }

            $link_iframe = "(<a target='_blank' href='{$item->iframe}'><u>Link Game</u></a>)";

            $row = array();
            $row['checkID'] = $item->id;
            $row['id'] = $item->id;
            $row['title'] = "$title <br> $link_iframe";
            $row['parent_id'] = $item->parent_id;
            $row['is_status']    = $item->is_status;
            $row['thumbnail']    = '<img loading="lazy" style="width:110px ; height:100px; margin 0 auto;" src="' . convertPathImage($item->thumbnail) . '">';
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

        // $limit = $request->length ?? 10;
        // $offset = $request->start;
        // $key_search = $request->has('search') ? $request->get('search') : ''; 
        // $query = Post::select('*');

        // if (!empty($key_search['value'])) {
        //     $query->where('title', 'like', "%{$key_search['value']}%");
        // }

        // if ($request->has('params') && !empty($request->params)) {
        //     parse_str($request->params, $filter);
        //     $param = collect($filter ?? [])->only($this->fillSearch)->filter(function ($item) {
        //         return $item != "";
        //     })->toArray();
        //     if(!empty($param['title'])){
        //         $query->where('title', 'like', "%{$param['title']}%");
        //         unset($param['title']);
        //     }
        //     if(!empty($param)){
        //         $query->where($param);
        //     }
        // }

        // $total = $query->count();

        // $list = $query->orderBy('id', 'desc')->offset($offset)->limit($limit)->get();

        // $rows = [];
        // if (!empty($list)) foreach ($list as $item) {
        //     $row = array();
        //     $row['checkID'] = $item->id;
        //     $row['id'] = $item->id;
        //     $row['title'] = "<a target='_blank' href='' title='{$item->title}'>{$item->title}</a>";
        //     $row['parent_id'] = $item->parent_id;
        //     $row['is_status']    = $item->is_status;
        //     $row['thumbnail']    = '<img style="width:110px ; height:100px; margin 0 auto;"  src="'. convertPathImage($item->thumbnail) .'">';
        //     $row['is_robot']     = $item->is_robot;
        //     $row['updated_at'] = $item->updated_at;
        //     $row['created_at'] = $item->created_at;
        //     $rows[] = $row;
        // }

        // $data = [
        //     "draw" => intval($request->draw ?? 0),
        //     "iTotalRecords" => $total,
        //     "iTotalDisplayRecords" => $total,
        //     "aaData" => $rows,
        //     'data' => $rows,
        // ];
        // return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'action' => route('admin.post.store'),
            'method' => 'POST',
        ];
        return view('admin.post.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only($this->fillable);
        try {
            DB::beginTransaction();
            $story = Post::create($data);
            if ($request->has('category') && !empty($request->get('category'))) {
                $story->category()->attach($request->category);
            }
            DB::commit();
            return $this->responsiveSuccess('Thêm chuyện thành công');
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
        if (!$request->ajax()) return redirect()->route('admin.category.index');
        $story = Post::find($id);
        if (empty($story)) return response()->json(['status' => 'error'], 500);
        $story['category_id'] = $story->category()->get()->pluck('id')->toArray();
        return response()->json(['status' => 'success', 'data_info' => $story], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Post::find($id);
        if (empty($row)) return abort(404);
        $category = $row->categories()->select(['g_categories.id', 'g_categories.title'])->get()->toArray();

        $data = [
            'action' => route('admin.post.update', ['post' => $id]),
            'method' => 'PUT',
            'row' => $row,
            'category_id' => $category
        ];
        return view('admin.post.form', $data);
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
        $story = Post::find($id);
        $input = $request->only($this->fillable);
        $input = array_filter($input);

        if ($request->has('is_status')) $input['is_status'] = $request->get('is_status') ?? $story->is_status;
        if ($request->has('is_robot')) $input['is_robot'] = $request->get('is_robot') ?? $story->is_robot;

        try {
            DB::beginTransaction();
            $story->update($input);
            if ($request->has('category') && !empty($request->get('category'))) {
                $story->category()->detach([]);
                $story->category()->attach($request->category);
            }
            DB::commit();
            return $this->responsiveSuccess('Sửa chuyện thành công');
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
        $story = Post::find($id);
        if (empty($story)) return $this->responsiveSuccess('Chuyện này không tồn tại', 'warning');
        try {
            DB::beginTransaction();
            $story->delete();
            DB::commit();
            return $this->responsiveSuccess('Xóa chuyện thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            return $this->responsiveError($ex->getMessage());
        }
    }
}
