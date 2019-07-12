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
    return view('prac.login');
});

Route::get('/registration', function () {
    return view('prac.register');
});

Route::get('/test', function () {
    return view('test');
});

Route::resource('/dept','DeptCRUD');

Route::resource('/product','ProductCRUD');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
