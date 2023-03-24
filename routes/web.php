<?php

use App\Http\Controllers\ListingController;
use App\Models\listing;
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

//All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Listings forms
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create'); 

//Store Listings
Route::post('/listings', [ListingController::class, 'store'])->name('listings');

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.listing');
