<?php

use Illuminate\Http\Request;

Route::put('projects/{id}/edit', 'ProjectController@update');
Route::get('projects','ProjectController@index');
Route::post('projects/add','ProjectController@store');
Route::get('projects/{id}/delete','ProjectController@destroy');



