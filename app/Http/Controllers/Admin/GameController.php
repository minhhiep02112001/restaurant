<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public $fillData = [
        'title', 'content', 'thumbnail', 'is_status', 'is_featured', 'slug', 'description', 'user_id', 'meta_title', 'meta_description', 'meta_keyword',
        'is_robot', 'status', 'status_story', 'author_id', 'author_title', 'author_slug', 'viewed', 'viewed_week', 'total_vote', 'avg_vote', 'total_chapter',
        'crawler_href', 'website', 'figure', 'id'
    ];

    protected $model;
    protected $fillSearch = [
        'title', 'slug', 'crawler_href', 'is_status', 'is_robot','type'
    ];
    public function __construct()
    {
        $this->model = new Game();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function game()
    {
        return $this->index(1);
    }
    public function app()
    {
        return $this->index(2);
    }

    private function index($type)
    {
        $data = ['type' => $type];
        return view('admin.game.index', $data);
    }

    public function ajax_load_data(Request $request)
    {

        $data = $this->get_list_data_table($request);
        extract($data);
        $rows = [];
        if (!empty($list)) foreach ($list as $item) {
            $title = $item->title;
            if ($item->is_status == 1) {
                $title = "<a target='_blank' href='" . route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) . "' title='{$item->title}'>{$item->title}</a>";
            }

            $link_iframe = "(<a target='_blank' href='{$item->crawler_href}'><u>Link crawler</u></a>)";

            $row = array();
            $row['checkID'] = $item->id;
            $row['id'] = $item->id;
            $row['title_customer'] = "$title <br> $link_iframe";
            $row['title'] =  $title;
            $row['viewed']    = $item->viewed;
            $row['avg_vote']    = $item->avg_vote;
            $row['total_vote']    = $item->total_vote;
            $row['total_download']    = $item->total_download ?? 0;
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'action' => route('admin.games.store'),
            'method' => 'POST',
        ];
        return view('admin.game.form', $data);
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
            $story = Game::create($data);
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
        if (!$request->ajax()) return redirect()->back();
        $story = Game::find($id);
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
        $row = Game::find($id);
        if (empty($row)) return abort(404);
        $category = $row->categories()->select(['g_categories.id', 'g_categories.title'])->get()->toArray();

        $data = [
            'action' => route('admin.games.update', ['game' => $id]),
            'method' => 'PUT',
            'row' => $row,
            'category_id' => $category
        ];
        return view('admin.game.form', $data);
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
        $story = Game::find($id);
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
        $story = Game::find($id);
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
