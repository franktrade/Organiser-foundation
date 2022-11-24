<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImpactController;
use App\Http\Controllers\WebsiteController;
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

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/donate', 'donate')->name('donate');
    Route::get('/donation/history', 'history')->name('donation.history');
});

Route::controller(ImpactController::class)->group(function () {
    Route::get('/impact', 'index')->name('impact');
    Route::get('/impact/{impact:slug}', 'show')->name('impact.show');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'store');
});

