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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('send_mail/{id}','SendEmailController@sendMail');
Route::get('index','SendEmailController@index');
Route::get('preview/{id}','SendEmailController@preview');
Route::get('create','SendEmailController@create');
Route::post('store','SendEmailController@store');
Route::get('edit/{id}','SendEmailController@edit');
Route::post('update/{id}','SendEmailController@update');
