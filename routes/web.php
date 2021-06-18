<?php

use App\Http\Controllers\GstCalculator;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// routes for gst calculator
Route::get('/gst-calculator', [GstCalculator::class, "index"]);
Route::post('/calc', [GstCalculator::class, "calculate"])->name('gst.calc');

// Create order route
Route::get('/complete-order/{id}', [OrderController::class, "complete_order"]);

// Get users point and redeem data
Route::get('/rewards', [OrderController::class, "fetch_points"])->name('reward');
