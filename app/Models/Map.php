<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $table = 'maps';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'nama', 'alamat', 'no_telepon', 'tipe', 'latitude', 'longitude'
    ];
}



