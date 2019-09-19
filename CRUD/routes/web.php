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
Route::get('/coba', 'HomeController@coba')->name('coba');
//about
Route::get('/about', 'HomeController@about')->name('about');

//crud view
Route::get('/sign', 'ContactController@sign')->name('sign');
Route::get('/list', 'ContactController@list')->name('list');
Route::get('/detail', 'ContactController@detail')->name('detail');
Route::get('/change', 'ContactController@update')->name('index');
Route::get('/list/{id}/delete', 'ContactController@delete')->name('delete');
Route::get('/list/{id}/update', 'ContactController@update')->name('update');
//crud post
Route::post('/create', 'ContactController@create')->name('create');
Route::post('/list/edit', 'ContactController@edit')->name('edit');
