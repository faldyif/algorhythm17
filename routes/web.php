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
    $news = \App\News::all();
    return view('welcome')->with('news', $news);
});

Route::get('/ig', function () {
    return view('event.ig');
});
Route::get('/short-film', function () {
    return view('event.short-film');
});
Route::get('/concert', function () {
    return view('event.concert');
});

Route::get('/user', 'UserController@index');
Route::get('/user/payment', 'UserController@payment');
Route::get('/user/upload', 'UserController@upload');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', function () {
            if(Auth::user()->role_id != 1) {
                return redirect('home'); 
            }
            return view('admin.dashboard');
        });
        Route::resource('user', 'AdminUserController', ['only' => [
            'index', 'show'
        ]]);
        Route::resource('payment', 'AdminPaymentController', ['only' => [
            'index'
        ]]);
        Route::resource('news', 'AdminNewsController', ['only' => [
            'index', 'show', 'create', 'edit', 'store', 'update'
        ]]);
        Route::resource('submission', 'AdminSubmissionController', ['only' => [
            'index'
        ]]);
        Route::get('user-film', function () {
            return view('admin.view-user-film');
        });
        Route::get('user-concert', function () {
            return view('admin.view-user-concert');
        });
        Route::get('user/delete/{id}', 'AdminUserController@destroy');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('news', 'NewsController', ['only' => [
    'index', 'show'
]]);
Route::post('/register-instagram', 'RegisterInstagramCompetitionController@register');
