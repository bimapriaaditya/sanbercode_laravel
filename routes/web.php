<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SoalController;
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
    return view('sanber');
});

Route::get('/data-table/', 'MainController@index')->name('data-table');

// Soal
Route::resource('soal', 'SoalController');
// Route::get('/soal/', 'SoalController@index')->name('soal');
// Route::get('/soal-create/', 'SoalController@create')->name('soal/create');
// Route::post('soal/store', 'SoalController@store')->name('soal/store');
// // Route::get('soal/show/{id}', 'SoalController@show')->name('soal/show');
// Route::get('soal/edit/', 'SoalController@edit')->name('soal/edit');