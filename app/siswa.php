<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $fillable = [
        'nis', 'nama', 'rayon', 'rombel'
    ];
}
