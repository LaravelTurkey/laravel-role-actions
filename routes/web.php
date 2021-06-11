<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/customer', 'HomeController@customer')->name('customer');
Route::get('/support', 'HomeController@support')->name('support');
Route::get('/user', 'HomeController@user')->name('user');
