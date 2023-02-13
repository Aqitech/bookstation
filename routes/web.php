<?php

use Illuminate\Support\Facades\Route;

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

    /**** ADMIN ROUTES ****/

    Route::group(['prefix' => 'admin', 'namespace'  => 'Admin'], function() {

    	// AUTHOR ROUTES
        Route::get('author/statusActive', 'AuthorController@statusActive')->name('author.statusActive');
        Route::get('author/statusDeactive', 'AuthorController@statusDeactive')->name('author.statusDeactive');
        Route::get('author/deleteAll', 'AuthorController@deleteAll')->name('author.deleteAll');
        Route::put('author/{id}/status', 'AuthorController@status');
        Route::resource('author', 'AuthorController');

        // BOOK ROUTES
        Route::get('book/statusActive', 'BookController@statusActive')->name('book.statusActive');
        Route::get('book/statusDeactive', 'BookController@statusDeactive')->name('book.statusDeactive');
        Route::get('book/deleteAll', 'BookController@deleteAll')->name('book.deleteAll');
        Route::put('book/{id}/status', 'BookController@status');
        Route::resource('book', 'BookController');

        // CATEGORY ROUTES
        Route::get('category/statusActive', 'CategoryController@statusActive')->name('category.statusActive');
        Route::get('category/statusDeactive', 'CategoryController@statusDeactive')->name('category.statusDeactive');
        Route::get('category/deleteAll', 'CategoryController@deleteAll')->name('category.deleteAll');
        Route::put('category/{id}/status', 'CategoryController@status');
        Route::resource('category', 'CategoryController');

        // MEDIA ROUTES
        Route::get('media/statusActive', 'MediaController@statusActive')->name('media.statusActive');
        Route::get('media/statusDeactive', 'MediaController@statusDeactive')->name('media.statusDeactive');
        Route::get('media/deleteAll', 'MediaController@deleteAll')->name('media.deleteAll');
        Route::put('media/{id}/status', 'MediaController@status');
        Route::resource('media', 'MediaController');

        // TEAM ROUTES
        Route::get('team/statusActive', 'TeamController@statusActive')->name('team.statusActive');
        Route::get('team/statusDeactive', 'TeamController@statusDeactive')->name('team.statusDeactive');
        Route::get('team/deleteAll', 'TeamController@deleteAll')->name('team.deleteAll');
        Route::put('team/{id}/status', 'TeamController@status');
        Route::resource('team', 'TeamController');

        // PROFILE ROUTES
        Route::post('/updatepassword', 'HomeController@updatepassword')->name('update.password');
        Route::get('/profile', 'HomeController@profile');
        Route::post('profile/update', 'HomeController@profile_update')->name('update.profile');
    });

	/**** FRONTEND ROUTES****/  
    Auth::routes();

	Route::get('/', 'MainController@index');
	Route::get('/about', 'MainController@about');
	Route::get('/gallery', 'MainController@gallery');
	Route::get('/blog', 'MainController@blog');
	Route::get('/author', 'MainController@author');
	Route::get('/author_detail/{slug}', 'MainController@author_detail');
	Route::get('/contact', 'MainController@contact');

    Route::get('/category/{slug}', 'CategoryController@show')->name('category.show');
    Route::get('/book/{slug}', 'BookController@show')->name('book.show');


Route::get('/home', 'HomeController@index')->name('home');
