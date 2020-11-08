<?php

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
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/register_mitra', 'RegisterMitraController@tampilregismitra')->name('register.mitra');
Route::get('/register_pelamar', 'RegisterMitraController@tampilregispelamar')->name('register.pelamar');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
