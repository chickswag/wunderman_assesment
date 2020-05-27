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


Route::get('/Posts', function () {
    return view('Posts.posts');
});

Route::redirect('/', '/Posts');

Route::prefix('api')->group(function() {
    Route::resource('Posts', 'PostsControllers');
    Route::get('/Posts','PostsControllers@index')->name('posts');
    Route::get('/fetchPosts','PostsControllers@fetchPosts')->name('getposts');
    Route::get('/StoryType','PostsControllers@filterByType')->name('filter');

});