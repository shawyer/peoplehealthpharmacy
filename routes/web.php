<?php

use App\Http\Controllers\DisplayController;
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
    return view('home');
});

Auth::routes();

Route::get('/add', function () {
    return view('add'); // manage stock page
});
Route::get('/sales', function () {
    return view('sales'); // amount sold and item sold for add sales
});
Route::get('/EditItem', function () {
    return view('EditItem'); // will go under modify
});
Route::get('/Delete', function () {
    return view('deletesale'); // will go under modify
});
Route::get('/getsale', function () {
    return view('getsale'); // will go under modify for searching
});
Route::get('/monthlyPrediciton', function () {
    return view('mpredicition'); // predictions page
});
Route::get('/weeklyPrediciton', function () {
    return view('wpredicition'); // predictions page
});
Route::get('/weeklyCategoryPrediciton', function () {
    return view('wcategorypredicition'); // predictions page
});
Route::get('/monthlyCategoryPrediciton', function () {
    return view('mcategorypredicition'); // predictions page
});
Route::get('/searchResult', function () {
    return view('searchResult'); // search result page
});
Route::get('/displaymonth', function () {
    return view('displaymonth'); // display form page
});

/*
Route::get('/displaymonth', function () {
    return view('monthlysales'); // display form page
});
*/
Route::post('/display-month', 'App\Http\Controllers\DisplayController@displayMonthlyItems')->name('display-month');

Route::get('/display', [DisplayController::class, 'getItems']);
Route::get('/displayItem/{itemName}', 'App\Http\Controllers\DisplayController@displayItemInfo')->name('displayItem');
Route::post('/add','App\Http\Controllers\AddController@index')->name('add');
Route::post('/post-add','App\Http\Controllers\AddController@submit')->name('submit');
Route::post('/post-mPredicitons','App\Http\Controllers\prediction@displayMonthlyPrediciton')->name('monthly');
Route::post('/post-mCategoryPredicitons','App\Http\Controllers\prediction@displayMonthlyCategoryPrediciton')->name('monthlyC');
Route::post('/post-wCategoryPredicitons','App\Http\Controllers\prediction@displayWeeklyCategoryPrediciton')->name('monthlyW');
Route::post('/post-wPredicitons','App\Http\Controllers\prediction@displayWeeklyPrediciton')->name('weekly');
Route::get('/displayweek', 'App\Http\Controllers\DisplayController@displayWeek');
Route::post('/post-sale','App\Http\Controllers\AddController@sale')->name('sale');
Route::post('/edit-item','App\Http\Controllers\EditController@EditItem')->name('EditItem');
Route::post('/edit-item-Quantity','App\Http\Controllers\EditController@EditItemQuantity')->name('EditItemQuantity');
Route::post('/edit-itemSale-Quantity','App\Http\Controllers\EditController@EditItemSaleAmount')->name('EditItemSaleAmount');
Route::post('/get-sale','App\Http\Controllers\GetController@get')->name('get');
Route::post('/delete-sale','App\Http\Controllers\DeleteController@delete')->name('delete');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/csvdownload', 'App\Http\Controllers\GenerateCSV@GenerateCSV')->name('csv');
