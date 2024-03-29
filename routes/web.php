<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home','HomeController@index')->name('home');

Route::get('/post','PostsController@index')->middleware('auth');

Route::get('/post/{id}','PostsController@show')->name('post.show');

Route::post('/post','PostsController@store')->middleware('auth');

Route::get('/post/{id}/edit','PostsController@edit')->name('post.edit')->middleware('auth');

Route::put('/post/{id}/edit','PostsController@update')->name('post.update')->middleware('auth');

Route::get('/delete/{id}','PostsController@destroy')->name('post.delete')->middleware('auth');

Route::get('/category','CategoryController@index')->middleware('auth');

Route::post('/category','CategoryController@store')->middleware('auth');

Route::get('/post/category/{name}','CategoryController@showAll')->name('category.showAll')->middleware('auth');;

Route::post('/like',
			'LikeController@index')->middleware('auth');

Route::post('/comment','CommentController@index')->middleware('auth');

Route::get('/users', 'HomeController@listUser');

Route::get('/users/{id}', 'HomeController@showUser')->name('user.show');

Route::post('/friend','FriendController@index')->middleware('auth');

Route::get('/friend/{id}','FriendController@showFriends')->middleware('auth')->name('friend.show');


Route::post('/friend/remove','FriendController@remove')->middleware('auth');


Route::post('/request','FriendController@request')->middleware('auth');