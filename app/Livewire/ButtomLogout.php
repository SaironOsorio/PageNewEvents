<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ButtomLogout extends Component
{
    public function logout()
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
        Session::flush();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.buttom-logout');
    }
}
