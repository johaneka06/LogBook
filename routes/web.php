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
    return view('index');
});

Route::redirect('/home', '/');

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'AuthController@login');
    Route::get('/register', 'AuthController@register');

    Route::post('/login/auth', 'AuthController@authenticate');
    Route::post('/register/create', 'AuthController@store');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/logout', 'AuthController@logout');
    
});