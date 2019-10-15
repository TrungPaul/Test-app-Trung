<?php

use Illuminate\Http\Request;

Route::get('projects','ProjectController@index');
Route::post('project/add','ProjectController@store');




