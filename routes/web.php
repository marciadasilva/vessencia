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

Route::get('/', 'SiteController@index')->name('home');

Route::get('/menus', 'SiteController@menus');

Route::get('/menus/{category}', 'SiteController@menu');

Route::get('/contact','SiteController@contact');

Route::get('/services', function(){
    return view('services');
});

// Login Routes

Route::get('/login', 'LoginController@login')->name('login');

Route::post('/login', 'LoginController@signIn');

Route::get('/register', 'LoginController@create');

Route::post('/register', 'LoginController@store');

Route::get('/logout', 'LoginController@destroy');

// Admin Routes

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/category', 'AdminController@showCategories')->name('categories');
Route::get('/admin/category/create', 'AdminController@createCategory');
Route::post('/admin/category/create', 'AdminController@storeCategory');
Route::get('/admin/category/edit/{category}', 'AdminController@updateCategory');
Route::post('/admin/category/edit/{category}', 'AdminController@storeUpdateCategory');
Route::get('/admin/category/delete/{category}', 'AdminController@deleteCategory');

Route::get('/admin/menu', 'AdminController@showMenu')->name('menus');
Route::get('/admin/menu/create', 'AdminController@createMenu');
Route::post('/admin/menu/create', 'AdminController@storeMenu');
Route::get('/admin/menu/edit/{menu}', 'AdminController@updateMenu');
Route::post('/admin/menu/edit/{menu}', 'AdminController@storeUpdateMenu');
Route::get('/admin/menu/delete/{menu}', 'AdminController@deleteMenu');

Route::get('/admin/services', 'AdminController@showServices')->name('services');
