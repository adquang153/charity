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



Route::get('/home', 'HomeController@index')->name('home');

//Controller Admin
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('/user', 'UserController');
    Route::resource('/post', 'PostController');
    Route::resource('/campaign', 'CampaignController');
    Route::resource('/difficult', 'DifficultSituationController');
    Route::get('/donate', 'PageController@donate')->name('donate');
    Route::get('/comment', 'PageController@comment')->name('comment');
    Route::get('/category', 'PageController@category')->name('category');
});

// Controller View
Route::namespace('View')->name('view.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/detail', 'HomeController@detail')->name('detail');
    Route::get('/create', 'HomeController@create')->name('create');
    Route::get('/explore', 'HomeController@explore')->name('explore');
    Route::get('/articles', 'HomeController@articles')->name('articles');
    Route::get('/detail-articles', 'HomeController@detailArticles')->name('detail-articles');
    Route::get('/register', 'HomeController@register')->name('register');
    Route::get('/loginfe', 'HomeController@login')->name('loginfe');
    Route::get('/createCampaign', 'HomeController@createCampaign')->name('createCampaign');
});

Auth::routes();