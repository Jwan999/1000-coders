<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\CodeController;
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


Route::get('/', function () {
    if (request()->has('language')) {
        session()->put('language', request()->language);
    }
    $locale = session()->get("language", "ar");
    app()->setLocale($locale);
    return view('master');
});

Route::get('/codes', [CodeController::class, 'show']);

Route::post('/emails', [EmailController::class, 'store']);
Route::get('/login', [LoginController::class, 'login'])->name('login');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/emails', [EmailController::class, 'index']);

    Route::get('/registers', [StudentController::class, 'registersPage']);
    Route::get('/api/registers', [StudentController::class, 'show']);

    Route::get('/students/export', [StudentController::class, 'export']);
    Route::get('/applicants/export', [StudentController::class, 'exportApplicants']);


    Route::get('/charts', [StudentController::class, 'charts']);

    Route::get('/applicants', [ApplicantController::class, 'show'])->name('home');

});

//
//Route::get('/signup', [StudentController::class, 'index']);
//Route::post('/signup', [StudentController::class, 'store']);


Route::get('/signup', [ApplicantController::class, 'index']);
Route::post('/signup', [ApplicantController::class, 'store']);

Auth::routes();

