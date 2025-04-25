<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IVAOAuthController;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {
    Route::get('/login', [IVAOAuthController::class, 'redirectToIVAO'])
        ->name('login');
});

Route::post('logout', App\Livewire\Actions\Logout::class)
    ->name('logout');
