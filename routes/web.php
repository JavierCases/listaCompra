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

Route::get('/', 'HomeController@getHome');
//Route::get('login', function () {
//    return view('auth/login');
//});
//Route::get('logout', function () {
//    return ('Logout usuario');
//});
Route::group(['middleware' => 'auth'], function(){
Route::get('productos', 'ProductoController@getIndex');
Route::get('productos/show/{id}', 'ProductoController@getShow');
Route::get('productos/create', 'ProductoController@getCreate');
Route::post('productos/create', 'ProductoController@create');
//Route::get('productos/edit/{id}', 'ProductoController@getEdit');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
