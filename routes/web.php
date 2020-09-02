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

    //user
    Route::post('/user/delete-users', 'UserController@deleteUsers')->name('user.delete-users');
    Route::resource('/user', 'UserController');

    //post
    Route::resource('/post', 'PostController');

    // campaign
    Route::resource('/campaign', 'CampaignController');
    Route::post('/campaign/delete', 'CampaignController@deletes')->name('campaign.delete');
    Route::get('/campaign/change-status/{id}', 'CampaignController@changeStatus')->name('campaign.change-status');

    //difficult
    Route::resource('/difficult', 'DifficultSituationController');

    //category
    Route::resource('/category', 'CategoryController');
    Route::post('/category/delete', 'CategoryController@deletes')->name('category.delete');

    //page
    Route::get('/donate', 'PageController@donate')->name('donate');
    Route::get('/comment', 'PageController@comment')->name('comment');
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
    Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
    Route::post('/articles/store', 'ArticleController@store')->name('articles.store');
    Route::get('/articles/detail/{id}', 'ArticleController@detailArticles')->name('articles.detail');

    Route::get('/loginfe', 'HomeController@login')->name('loginfe');

    //profile
    Route::get('/profile/{id}', 'UserController@profile')->name('profile');
    Route::post('/profile/{id}', 'UserController@editProfile')->name('edit-profile')->middleware('auth');
    Route::get('/profile/{id}/campaign', 'UserController@campaign')->name('profile-campaign');
    Route::get('/profile/{id}/articles', 'UserController@articles')->name('profile-articles');
    Route::post('/delete/articles/{id}', 'UserController@deleteArticles')->name('delete-articles')->middleware('auth');
    Route::post('/delete/campaign/{id}', 'UserController@deleteCampaign')->name('delete-campaign')->middleware('auth');

});
