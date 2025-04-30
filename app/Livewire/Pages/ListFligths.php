<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Event;
use App\Models\Fligths; 

class ListFligths extends Component
{
    public $eventId;

    public function mount($slug)
    {
        $this->eventId = $this->getIdEvent($slug);
        $this->getFligths();
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
