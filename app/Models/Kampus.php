<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    protected $table = 'kampusmaps';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'nama', 'alamat', 'no_telepon', 'kategori', 'jurusan', 'latitude', 'longitude'
    ];
}



