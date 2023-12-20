<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Category extends AbstractModel
{
    use HasFactory;
    protected $table = 'st_category';
    protected $fillable = [
        'title',
        'slug',
        'crawler_href',
        'meta_title',
        'type',
        'is_status',
        'parent_id',
        'type',
        'content',
        'is_robot',
        'is_home',
        'meta_keyword',
        'meta_description',
        'thumbnail'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'g_post_category', 'category_id', 'post_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function get_all_cate_type($type)
    {
        $key = "all_categories_{$type}";
        if (Cache::has($key)) return Cache::get($key);
        $data = Category::where('type', $type)->get()->toArray();
        Cache::put($key, $data);
        return $data;
    }

    public function get_tree($type, $parent_id)
    {
        $all = $this->get_all_cate_type($type);

        $data = [];
        if (!empty($all)) {
            foreach ($all as $key => $item) {
                
                if ($item['parent_id'] == $parent_id) {
                    $tmp = $item;
                    $tmp['list_child'] = $this->getListChild($all, $item['id']);
                    $data[] = $tmp;
                }
            }
        }

        return $data;
    }

    /*Đệ quy lấy array list category con*/
    public function getListChild($all, $parentId = 0)
    {
        $data = [];
        if (!empty($all)) {
            foreach ($all as $key => $item) {
                if ($item['parent_id'] == $parentId) {
                    $data[] = $item;
                }
            }
        }
        return $data;
    }
    
    /*Đệ quy lấy array list category con*/
    public function all_child($id, $type='game')
    {
        $data = [];
        $all = $this->get_all_cate_type($type);
        if (!empty($all)) {
            foreach ($all as $key => $item) {
                if ($item['parent_id'] == $id) {
                    $data[] = $item;
                }
            }
        }
        return $data;
    }
    
    
}
