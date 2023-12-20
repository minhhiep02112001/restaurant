<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class News extends AbstractModel
{

    use HasFactory;

    // status post
    const DRAFT = 0;
    const DRAFT_ALIAS = 'Bài nháp';
    const PENDING = 2;
    const PENDING_ALIAS = 'Mới cào';
    const REJECT = 3;
    const REJECT_ALIAS = 'Bị từ chối';
    const APPROVED = 0;
    const APPROVED_ALIAS = 'Đã xuất bản';

    const IS_MOST = 1;
    const IS_NOT_MOST = 2;
    const VIEW_HOT = 1000;

    protected $table = 'g_games';
    protected $fillable = [
        'title',
        'create_by',
        'content',
        'viewed',
        'background_img',
        'thumbnail',
        'is_status',
        'slug',
        'description',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'is_robot',
        'crawler_href',
        'avg_vote',
        'total_vote',
        'producerId',
        'info_game',
        'publish_at',
        'total_download',
        'developer',
        'link_gg_play',

    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'g_game_categorys', 'game_id', 'category_id',);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'g_game_tag', 'game_id', 'tag_id',);
    }


    public function get_all_category($game_id)
    {
        $key = "cache_get_all_category_$game_id";
        if (Cache::has($key)) return Cache::get($key);
        $data = \DB::table('g_categories as c')->join('g_game_categorys as gc', "gc.category_id", '=', "c.id")->where([
            'gc.game_id' => $game_id,
            'c.is_status' => 1
        ])->select(['c.id', 'c.slug', 'c.title', 'c.thumbnail', 'c.parent_id'])->get()->toArray();
        Cache::put($key, $data, 24 * 60 * 60);
        return $data;
    }

    public function displayStatus()
    {
        $status = '';
        switch ($this->is_status) {
            case self::DRAFT;
                $status = self::DRAFT_ALIAS;
                break;
            case self::PENDING;
                $status = self::PENDING_ALIAS;
                break;
            case self::REJECT;
                $status = self::REJECT_ALIAS;
                break;
            case self::APPROVED;
                $status = self::APPROVED_ALIAS;
        }
        return $status;
    }


    public static function updateField($id, $param)
    {
        return \DB::table('g_games')->where('id', $id)->update($param);
    }

    public static function getDetailSlug($slug, $select = ["*"])
    {
        $story = self::query()->where([
            'slug' => $slug,
            'is_status' => self::APPROVED,
        ])->select($select)->first();
        if (!empty($story)) {
            $rand_dom = rand(0, 3);
            $story->viewed = $story->viewed + 1;
            $story->liked = $story->liked + $rand_dom;
            DB::table('g_post')->where('id', $story->id)->update([
                'viewed' => $story->viewed,
                'liked' => $story->liked,
            ]);
        }
        return $story;
    }


    public static function getGameToSlug($slug, $option = [])
    {
        return self::query()->where([
            'g_post.is_status' => self::APPROVED,
            'g_post.slug' => $slug
        ])->select($option['select'] ?? ['*'])->first();
    }

    public static function getGameTop($option = [], $limit = 10, $select = ['*'])
    {
        return self::query()->where([
            'is_status' => self::APPROVED
        ])->orderBy($option['order_by'] ?? 'avg_vote', 'desc')->select($option['select'] ?? ['*'])->take($limit)->get();
    }

    public static function getGames($option = [], $page = 1, $limit = 10, $select = ['*'], $paginate = false)
    {
        $query = self::query()->where([
            'is_status' => self::APPROVED
        ]);
        if (!empty($option['category_id'])) {
            $query = $query->join('g_game_categorys', 'g_game_categorys.game_id', '=', "g_games.id");
            if (is_array($option['category_id'])) $query->whereIn('g_game_categorys.category_id', $option['category_id']);
            else $query->where('g_game_categorys.category_id', $option['category_id']);
        }

        if (!empty($option['search'])) {
            $query->where('title', 'like', "%{$option['search']}%");
        }

        if (!empty($option['not_in'])) {
            $query->whereNotIn('g_games.id', $option['not_in']);
        }

        $query->orderBy($option['order_by'] ?? 'publish_at', 'desc');

        if (!empty($paginate)) return $query->paginate($limit, $select, 'page', $page);
        return $query->select($select)->limit($limit)->offset(($page - 1) * $limit)->get();
    }
    
    

    public static function siteMap($limit = 0, $offset = 0)
    {
        $result = self::query()->select('id', 'slug', 'title', 'updated_at')
            ->where('is_status', self::APPROVED)
            ->orderBy('created_at', 'desc');
        if (!empty($limit) && !empty($offset)) {
            $result->limit($limit)->offset($offset);
        }
        return $result->get();
    }

    public static function getPostCategory(Category $category, $option = [], $page = 1, $limit = 60)
    {
        $select = ['g_post.id', 'g_post.title', 'g_post.thumbnail', 'g_post.total_vote', 'g_post.slug', 'g_post.played', 'g_post.viewed', 'g_post.avg_vote',];

        $query = $category->posts()->where('is_status', self::APPROVED);

        if (!empty($option['order_by']) && in_array(strtolower($option['order_by']), ['viewed', 'date', 'played', 'total_vote'])) {
            $query->orderBy(($option['order_by'] == 'date') ? 'updated_at' : $option['order_by'], 'desc');
        }

        return $query->paginate($limit, $select, 'page', $page);
    }

    public function getJobGames($page = 1, $limit = 10)
    {
        $offset = ($page - 1) * $limit;
        $data = DB::table($this->table)->select(['id', 'title', 'crawler_href','thumbnail', 'background_img'])->limit($limit)->offset($offset)->orderBy('updated_at', 'asc')->get();
        return $data;
    }
}
