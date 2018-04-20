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

Route::get('/home', function() {
  return view('home');
});

Route::get('/posts', "HomeController@showPostPage")->middleware('guest');
Route::get('/posts/{postId}', "HomeController@displayPost");
Route::get('/search', "HomeController@showPostPage");

Auth::routes();
Route::get('/admin', function() {
  // only authenticated can use this
  return view('adminDashboard');
})->middleware('auth');
?>
