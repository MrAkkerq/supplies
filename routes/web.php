<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/supplies', 'App\Http\Controllers\SuppliesController');

Route::post('/supplies/{supply}/products', 'App\Http\Controllers\ProductController@store');

//Route::get('/reports', function() {
//    return view('reports');
//});

Route::post('/supplies/{supply}/report', 'App\Http\Controllers\ReportController@addReportToSupply');
Route::get('/reports', 'App\Http\Controllers\ReportController@index');
