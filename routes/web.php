<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\IVAOAuthController;
use App\Livewire\Pages\EventDetail;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('home');

/** Route Auth SSO Ivao */
Route::get('/login', [IVAOAuthController::class, 'redirectToIVAO']);
Route::get('/auth/callback', [IVAOAuthController::class, 'handleCallback'])->name('ivao.callback');


/** Route Perfil User    */
    Route::get('/profile', function () {
        return view('Pages.Perfil'); 
})->middleware(['auth', 'verified'])->name('profile');

/** Route Events */

Route::get('/eventos', function () {
    return view('Pages.Eventos');
})->name('eventos');

Route::get('/eventos/{slug}', EventDetail::class)->name('event.detail');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
