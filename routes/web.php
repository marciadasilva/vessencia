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

Route::get('/chef', 'SiteController@chef');
Route::get('/categories', 'SiteController@categories');

Route::get('/menus', 'SiteController@menus');
Route::get('/menus/{category}', 'SiteController@menu');
Route::get('/menus/{category}/{menu}', 'SiteController@detailMenu');

Route::get('/contact','SiteController@contact')->name('contact');
Route::post('/contact', 'SiteController@store');

Route::get('/services', 'SiteController@services');
Route::get('/services/{service}', 'SiteController@service');

Route::get('/gallery-photos', 'SiteController@galleryPhotos');

Route::get('/gallery-recipes', 'SiteController@galleryRecipes');

Route::get('/news', 'SiteController@news');
Route::get('/news/detail/{news}', 'SiteController@newsDetail');

// Login Routes

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@signIn');

Route::get('/register', 'LoginController@create');
Route::post('/register', 'LoginController@store');

Route::get('/logout', 'LoginController@destroy');

// Admin Routes

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/help', 'AdminController@help')->name('help');

Route::get('/admin/category', 'CategoryController@showCategories')->name('categories');
Route::get('/admin/category/create', 'CategoryController@createCategory');
Route::post('/admin/category/create', 'CategoryController@storeCategory');
Route::get('/admin/category/edit/{category}', 'CategoryController@updateCategory');
Route::post('/admin/category/edit/{category}', 'CategoryController@storeUpdateCategory');
Route::get('/admin/category/delete/{category}', 'CategoryController@deleteCategory');

Route::get('/admin/menu', 'MenuController@showMenu')->name('menus');
Route::get('/admin/menu/create', 'MenuController@createMenu');
Route::post('/admin/menu/create', 'MenuController@storeMenu');
Route::get('/admin/menu/edit/{menu}', 'MenuController@updateMenu');
Route::post('/admin/menu/edit/{menu}', 'MenuController@storeUpdateMenu');
Route::get('/admin/menu/delete/{menu}', 'MenuController@deleteMenu');

Route::get('/admin/service', 'ServiceController@showServices')->name('services');
Route::get('/admin/service/create', 'ServiceController@createService');
Route::post('/admin/service/create', 'ServiceController@storeService');
Route::get('/admin/service/edit/{service}', 'ServiceController@updateService');
Route::post('/admin/service/edit/{service}', 'ServiceController@storeUpdateService');
Route::get('/admin/service/delete/{service}', 'ServiceController@deleteService');

Route::get('/admin/company', 'CompanyController@company')->name('company');
Route::post('/admin/company', 'CompanyController@storeCompany');

Route::get('/admin/news', 'NewsController@showNews')->name('news');
Route::get('/admin/news/create', 'NewsController@createNews');
Route::post('/admin/news/create', 'NewsController@storeNews');
Route::get('/admin/news/edit/{news}', 'NewsController@updateNews');
Route::post('/admin/news/edit/{news}', 'NewsController@storeUpdateNews');
Route::get('/admin/news/delete/{news}', 'NewsController@deleteNews');

Route::get('/admin/recipe', 'RecipeController@showRecipe')->name('recipes');
Route::get('/admin/recipe/create', 'RecipeController@createRecipe');
Route::post('/admin/recipe/create', 'RecipeController@storeRecipe');
