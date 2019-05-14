<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'judul',
        'pengarang',
        'kategory',
        'tahun_terbit'
    ];
}
