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

Route::group([
    'prefix' => 'adminz',
    'namespace' => 'Admin',
    'middleware' => 'auth',
    'as' => 'admin.'
], function() {
    Route::resource('users', 'UsersController');
    Route::resource('pages', 'PagesController');
    Route::resource('posts', 'PostsController');
});
