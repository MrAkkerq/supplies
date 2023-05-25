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


Route::post('/supplies/{supply}/report', 'App\Http\Controllers\ReportController@addReportToSupply');
Route::get('/reports', 'App\Http\Controllers\ReportController@index');

Route::delete('/products/{product}', 'App\Http\Controllers\ProductController@destroy');

Route::get('/products/{product}/edit', 'App\Http\Controllers\ProductController@edit');

Route::patch('/products/{product}', 'App\Http\Controllers\ProductController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
