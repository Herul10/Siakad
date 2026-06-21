<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodis';

    protected $fillable = [
        'fakultas_id',
        'kode',
        'nama_prodi',
    ];
}