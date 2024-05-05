<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/portfolio', 'PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio', 'App\Http\Controllers\PortfolioController@index')->name('portfolio.index');
Route::get('/itservices', 'App\Http\Controllers\ItServicesController@index')->name('itservices.index');

Route::post('/index', [ContactUsController::class, 'store'])->name('contact.store');

