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
    return view('index');
});
Route::get('/sss', function () {
    return view('user.saleh');
});


Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/seat', function () {
    return view('user.seat');
});
//Route::get("/login","UserController@verify");
Route::get('/logout', 'LogoutController@index');
Route::post('/login', 'LoginVerify@verify');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/seller', 'SellerController@index')->name('seller.index');
Route::get('/user', 'UserController@index')->name('user.index');
Route::post('test', 'UserController@busdescription');
Route::get("seat/{id}","UserController@seat")->name('seat');
Route::post('/seat/seat/{id}', 'UserController@history');
//Route::post('/done','UserController@confrim');
Route::post('/done','UserController@lastView');
//Route::post('/seat/seat/{id}',"UserController@totalamount");
Route::post('/search','UserController@search');
Route::get("/hist","UserController@hist");
Route::get("/busDetails/{id}","UserController@driver");
Route::get('storedriver', 'AdminController@driver');
Route::post('storedriver', 'AdminController@storedriver');
Route::get('/comments/{id}','UserController@comments');
Route::post('/comments/comments/{id}', 'UserController@insertcomment');
