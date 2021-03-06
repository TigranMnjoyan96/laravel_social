<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'HomeController@index')->name('home');

// Sign Up
Route::get('/signup', 'ContactController@index')->middleware('guest')->name('signup');
Route::post('/signup', 'ContactController@authSignUp')->name('signup');

// Sign In
Route::get('/signin', 'ContactController@signIn')->middleware('guest')->name('signin');
Route::post('/signin', 'ContactController@authSignIn')->middleware('guest');


// Sign Out
Route::get('/signout', 'ContactController@signOut')->name('signout');


// Search
Route::get('/search', 'SearchController@searchUser')->name('search');

// User
Route::get('/user/{username}', 'ProfileController@profileUser')->name('profile');
Route::get('/profile/edit', 'profileController@editProfile')->middleware('auth')->name('editProfile');
Route::post('/profile/postEdit', 'ProfileController@postEdit')->middleware('auth');
