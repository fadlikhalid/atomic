<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;

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
// Route::get('/dashboard', 'Dashboard@count')->name('dash.count');

Route::get('dashboard', [Dashboard::class, 'count']);


Route::get('/login', function () {
    return view('login');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/forgetpass', function () {
    return view('forgetpass');
});


Route::get('/search', 'BookController@search')->name('book.search')->middleware('auth');

Route::get('/mybook', function () {
    return view('mybook');
});


Route::get('/history', function () {
    return view('history');
});

Route::get('/adminlogin', function () {
    return view('admin/adminlogin');
});

// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });

Route::get('/editbook', function () {
    return view('admin/editbook');
});

Route::get('/managebook', function () {
    return view('admin/managebook');
});

Route::get('/profile', function () {
    return view('admin/profile');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/forgot-password', function () {
    return view('auth.forgetpass');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');


Route::get('/reset-password/{token}', function ($token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');


?>