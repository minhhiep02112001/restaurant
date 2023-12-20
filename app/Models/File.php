<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $table = 'g_files';
    protected $fillable = ['slug',  'storage',  'requires',  'slug',  'crawler_href',  'structure', 'content_rating', 'permission', 'package_name', 'signature', 'version_id', 'publish_at', 'screen', 'file_name_apk', 'file_name_ap', 'file_name_pc',];
    protected $primaryKey = 'id';

    public function versions()
    {
        return $this->belongsToMany(Version::class, 'g_version_file', 'file_id', 'version_id');
    }

    public static function get_files_by_versions($version_id, $page = 1, $limit = 20)
    {
        $key = "versions_files_{$page}_{$limit}_{$version_id}";
        // if (Cache::has($key)) return Cache::get($key);
        $query = self::query()->join("g_version_file", 'g_version_file.file_id', '=', 'g_files.id')->where([
            'g_version_file.version_id' => $version_id
        ])->orderBy('publish_at', 'desc');
        $data =  $query->select(['g_files.id','slug',  'storage',  'requires',  'slug',  'crawler_href',  'structure', 'content_rating', 'permission', 'package_name', 'signature',  'publish_at', 'screen', 'file_name_apk', 'file_name_ap', 'file_name_pc'])->limit($limit)->offset(($page - 1) * $limit)->get()->toArray();
        // Cache::put($key, $data, 24 * 60 * 60);
        return $data;
    }
}
