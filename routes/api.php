<?php

use Illuminate\Http\Request;

Route::get('projects','ProjectController@index');
Route::post('projects/add','ProjectController@store');




