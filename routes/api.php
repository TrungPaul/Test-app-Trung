<?php

use Illuminate\Http\Request;

// lấy danh sách danh muc
Route::get('categories','CategoryController@index');

// lấy  1 danh muc
Route::get('category/{id}','CategoryController@show');

// xóa danh muc
Route::delete('category/{id}','CategoryController@destroy');

// cập nhật danh muc
Route::put('category/{id}','CategoryController@update');

// tạo mới danh muc
Route::post('category','CategoryController@add');


// lấy danh sách sp
Route::get('products','ProductController@index');

// lấy  1 sp
Route::get('product/{id}','ProductController@show');

// lấy sp theo danh muc
Route::get('productsCate/{id}','ProductController@productsCate');

// xóa sp
Route::delete('product/{id}','ProductController@destroy');

// cập nhật sp
Route::put('product/{id}','ProductController@update');

// tạo mới sp
Route::post('project','ProjectController@addProject');



