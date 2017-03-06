<?php

use Illuminate\Support\Facades\Cache;
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

Route::get('/simple', 'SimpleController@getListItems');
Route::get('/user/{id}', 'SimpleController@getUser');
Route::post('/user', 'SimpleController@createUser');
Route::get('/cache', function () {
    return Cache::get('test');
});
