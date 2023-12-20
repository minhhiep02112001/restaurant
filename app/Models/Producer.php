<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    use HasFactory;
    protected $table = 'g_producers';
    protected $fillable = [
        'title',
        'slug',
        'crawler_href',
        'meta_title', 
        'is_status',  
        'content',  
        'meta_keyword',
        'meta_description',
        'thumbnail'
    ];
 
}
