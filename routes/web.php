<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;
use App\Mail\ContactMail;
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

Route::get('/email', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    Mail::to('jwanaalfatla1999@gmail.com')->send(new \App\Mail\ContactMail($details));

    dd("Email is Sent.");
});


