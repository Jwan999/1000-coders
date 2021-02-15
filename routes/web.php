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

//Route::get('/', function () {
//    return view('master');
//});

Route::get('/', function () {
    if (request()->has('language')) {
        session()->put('language', request()->language);
    }
    $locale = session()->get("language", "ar");
    app()->setLocale($locale);
    return view('master');
});

