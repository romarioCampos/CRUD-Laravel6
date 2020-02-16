<?php
// ShowController

Route::get('/', function () {
    return view('create');
});

Auth::routes();

Route::get('/shows', 'ShowController@create')->name('create');

Route::resource('shows', 'ShowController');


/*
Route::get('/', function () {
    return view('welcome');
});

Route::resource('shows', 'ShowController');