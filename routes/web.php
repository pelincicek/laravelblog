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

Route::get('articles', 'ArticleController@list')->name('articles');
Route::post('articles', 'ArticleController@store')->name('storeArticle');
Route::get('articles/create', 'ArticleController@create')->name('newArticleForm');
Route::get('articles/{article}', 'ArticleController@detail')->name('articleDetail');
Route::get('articles/{article}/edit', 'ArticleController@edit')->name('editArticle');
Route::put('articles/{article}', 'ArticleController@update')->name('updateArticle');
Route::delete('articles/{article}', 'ArticleController@delete')->name('deleteArticle');