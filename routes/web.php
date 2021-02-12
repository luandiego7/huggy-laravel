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

/*Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'LembreteController@index');
    Route::get('/home', 'LembreteController@index');
    Route::get('/create', 'LembreteController@create');
    Route::get('/edit/{id}', 'LembreteController@edit');
    Route::post('/save', 'LembreteController@save');
    Route::get('/delete/{id}', 'LembreteController@delete');

});
