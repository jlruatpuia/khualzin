<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'welcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/search-result', [\App\Http\Controllers\HomeController::class, 'search'])->name('search');

Route::group(['prefix' => 'admin'], function() {
  Route::get('/dashboard', function() { return view('admin.index'); })->name('admin.index');
  Route::resource('/drivers', App\Http\Controllers\DriversController::class);
  Route::resource('/vehicles', App\Http\Controllers\VehiclesController::class);
  Route::resource('/routes', App\Http\Controllers\RoutesController::class);
  Route::resource('/towns', App\Http\Controllers\TownsController::class);
});
