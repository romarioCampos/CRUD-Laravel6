<?php
// ShowController

Route::get('/', function () {
    return view('welcome');
});

Route::resource('shows', 'ShowController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
