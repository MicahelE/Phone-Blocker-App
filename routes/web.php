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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'CsvFile@data');
Route::get('datatable', 'CsvFile@data')->name('datatable');

Route::get('csv_file', 'CsvFile@index');
Route::get('/profile/{id}', 'CsvFile@profile')->name('profile');
Route::get('/update/{id}', 'CsvFile@update')->name('update');
Route::get('csv_file/export', 'CsvFile@csv_export')->name('export');

Route::post('csv_file/import', 'CsvFile@csv_import')->name('import');
Route::get('/dashboard', 'PhoneuserController@data')->name('dashboard');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
