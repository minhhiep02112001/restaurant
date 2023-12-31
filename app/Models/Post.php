<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends AbstractModel
{
    use HasFactory;

    // status post
    const DRAFT = 0;
    const DRAFT_ALIAS = 'Bài nháp';
    const PENDING = 2;
    const PENDING_ALIAS = 'Mới cào';
    const REJECT = 3;
    const REJECT_ALIAS = 'Bị từ chối';
    const APPROVED = 1;
    const APPROVED_ALIAS = 'Đã xuất bản';

    const IS_MOST = 1;
    const IS_NOT_MOST = 2;
    const VIEW_HOT = 1000;

    protected $table = 'st_post';
    protected $fillable = [
        'title', 
        'content', 
        'thumbnail',
        'is_status',
        'slug', 
        'description',
        'meta_title',
        'meta_description',
        'meta_keyword', 
        'crawler_href', 
        'viewed',
        'vote',
        'location',
        'maps', 
        'country_id', 
        'website_link', 
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'g_post_category', 'post_id', 'category_id',);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'g_post_tag', 'post_id', 'tag_id',);
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
        return DB::table('g_post')->where('id', $id)->update($param);
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

    public static function getGames($option = [], $page = 1, $limit = 10, $select = ['*'])
    {
        $query = self::query()->where([
            'is_status' => self::APPROVED
        ]);
        if (!empty($option['search'])) {
            $query->where('title', 'like', "%{$option['search']}%");
        }
        if (!empty($option['order_by'])) {
            $query->orderBy($option['order_by'] ?? 'played', 'desc');
        }
        return $query->paginate($limit, $select, 'page', $page);
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
}
