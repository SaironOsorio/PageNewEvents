<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Event;
use App\Models\Fligths; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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

        $token = Session::get('ivao_access_token');


        foreach ($fligths as $flight) {
            $flight->logoAirline = $this->getLogoAirline($flight->IcaoAirline, $token);
        }

        return $fligths;
    }

    public function getLogoAirline($airlineCode, $token)
    {
        Log::info('Token usado:', ['token' => $token]);
        Log::info('Código de aerolínea:', ['airlineCode' => $airlineCode]);
        
        if (!$token || !$airlineCode) {
           
            return asset('images/default-logo.png'); // Regresamos un logo por defecto si no se encuentra el logo real
        }

        $response = Http::withToken($token)
        ->accept('image/png')  // Asegura que la respuesta sea una imagen PNG
        ->get('https://api.ivao.aero/v2/airlines/' . $airlineCode . '/logo');

        // Verifica si la respuesta es exitosa
        if ($response->successful()) {
            $imageData = $response->body();
            $base64Image = base64_encode($imageData);
            return 'data:image/png;base64,' . $base64Image;  // Retorna la imagen en base64
        }else {
        // Si no se obtiene la imagen, puedes retornar una imagen por defecto
        return asset('images/default-logo.png');
        }


        Log::warning('No se obtuvo logo, se retorna default');
        return asset('images/default-logo.png'); // Si falla, retornamos el logo por defecto
    }


    public function render()
    {
        return view('livewire.pages.list-fligths',[
            'flights' => $this->getFligths(), 
        ])
        ->layout('layouts.app');
    }
}
