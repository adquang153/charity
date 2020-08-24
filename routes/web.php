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
Route::prefix('/admin')->middleware(['auth','is_admin'])->name('admin.')->namespace('Admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::post('/user/delete-users', 'UserController@deleteUsers')->name('user.delete-users');
    Route::resource('/user', 'UserController');
    Route::resource('/post', 'PostController');
    Route::resource('/campaign', 'CampaignController');
    Route::resource('/difficult', 'DifficultSituationController');
    Route::get('/donate', 'PageController@donate')->name('donate');
    Route::get('/comment', 'PageController@comment')->name('comment');
    Route::get('/category', 'PageController@category')->name('category');
});

Auth::routes();
// Controller View
Route::namespace('View')->name('view.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/about', 'HomeController@about')->name('about');

    //campaign
    Route::get('/explore', 'CampaignController@explore')->name('explore');
    Route::get('campaign/detail/{id}', 'CampaignController@detail')->name('campaign.detail');
    Route::get('/campaign/create', 'CampaignController@createCampaign')->name('campaign.create')->middleware('auth');
    Route::post('/campaign/store', 'CampaignController@storeCampaign')->name('campaign.store')->middleware('auth');

    //post
    Route::get('/articles', 'ArticleController@articles')->name('articles');
    Route::get('/articles/detail', 'ArticleController@detailArticles')->name('articles.detail');

    Route::get('/loginfe', 'HomeController@login')->name('loginfe');

    //profile
    Route::get('/profile/{id}', 'UserController@profile')->name('profile');
    Route::post('/profile/{id}', 'UserController@editProfile')->name('edit-profile')->middleware('auth');

});
