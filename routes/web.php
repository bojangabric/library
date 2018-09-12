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
Route::get('/', function (){
    return view('index');
});

Route::get('/store/categories/{CategoryID}', 'CategoriesController@index');
Route::get('/store/book/{book}', 'BooksController@show');
Route::post('/store/book/{book}/reviews', 'ReviewsController@store');

Route::get('/contact', 'SiteInfoController@contact');

Auth::routes();
Route::get('/index', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->middleware('is_Admin')->name('admin');
Route::get('/admin/tables', 'AdminController@tables')->middleware('is_Admin')->name('admin');

Route::post('getTableData', 'HomeController@ajaxRequestGetData');
Route::post('addTableRow', 'HomeController@ajaxRequestAddRow');
Route::post('deleteTableRow', 'HomeController@ajaxRequestDeleteRow');
Route::post('editTableRow', 'HomeController@ajaxRequestEditRow');

Route::get('/checkout', 'UserController@checkout');
Route::get('/settings', 'UserController@showSettings');
Route::get('/cart', 'UserController@showCart');
Route::post('/changeSettings','UserController@changeSettings')->name('changeSettings');
Route::post('addBookToCart', 'UserController@ajaxRequestAddBookToCart');
Route::post('deleteBookFromCart', 'UserController@ajaxRequestDeleteBookFromCart');
