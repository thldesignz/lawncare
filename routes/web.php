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
//home page
Route::get('/', function () {
    return view('pages/home');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/services', function () {
    return view('pages/services');
});
Route::get('/quote', function () {
    return view('pages/quote');
});
//log/register
Route::get('/login', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('welcome');
});







