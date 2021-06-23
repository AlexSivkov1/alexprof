<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')->name('main');

Route::get('/menu/{slug}', 'MainController@menu')->name('menu');

Route::get('/articles-list', 'PostController@index')->name('home');

Route::get('/article/{slug}', 'PostController@show')->name('posts.single');

// ниже для обзора всех Категорий
Route::get('/cats-list', 'CategoryController@index')->name('cats.all');
// ниже для обзора отдельной Категории
Route::get('/category/{slug}', 'CategoryController@show')->name('category.single');


Route::get('/tag/{slug}', 'TagController@show')->name('tags.single');




Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware'=> 'admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/posts', 'PostController');
});

Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');

});
Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');


