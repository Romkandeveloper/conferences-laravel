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
Route::get('/', function(){
   return redirect()->route('conferences.index');
});

Route::get('/conferences', 'App\Http\Controllers\ConferencesController@index')->name('conferences.index');
Route::get('/conferences/create', 'App\Http\Controllers\ConferencesController@create')->name('conferences.create');
Route::get('/conferences/{id}', 'App\Http\Controllers\ConferencesController@show');
Route::get('/conferences/{id}/edit', 'App\Http\Controllers\ConferencesController@edit');

Route::post('/conferences', 'App\Http\Controllers\ConferencesController@store');
Route::put('/conferences/{id}', 'App\Http\Controllers\ConferencesController@update');
Route::delete('/conferences/{id}', 'App\Http\Controllers\ConferencesController@destroy');

