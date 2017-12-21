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

/* Web Route */
Route::get('/', 'WebController@home');
Route::get('/single/{id}', 'WebController@single');
Route::get('/about', 'WebController@about');
Route::get('/contact', 'WebController@contact');
Route::get('/category/{id}', 'WebController@category');
Route::get('/search', 'WebController@search');

Route::get('/admin', 'AdminController@admin_login');
Route::post('/admin/login/check', 'AdminController@admin_login_check');

Route::group(['middleware' => ['adminlogin']], function () {

    /* Admin Route */
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/admin/logout', 'AdminController@admin_logout');
    
    /* Category Route */
    Route::get('/add/category', 'CategoryController@add_category');
    Route::get('/manage/category', 'CategoryController@manage_category');
    Route::post('/save/category', 'CategoryController@save_category');
    Route::get('/published/category/{id}', 'CategoryController@published_category');
    Route::get('/unpublished/category/{id}', 'CategoryController@unpublished_category');
    Route::get('/delete/category/{id}', 'CategoryController@delete_category');
    Route::get('/edit/category/{id}', 'CategoryController@edit_category');
    Route::post('/update/category/{id}', 'CategoryController@update_category');

    /* Post Route */
    Route::get('/add/post', 'PostController@add_post');
    Route::get('/manage/post', 'PostController@manage_post');
    Route::post('/save/post', 'PostController@save_post');
    Route::get('/published/post/{id}', 'PostController@published_post');
    Route::get('/unpublished/post/{id}', 'PostController@unpublished_post');
    Route::get('/delete/post/{id}', 'PostController@delete_post');
    Route::get('/edit/post/{id}', 'PostController@edit_post');
    Route::post('/update/post/{id}', 'PostController@update_post');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/raf', 'WebController@raf');
Route::post('/sendMail', 'WebController@sendmail');