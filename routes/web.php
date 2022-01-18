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


Route::get('/search', 'BookController@search')->name('book.search');

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

Route::get('/editbook/{id}', 'BookController@edit')->name('admin.book.edit');

Route::put('/editbook/{id}', 'BookController@save')->name('admin.book.save');

Route::get('/addbook',function (){return view('admin/addbook');})->name('admin.book.add');

Route::post('/managebook', 'BookController@new')->name('admin.book.new');

Route::get('/managebook', 'BookController@index2')->name('admin.book.manage');

Route::get('/profile', function () {
    return view('admin/profile');
});

?>