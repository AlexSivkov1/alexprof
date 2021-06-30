<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');


// выводит ВСЕ ПОСТЫ из кнопки АРХИВ на панели МЕНЮ
Route::get('/posts', 'PostController@index')->name('posts.all');
// выводит 1 ПОСТ
Route::get('/posts/{slug}', 'PostController@show')->name('posts.single');
// выводит все Категории:: 1)с Кнопки "Катеогории" в Меню,
Route::get('/categories', 'CategoryController@index')->name('categories.all');
// выводит все Посты определенной запрошенной категории: с 1)кнопки Меню, 2)с отдельной страницы
Route::get('/categories/{slug}', 'CategoryController@show')->name('categories.single');

Route::match(['get','post'], '/send','ContactController@send' )->name('send');



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


