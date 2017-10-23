<?php

Route::get('/', 'Auth\LoginController@showLoginIfNeeded');

Route::get('home', 'HomeController@index')->name('home');

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');