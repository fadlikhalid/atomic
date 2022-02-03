<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Auth0\Login\Auth0Controller;
use App\Http\Controllers\Auth\Auth0IndexController;

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

Route::get('/', 'BookController@index')->name('book.index');


Route::get('/forgetpass', function () {
    return view('forgetpass');
});


Route::get('/search', 'BookController@search')->name('book.search')->middleware('auth');
//Route::get('/search', 'BookController@search')->name('book.search')->middleware(['auth','verified']);

Route::get('/mybook', function () {
    return view('mybook');
});


Route::get('/history', function () {
    return view('history');
});

Route::get('/adminlogin', function () {
    return view('admin/adminlogin');
})->middleware('auth');


Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//============================================Login/Logout routes============================================//
Route::get('/register', function () {return view('auth.register');})->name('register');




//============================================email verify routes============================================//

// #1. Email verification Notice route: Give user instruction to click verification link
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

// #2 Email Verification Handler: handle user requests generated when the user clicks the email verification link
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

// #2 Resending The Verification Email: resend verification email to user
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('hello', 'HomeController@postVerify')->name('verify.post')->middleware('auth');

//============================================admin routes============================================//

Route::get('admin/dashboard', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');

Route::get('admin/profile', 'HomeController@adminProfile')->name('admin.route')->middleware('admin');

Route::get('admin/managebook', 'HomeController@manageBook')->name('admin.book.manage')->middleware('admin');

Route::get('admin/editbook', 'HomeController@editBook')->name('admin.route')->middleware('admin');

Route::get('admin/addbook', 'HomeController@addBook')->name('admin.route')->middleware('admin');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');



//============================================Password reset routing============================================//
Route::post('reset_password_without_token', 'AccountsController@validatePasswordRequest');
Route::post('reset_password_with_token', 'AccountsController@resetPassword');

?>