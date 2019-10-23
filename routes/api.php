<?php

use Illuminate\Http\Request;

Route::group((['prefix' => 'projects']), function () {
    Route::put('{projectId}/edit', 'ProjectController@update');
    Route::get('/','ProjectController@index');
    Route::get('/{projectId}','ProjectController@getProjectById');
    Route::post('add','ProjectController@store');
    Route::delete('{projectId}/delete', 'ProjectController@destroy');
});

Route::group((['prefix' => 'members']), function () {
    Route::get('/','MemberController@index');
    Route::get('/{memberId}','MemberController@getMemberById');
    Route::post('add','MemberController@store');
    Route::put('{memberId}/edit','MemberController@update');
    Route::delete('{memberId}/delete','MemberController@destroy');
});

Route::group((['prefix' => 'project-detail']), function () {
    Route::get('/{projectId}','ProjectAndMember@index');
    Route::get('/member/{projectId}','ProjectAndMember@getMemberOutProject');
    Route::get('/member/{projectId}','ProjectAndMember@getMemberOutProject');
    Route::post('add','ProjectAndMember@store');
    Route::put('{prjectId}/edit/{memberId}','ProjectAndMember@update');
    Route::delete('{prjectId}/delete/{memberId}','ProjectAndMember@destroy');
});
