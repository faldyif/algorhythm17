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
<<<<<<< HEAD
Auth::routes();


=======
Route::get('/ig', function () {
    return view('event.ig');
});
Route::get('/short-film', function () {
    return view('event.short-film');
});
Route::get('/concert', function () {
    return view('concert.short-film');
});
>>>>>>> dfdcf6a90eeb88dad3436c62343a216ef96a6bf3
Route::get('/user', function () {
    return view('user.dashboard');
});
Route::get('/user/payment', function () {
    return view('user.payment');
});
Route::get('/user/upload', function () {
    return view('user.upload');
});
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
        Route::resource('semnas', 'AdminSemnasController', ['only' => [
            'index', 'create', 'store'
            ]]);
        Route::get('/admin', function () {
            return view('admin.dashboard');
        });
        Route::get('/admin/news', function () {
            return view('admin.news');
        });
        Route::get('/admin/submission', function () {
            return view('admin.submission');
        });
        Route::get('/admin/add_news', function () {
            return view('admin.add_news');
        });
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
Route::post('/register-instagram', 'RegisterInstagramCompetitionController@register');
