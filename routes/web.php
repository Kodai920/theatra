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

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/question', 'QuestionController@index')->name('question');

Route::get('/rank', 'RankController@index')->name('rank');

Route::get('/info', 'InfoController@index')->name('info');

Route::get('/member', 'MemberController@index')->name('member');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/manage', 'ManageController@index')->name('manage');

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

Route::get('mysitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to(), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
    $sitemap->add(URL::to('page'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

    // get all posts from db
    $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();

    // add every post to the sitemap
    foreach ($posts as $post)
    {
        $sitemap->add($post->slug, $post->modified, $post->priority, $post->freq);
    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'mysitemap');
    // this will generate file mysitemap.xml to your public folder

});

Route::get('sitemap', 'SiteMapController@sitemap');
