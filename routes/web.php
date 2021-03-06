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

#Route::get('/', function () {
#    return view('welcome');
#});
Route::get('/', function(){return redirect("/contact");});
Route::get('/contact', 'ContactController@index');
Route::post('/contact/confirm', 'ContactController@confirm');
Route::post('/contact/done', 'ContactController@done');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::delete('/delete/{id}', 'HomeController@delete');
