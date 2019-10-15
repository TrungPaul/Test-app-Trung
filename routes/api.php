<?php

use Illuminate\Http\Request;

Route::post('addproject','ProjectController@store');
Route::put('projects/{id}/edit', 'ProjectController@store');



