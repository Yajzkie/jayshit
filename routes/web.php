<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/ok', function () {
//     return "view('welcome')";
// });
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/3dmodel', 'SLSUModelController@slsu_model')->name('model');
    Route::get('/news', 'NewsController@news')->name('news');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
