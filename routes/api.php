<?php

use Illuminate\Http\Request;

Route::put('projects/{projectId}/edit', 'ProjectController@update');
Route::get('projects','ProjectController@index');
Route::post('projects/add','ProjectController@store');
Route::delete('projects/{projectId}/delete', 'ProjectController@destroy');

Route::post('members/add','MemberController@store');



