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

Route::get('/', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/', 'AuthController@postLogin')->middleware('guest');
// untuk menampilkan halaman home Admin
Route::get('/home_admin', 'AdminController@index')->middleware('auth')->name('home_admin');
// untuk menampilkan halaman home USER
Route::get('/home_user', 'UserController@index')->middleware('auth')->name('home_user');
// untuk edit profile admin
Route::get('/home_admin/profile', 'AdminController@edit')->middleware('auth')->name('edit');
Route::post('/home_admin/profile', 'AdminController@update')->middleware('auth');
// untuk edit profile user
Route::get('/home_user/profile', 'UserController@edit')->middleware('auth')->name('edit');
Route::post('/home_user/profile', 'UserController@update')->middleware('auth');
// untuk data Masuk admin
Route::get('/home_admin/data_masuk', 'AdminRequestController@index')->middleware('auth');
Route::get('/home_admin/data_masuk/{adminRequest}', 'AdminRequestController@show')->middleware('auth');
// untuk data masuk user
Route::get('/home_user/data_masuk', 'UserRequestController@index')->middleware('auth');
Route::post('/home_user/data_masuk', 'UserRequestController@create')->middleware('auth');
// untuk update request dari user
Route::get('/home_admin/data_masuk/{adminRequest}/edit', 'AdminRequestController@edit')->middleware('auth');
Route::post('/home_admin/data_masuk/{adminRequest}/edit', 'AdminRequestController@update')->middleware('auth');
// untuk proses request user
Route::get('/home_admin/data_proses', 'AdminRequestController@proses')->middleware('auth');
Route::get('/home_admin/data_proses/{adminRequest}', 'AdminRequestController@showProses')->middleware('auth');

Route::get('/home_admin/data_proses/{adminRequest}/edit', 'AdminRequestController@editProses')->middleware('auth');
Route::post('/home_admin/data_proses/{adminRequest}/edit', 'AdminRequestController@updateProses')->middleware('auth');

Route::get('/home_admin/data_selesai', 'AdminRequestController@selesai')->middleware('auth');


// untuk destroy token
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');
