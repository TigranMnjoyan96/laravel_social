<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'HomeController@index')->name('home');

Route::get('/registration', 'ContactController@index')->name('signup');
Route::post('/registration', 'ContactController@authSignUp')->name('signup');
