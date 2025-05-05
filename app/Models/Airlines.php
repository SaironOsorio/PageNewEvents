<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airlines extends Model
{

    protected $fillable = [
        'name',
        'icao',
        'url',
    ];

}
