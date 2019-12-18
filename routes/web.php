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

Route::resource('posts','PostController');

Route::resource('categories','CategoryController');

//Route::resource('movies','MovieController');

Route::get('/movies','MovieController@index')->name('movies');

Route::group(['middleware' => 'auth'],function(){

    Route::resource('profiles','ProfileController');

});

Route::get('contact','ContactsController@index')->name('contacts.index');

Route::post('contact/confirm','ContactsController@confirm');

Route::post('contact/complete','ContactsController@complete');