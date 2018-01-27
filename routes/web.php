<?php
Auth::routes();
Route::redirect('/', '/home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/projects', 'ProjectController@index');
Route::post('/projects', 'ProjectController@store');
Route::post('/projects/{id}/timers/stop', 'TimerController@stopRunning');
Route::post('/projects/{id}/timers', 'TimerController@store');
Route::get('/project/timers/active', 'TimerController@running');
