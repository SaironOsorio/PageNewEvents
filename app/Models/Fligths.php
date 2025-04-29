<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fligths extends Model
{
    protected $fillable = [
        'event_id',
        'nameCompany',
        'IcaoAirline',
        'departure_time',
        'Time_Zulu',
        'departure_airport',
        'IcaoDeparture',
        'arrival_airport',
        'IcaoArrival',
        'flight_number',
        'Hours',
        'GateDeparture',
        'GateArrival',
        'FlightType',
        'status',
        'is_cancelled'
    ];
    protected $casts = [
        'is_cancelled' => 'boolean',
        'departure_time' => 'datetime',
        'Time_Zulu' => 'datetime',
        'Hours' => 'datetime',
    ];
    

    public function Event()
    {
        return $this->belongsTo(Event::class);
    }
}
