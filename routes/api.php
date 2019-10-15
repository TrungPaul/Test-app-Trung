<?php

use Illuminate\Http\Request;

Route::get('project/list','ProjectController@index');
Route::post('project/add','ProjectController@store');




