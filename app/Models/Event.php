<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'event_date',
        'image_primary',
        'image_secondary',
    ];
    protected $casts = [
        'event_date' => 'datetime',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getImagePrimaryUrlAttribute()
    {
        return $this->image_primary ? asset('storage/' . $this->image_primary) : null;
    }
    public function getImageSecondaryUrlAttribute()
    {
        return $this->image_secondary ? asset('storage/' . $this->image_secondary) : null;
    }

    public function flights()
    {
        return $this->hasMany(Fligths::class, 'event_id');
    }

}
