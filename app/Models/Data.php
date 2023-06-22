<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'datas';
    protected $fillable = [
        'id_user',
        'foto_pria',
        'foto_wanita',
        'foto_sampul',
        'maps',
        'video',
        'musik',
        'salam_pembuka',
        'wa_token',
        'wa_atas',
        'wa_bawah',
        'kunci'
    ];

}
