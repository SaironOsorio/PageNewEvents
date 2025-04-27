<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class Events extends Component
{
    public $events = [];

    public function mount()
    {
        $this->events = Event::all();
    }
    public function render()
    {
        return view('livewire.events', [
            'events' => $this->events,
        ]);
    }
}
