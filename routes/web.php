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
Route::get('/About-Us', 'PagesController@about');
Route::get('/Contact-Us', 'PagesController@contact');
Route::get('/Activities', 'PagesController@activities');
Route::get('/Facilities', 'PagesController@facilities');
Route::get('/Campus-Pics', 'PagesController@campus_pics');
Route::get('/Campus-Videos', 'PagesController@campus_videos');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
                         
