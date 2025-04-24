<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\viewController;

Route::get('/',[viewController::class, 'show'])->name('home');
Route::get('/CoAJak',[viewController::class, 'show2']);
Route::get('/OLaravelu',[viewController::class, 'show3']);

/*Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});*/

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
