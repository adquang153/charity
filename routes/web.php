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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Controller Admin
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('/user', 'UserController');
    Route::resource('/post', 'PostController');
    Route::resource('/campaign', 'CampaignController');
    Route::resource('/difficult-situation', 'DifficultSituationController');
});

// Controller View
Route::namespace('View')->name('view.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/detail', 'HomeController@detail')->name('detail');
    Route::get('/create', 'HomeController@detail')->name('detail');
    Route::get('/articles', 'HomeController@detail')->name('detail');
});