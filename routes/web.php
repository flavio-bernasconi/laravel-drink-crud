<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/drinks', 'appController@getDrinks');
