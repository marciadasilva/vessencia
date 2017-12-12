<?php

use App\Category;

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
    $categories = Category::latest()->get();
    return view('index', compact('categories'));
})->name('home');

Route::get('/menus', function() {
    return view('menus');
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

Route::get('/admin/category/delete/{category}', 'AdminController@deleteCategory');

Route::post('/admin/category/create', 'AdminController@storeCategory');

Route::get('/admin/menu', 'AdminController@showMenu');
