<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmailController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;

use \Illuminate\Support\Facades\Mail;

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

Route::get('/emails', [EmailController::class, 'index'])->middleware('auth');

Route::post('/emails', [EmailController::class, 'store']);


Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/registers', [StudentController::class, 'show']);


Route::get('/signup', [StudentController::class, 'index']);
Route::post('/signup', [StudentController::class, 'store']);

Route::get('students/export/', [StudentController::class, 'export']);


Auth::routes();

