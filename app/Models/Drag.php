<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drag extends Model
{
    use HasFactory;
    protected $table = 'st_drag';
    protected $fillable = ['id', 'type', 'key', 'order'];
    public $timestamps = false;

    public static function getAllData($key, $type, $limit = 100)
    {
        $query = self::query();
        switch ($type) {
            case 'category':
                $query = $query->join('st_category as c', 'c.id', '=', "st_drag.id")->select(['c.id', 'c.slug', 'c.title', 'c.thumbnail', 'c.parent_id']);
                break;

            case 'post':
                $query = $query->join('st_post', 'st_posts.id', '=', "st_drag.id");
                break;
        }
        $query->where("st_drag.key",  $key);
        $query->where("st_drag.type",  $type);
        $query->orderBy('st_drag.order', 'asc');
        return $query->limit($limit)->get();
    }
}
