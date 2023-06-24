<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Pengaturan extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [

        'phone',
        'name',
        'email',
        'password'

    ];

}
