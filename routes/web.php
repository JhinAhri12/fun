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

Route::get('/contact', function () {
    return view('contact');
});

/*Route::get('/infos', function () {
    return view('Infos.index');
});*/

Route::get('/infos-show', function () {
    return view('Infos.show');
});

Route::get('/infos', 'InfosController@index');

Route::post('/infos-show', 'InfosController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
