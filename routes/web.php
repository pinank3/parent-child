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

Auth::routes();

Route::get('/index','UserController@index')->name('show-user');
Route::get('/create','UserController@create')->name('add-user');
Route::post('/store','UserController@store')->name('store-user');
Route::get('{id}edit','UserController@edit')->name('edit-user');
Route::get('{id}update','UserController@update')->name('update-user');
Route::get('{id}delete','UserController@delete')->name('delete-user');
Route::get('/dashboard','UserController@dashboard');
Route::get('/logout','UserController@logout');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'UserController@dashboard')->name('home');

Route::get('/list','CustomerController@index')->name('show-customer');
Route::get('/add','CustomerController@create')->name('add-Customer');
Route::post('/post','CustomerController@post')->name('store-Customer');
Route::get('{id}edit','CustomerController@edit')->name('edit-Customer');
Route::get('{id}update','CustomerController@update')->name('update-Customer');
Route::get('{id}destroy','CustomerController@destroy')->name('delete-Customer');