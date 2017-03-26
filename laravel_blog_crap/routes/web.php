<?php




Route::get('/', 'HomeController@index');
Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/about', 'HomeController@about');
Route::get('/subscribe', 'HomeController@subscribe');
Route::resource('post',"PostController");
Route::resource('tag',"TagController");
Route::resource('comment',"CommentController");