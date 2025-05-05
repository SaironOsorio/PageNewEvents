<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Event;
use App\Models\Fligths; 
use Illuminate\Support\Facades\Session;
use App\Models\Airlines;

class ListFligths extends Component
{
    public $eventId;
    public $flights  = [];
 


    public function mount($slug)
    {
        $this->eventId = $this->getIdEvent($slug);
        $this->flights = $this->getFligths();

    }

    public function getIdEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();

        if (!$event) {
            abort(404);
        }
        

        return $event->id;

    }

    public function getFligths()
    {
        $fligths = Fligths::where('event_id', $this->eventId)->get();

        if ($fligths->isEmpty()) {
            abort(404);
        }
        foreach ($fligths as $fligth) {
            $airline = Airlines::where('icao', $fligth->IcaoAirline)->first();
            if ($airline) {
                $fligth->airline_logo = $airline->url; 
                $fligth->airline_name = $airline->name;
            } else {
                $fligth->airline_name = 'Unknown Airline';
            }
        }        
        return $fligths;
    }


    public function render()
    {
        return view('livewire.pages.list-fligths',[
            'flights' => $this->getFligths(), 
        ])
        ->layout('layouts.app');
    }
}
