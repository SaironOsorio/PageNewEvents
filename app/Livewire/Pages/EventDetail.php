<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Event;

class EventDetail extends Component
{
    public $event = null;
    public $days = 0;
    public $hours = 0;
    public $minutes = 0;
    public $eventDate;

    public function mount($slug)
    {
        $this->event = Event::where('slug', $slug)->firstOrFail();
            if (!$this->event) {
                abort(404);
            }
        
        // Guardar la fecha del evento en un formato timestamp para poder hacer cálculos
        $this->eventDate = strtotime($this->event->event_date);

        // Calcular el tiempo restante en el momento de cargar la página
        $this->calculateTime();
    }

    public function calculateTime()
    {
        $now = time(); // Hora actual
        $distance = $this->eventDate - $now; // Diferencia en segundos

        if ($distance <= 0) {
            $this->days = 0;
            $this->hours = 0;
            $this->minutes = 0;
        } else {
            $this->days = floor($distance / (60 * 60 * 24));
            $this->hours = floor(($distance % (60 * 60 * 24)) / (60 * 60));
            $this->minutes = floor(($distance % (60 * 60)) / 60);
        }
    }

    // Método para actualizar el contador en tiempo real
    public function refreshTimer()
    {
        $this->calculateTime();
    }
    public function render()
    {
        
        return view('livewire.pages.event-detail', ['event' => $this->event])->layout('layouts.app');
    }

}
