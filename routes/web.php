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

Route::redirect('/home', '/');

Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', 'AuthController@login')->name('login');
    Route::get('/register', 'AuthController@register');

    Route::post('/login/auth', 'AuthController@authenticate');
    Route::post('/register/create', 'AuthController@store');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'LogController@index');
    Route::get('/log/{id}/detail', 'LogController@show');
    Route::get('/log/{id}/delete', 'LogController@destroy');
    Route::get('/log/add', 'LogController@create');
    Route::get('/logout', 'AuthController@logout');
    
    Route::post('/log/add/store', 'LogController@store');
    Route::post('/log/{id}/update', 'LogController@update');
});