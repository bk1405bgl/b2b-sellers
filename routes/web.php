<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// All listings
Route::get('/', [\App\Http\Controllers\ListingController::class, 'index']);

// Single listing
Route::get('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);
