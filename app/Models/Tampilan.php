<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tampilan extends Model
{
    use HasFactory;
    protected $table = "temas";
    protected $fillable = [
        'nama_tema',
        'kode_tema'
    ];
}
