<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\Airlines;
use App\Models\Fligths;
use Illuminate\Support\Facades\Auth;

class MyReservedUser extends Component
{

    public $selectedBooking = null;
    

    public function showBooking($id)
    {
        $booking = $this->getReserverdBookings()->firstWhere('id', $id);
        $this->selectedBooking = $booking ? $booking->toArray() : null;
        $fligth = Fligths::where('id', $booking['flight_id'])->first();
        $booking->fligth = $fligth ? $fligth->toArray() : null;
    }

    
    public function mount()
    {
        $this->getReserverdBookings();
    }


    public function getReserverdBookings()
    {
        $userId = Auth::id();
       
        $bookings = Booking::where('user_id', $userId)->get();

        if($bookings->isEmpty()) {
            return [];
        }

        foreach($bookings as $booking)
        {
            $fligth = fligths::where('id', $booking->flight_id)->first();
            if ($fligth) {
                $airline = Airlines::where('icao', $fligth->IcaoAirline)->first();
                if ($airline) {
                    $booking->airline_logo = $airline->url; 
                    $booking->airline_name = $airline->name;
                } else {
                    $booking->airline_name = 'Unknown Airline';
                }
                $booking->fligth = $fligth->toArray();
                $user = Auth::user();
                $booking->user_name = $user->name;
                $booking->ivao_id = $user->ivao_id;
            } else {
                $booking->airline_name = 'Unknown Flight';
            }
        }
        return $bookings;

    }

    protected $listeners = ['deleteBookingConfirmed'];
    
    public function deleteBookingConfirmed($id)
    {
        $booking = Booking::findOrFail($id);
        $flightId = $booking->flight_id;
        $booking->delete();
    
       
        Fligths::where('id', $flightId)->update(['is_cancelled' => false]);
    
        $this->dispatch('booking_deleted');
    }
    

    public function render()
    {
        return view('livewire.my-reserved-user',[
            'bookings' => $this->getReserverdBookings(),
        ]);
    }
}
