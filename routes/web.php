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

Route::resource('profiles','ProfileController');

Route::group(['middleware' => 'auth'],function(){

Route::get('/profiles/index',[
    'uses' => 'ProfileController@index',
    'as' => 'profiles.index',
]);

Route::post('/update-profile',[
    'uses' => 'ProfileController@update',
    'as' => 'profiles.update',
]);

});