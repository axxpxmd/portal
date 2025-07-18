<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'tmnews';
    protected $fillable = [
        'id',
        'n_news',
        'v_intro',
        'v_sort',
        'v_news',
        'c_kategori',
        'c_headline',
        'v_view',
        'c_status',
        'n_user',
        'id_user',
    ];
}
