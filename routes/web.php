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

Route::get('/', function () {
    return view('welcome');
}); 

Route::resource('peliculas','App\Http\Controllers\PeliculaController');
Route::resource('actores','App\Http\Controllers\ActorController');
Route::get('/Actor/archive', [ActorController::class, 'archive']);
Route::get('/Pelicula/archive', [PeliculaController::class, 'archive']);
Route::get('search/peliculas','SearchController@pelis')->name('search.pelis');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');
