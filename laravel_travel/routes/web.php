<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

Route::get('/', [TravelController::class, 'home'])->name('home');
Route::get('/travels', [TravelController::class, 'index'])->name('travels.index');
Route::get('/travels/{id}', [TravelController::class, 'show'])->name('travels.show');
Route::get('/booking/{id?}', [TravelController::class, 'bookingForm'])->name('travels.booking');
Route::post('/booking', [TravelController::class, 'sendBooking'])->name('travels.booking.store');