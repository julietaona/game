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
    return view('game');
});

Route::get('/getMechanics', 'App\Http\Controllers\GameController@getMechanics');

Route::get('/getPositions', 'App\Http\Controllers\GameController@getPositions');

Route::get('/startGame', 'App\Http\Controllers\GameController@startGame');
