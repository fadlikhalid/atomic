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

Route::get('/', 'BookController@index');


Route::get('/login', function () {
    return view('login');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/forgetpass', function () {
    return view('forgetpass');
});


Route::get('/search', function () {
    return view('search');
});

Route::get('/mybook', function () {
    return view('mybook');
});


Route::get('/history', function () {
    return view('history');
});

Route::get('/adminlogin', function () {
    return view('admin/adminlogin');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/editbook', function () {
    return view('admin/editbook');
});

Route::get('/managebook', function () {
    return view('admin/managebook');
});

Route::get('/profile', function () {
    return view('admin/profile');
});

?>