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
    return view('index');
});

Route::get('/menus', function() {
    return view('menus');
});

// Login Routes

Route::get('/login', 'LoginController@login');

Route::post('/login', 'LoginController@validate');

Route::get('/register', 'LoginController@create');

Route::post('/register', 'LoginController@store');

// Admin Routes

Route::get('/admin', function(){
  $admin = true;
  return view('admin.index', compact('admin'));
})->name('admin');

Route::get('/admin/category', function(){
  $admin = true;
  return view('admin.category', compact('admin'));
});

Route::get('/admin/menu', function(){
  $admin = true;
  return view('admin.menu', compact('admin'));
});
