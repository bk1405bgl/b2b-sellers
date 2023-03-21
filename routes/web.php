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

// Show Create Form
Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create']);

// Store listing data
Route::post('/listings', [\App\Http\Controllers\ListingController::class, 'store']);

// Show edit form
Route::get('/listings/{listing}/edit', [\App\Http\Controllers\ListingController::class, 'edit']);

// Send updated data in form to DB
Route::put('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'update']);

// Single listing
Route::get('/listings/{listing}', [\App\Http\Controllers\ListingController::class, 'show']);
