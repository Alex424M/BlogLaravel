<?php

use Illuminate\Support\Facades\Auth;
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


Route::group(['namespace'=>'App\Http\Controllers\Admin','prefix'=>'admin', 'middleware'=>['auth', 'admin']], function() {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main');
    });
    Route::group(['namespace' => 'Categories', 'prefix'=>'categories'], function () {
        Route::get('/', 'IndexController')->name('categories.index');
        Route::get('/create', 'CreateController')->name('categories.create');
        Route::post('/store', 'StoreController')->name('categories.store');
        Route::get('/{id}', 'ShowController')->name('categories.show');
        Route::get('/{id}/edit', 'EditController')->name('categories.edit');
        Route::patch('/{id}', 'UpdateController')->name('categories.update');
        Route::delete('/{id}', 'DeleteController')->name('categories.destroy');
    });
    Route::group(['namespace' => 'Tags', 'prefix'=>'tags'], function () {
        Route::get('/', 'IndexController')->name('tags.index');
        Route::get('/create', 'CreateController')->name('tags.create');
        Route::post('/store', 'StoreController')->name('tags.store');
        Route::get('/{id}', 'ShowController')->name('tags.show');
        Route::get('/{id}/edit', 'EditController')->name('tags.edit');
        Route::patch('/{id}', 'UpdateController')->name('tags.update');
        Route::delete('/{id}', 'DeleteController')->name('tags.destroy');
    });
    Route::group(['namespace' => 'Posts', 'prefix'=>'posts'], function () {
        Route::get('/', 'IndexController')->name('posts.index');
        Route::get('/create', 'CreateController')->name('posts.create');
        Route::post('/store', 'StoreController')->name('posts.store');
        Route::get('/{id}', 'ShowController')->name('posts.show');
        Route::get('/{id}/edit', 'EditController')->name('posts.edit');
        Route::patch('/{id}', 'UpdateController')->name('posts.update');
        Route::delete('/{id}', 'DeleteController')->name('posts.destroy');
    });
    Route::group(['namespace' => 'Users', 'prefix'=>'users'], function () {
        Route::get('/', 'IndexController')->name('users.index');
        Route::get('/create', 'CreateController')->name('users.create');
        Route::post('/store', 'StoreController')->name('users.store');
        Route::get('/{id}', 'ShowController')->name('users.show');
        Route::get('/{id}/edit', 'EditController')->name('users.edit');
        Route::patch('/{id}', 'UpdateController')->name('users.update');
        Route::delete('/{id}', 'DeleteController')->name('users.destroy');
    });
});
Route::group(['namespace'=>'App\Http\Controllers\Main'], function(){
    Route::get('/','IndexController')->name('main.index');
    Route::get('/category/{id}','IndexCategoryController')->name('main.category');
    Route::get('/tag/{id}','IndexTagController')->name('main.tag');
    Route::group(['middleware'=>'auth'], function(){
        Route::get('/auth','IndexController')->name('main1.index');
    });
    Route::get('/post/{id}','ShowController')->name('main.show');
    Route::post('/store/{id}', 'StoreController')->name('main.store');
    Route::get('/about','AboutController')->name('main.about');
});

Auth::routes();
Route::get('logout','App\Http\Controllers\Auth\LoginController@logout')->name('auth.logout');
