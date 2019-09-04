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

Route::get('/', 'HomeController@index')->name('home');

Route::resources([
	'a-propos' => 'AboutController',
	'nos-projets' => 'ProjectController',
	'services' => 'ServiceController',
	'nos-news' => 'PostController',
	'contacts' => 'ContactController',
]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
