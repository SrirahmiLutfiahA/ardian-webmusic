<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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
Route::get('/services', function () {
    return view('service');
});
Route::get('/service-detail', function () {
    return view('service-detail');
});
Route::get('/portofolio', function () {
    return view('portofolio');
});
Route::get('/reviews', function () {
    return view('review');
});
Route::get('/contact', function () {
    return view('contact');
});