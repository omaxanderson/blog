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

// Used very briefly to add myself to the database with the correct hash
//Route::get('/register', function() {
//	return view('register');
//});

Route::get('/', "HomeController@showPostPage");

Route::get('/home', function() {
  return view('home');
});

Route::get('/about', function() {
  return view('about');
});

Route::get('/contact', function() {
  return view('contact');
});

Route::get('/posts', "HomeController@showPostPage");
Route::get('/posts/{postId}', "HomeController@displayPost");
Route::get('/search', "HomeController@showPostPage");
//Route::get('/submitComment', function() { return view('home'); });
Route::post('/submitComment', "HomeController@submitComment");

// Routes that require authorization
Auth::routes();
Route::get('/admin', function() {
  // only authenticated can use this
  return view('adminDashboard');
})->middleware('auth');
Route::post('/uploadPost', "AdminController@uploadPost");
Route::post('/uploadPostForm', "AdminController@uploadPostForm");
Route::get('/editPosts', "AdminController@showEditPosts");
Route::get('/editPost', "AdminController@showPostEdit");
Route::post('/editPostSubmit', "AdminController@processEdit");
Route::post('/saveDraft', "AdminController@saveDraft");
Route::get('/logout', "AdminController@logout");
?>
