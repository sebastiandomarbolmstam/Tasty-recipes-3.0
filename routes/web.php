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

Route::get('/', 'PagesController@index');
Route::get('/meatballs', 'PagesController@meatballs');
Route::get('/pancakes', 'PagesController@pancakes');
Route::get('/calendar', 'PagesController@calendar');
Route::post('comments/{recipe}', 'CommentsController@store');
Route::delete('comments/{comment}', 'CommentsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

