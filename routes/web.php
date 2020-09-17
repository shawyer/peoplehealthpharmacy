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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/add', function () {
    return view('add');
});
Route::get('/sales', function () {
    return view('sales');
});
Route::get('/EditItem', function () {
    return view('Edititem');
});
Route::post('/add','App\Http\Controllers\AddController@index')->name('add');
Route::post('/post-add','App\Http\Controllers\AddController@submit')->name('submit');
Route::post('/post-sale','App\Http\Controllers\AddController@sale')->name('sale');
Route::post('/edit-item','App\Http\Controllers\EditController@EditItem')->name('EditItem');
Route::post('/edit-item-Quantity','App\Http\Controllers\EditController@EditItemQuantity')->name('EditItemQuantity');
Route::post('/edit-itemSale-Quantity','App\Http\Controllers\EditController@EditItemSaleAmount')->name('EditItemSaleAmount');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
