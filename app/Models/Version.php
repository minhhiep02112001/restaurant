<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Version extends AbstractModel
{
    use HasFactory;
    protected $table = 'g_versions';
    protected $fillable = ['is_status', 'title', 'slug', 'hash_code', 'game_id', 'publish_at', 'storage', 'attribute'];
    protected $primaryKey = 'id';

    public function files()
    {
        return $this->belongsToMany(File::class, 'g_version_file', 'version_id', 'file_id');
    }

    public static function get_version_by_game($game_id, $page = 0, $limit = 10, $select = ['*'])
    {
        $key = "versions{$page}_{$limit}_{$game_id}";
        // if (Cache::has($key)) return Cache::get($key);
        $query = self::query()->where([
            // 'is_status' => 1,
            'game_id' => $game_id,
        ]);
        $query->orderBy('publish_at', 'desc');
        $data =  $query->select($select)->limit($limit)->offset(($page - 1) * $limit)->get()->toArray();
        // Cache::put($key, $data, 24 * 60 * 60);
        return $data;
    }
}
