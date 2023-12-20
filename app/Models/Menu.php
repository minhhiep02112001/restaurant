<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'st_menus';
    protected $fillable = ['title', 'link', 'icon', 'parent_id', 'order', 'class', 'location_id', 'language_code', 'type'];

    public $timestamps = false;
    public static function getAllMenu($location = 0)
    {
        return self::query()->where('location_id', $location)->select(['id', 'title', 'parent_id', 'link', 'order', 'class'])->orderBy('order','asc')->get()->toArray();
    }
}
