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

/*
    Route::get('/hello', function(){
        return 'Hello Laravel';
    });
    //Closure => annonimus func

    Route::get('/post/{id?}', function ($id = null) {
        return 'Post: ' . $id;
    })->where('id', '[0-9]+');
    //->where('PARAM', 'RE');
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/posts', 'PostsController@index')
    ->name('posts');
Route::get('/posts/{id}', 'PostsController@show')
    ->name('posts.show')
    ->where( 'id', '[0-9]+' );
