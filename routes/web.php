<?php

Route::get('/','HertiController@index')->name('home');
Route::resource('/login','LoginController');
Route::resource('Register','RegisterController');
echo "hello";