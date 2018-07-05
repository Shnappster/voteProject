<?php


Auth::routes();
Route::get('/logout', 'Auth\LoginController@destroy');

Route::get('/', 'VoteController@index')->name('home');
Route::get('/votes/create', 'VoteController@create');
Route::post('/votes', 'VoteController@store');
Route::get('/votes/{vote}', 'VoteController@show');
