<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BookingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/bookings', [BookingsController::class, 'getBookings'])->name('getBookings');

Route::post('add-booking/', [BookingsController::class, 'addBooking'])->name('addBooking');

