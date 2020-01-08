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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/question', 'QuestionController@index')->name('question');

Route::get('/rank', 'RankController@index')->name('rank');

Route::get('/manage', 'ManageController@index')->name('manage');

Route::get('/info', 'InfoController@index')->name('info');

Route::get('/member', 'MemberController@index')->name('member');

Route::resource('posts','PostController');

Route::resource('reviews','ReviewController');

Route::resource('movies','MovieController');

Route::resource('categories','CategoryController');

Route::resource('countries','CountryController');

Route::group(['middleware' => 'auth'],function(){

    Route::resource('profiles','ProfileController');

    Route::resource('reviews','ReviewController');

    Route::get('review/create/{id}','ReviewController@create')->name('review.create');

    Route::get('review/store/{id}','ReviewController@store')->name('review.store');

    Route::get('contact','ContactsController@index')->name('contacts.index');

Route::post('contact/confirm','ContactsController@confirm');

Route::post('contact/complete','ContactsController@complete');

});



Route::get('/results',[
    'uses' => 'AppController@search',
    'as' => 'search.results'
]);

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

Route::group(['prefix'=>'reviews/{id}','middleware'=>'auth'],function(){
       Route::post('favorite','FavoriteController@store')->name('favorites.favorite');
       Route::delete('unfavorite','FavoriteController@destroy')->name('favorites.unfavorite');
});


