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
    return view('home');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog_post', function () {
    return view('blog_post');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/see_elements', function () {
    return view('elements');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
