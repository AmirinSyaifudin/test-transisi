<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//      return view('welcome');
//     //return view('admin.templates.default');
// });

// pertemuan ke 31
// Route::get('/', function () {
//     return view('homepage');
//     //return view('frontend.templates.default');
// });

// Route::get('/','Frontend\\BookController@index');
Route::get('/','Frontend\\BookController@index')->name('homegape');
Route::get('/book/{book}','Frontend\\BookController@show')->name('book.show');
// konsep rest meminjam methiod post
Route::post('/book/{book}/borrow','Frontend\\BookController@borrow')->name('book.borrow')->middleware('auth');



Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');










