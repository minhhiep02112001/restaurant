<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'st_setting';
    protected $fillable = ['key', 'value', 'title', 'type'];
    public $timestamps = false;
}
