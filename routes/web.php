<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'HomeController@index')->name('home');

// Sign Up
Route::get('/signup', 'ContactController@index')->name('signup');
Route::post('/signup', 'ContactController@authSignUp')->name('signup');

// Sign In
Route::get('/signin', 'ContactController@signIn')->name('signin');
Route::post('/signin', 'ContactController@authSignIn')->name('signin');
