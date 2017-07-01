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

Route::get('/user', function () {
    return view('user.dashboard');
});
Route::get('/user/payment', function () {
    return view('user.payment');
});
Route::get('/user/upload', function () {
    return view('user.upload');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
