<?php

// contoh per ke 9
// Route::get('/', function () {
//     return 'admin page';
// })->name('dashboard');
Route::get('/', 'HomeController@index')->name('dashboard');

// Route::get('/author','AuthorController@index')->name('author.index');
// Route::get('/author/create','AuthorController@create')->name('author.create');
// Route::post('/author','AuthorController@store')->name('author.store');
// Route::get('/author/{author}/edit','AuthorController@edit')->name('author.edit');
// Route::put('/author/{author}','AuthorController@update')->name('author.update');
// Route::delete('/author/{author}','AuthorController@destroy')->name('author.destroy');

Route::get('/author/data','DataController@authors')->name('author.data');
Route::get('/book/data','DataController@books')->name('book.data');
//per 46 route untuk data
Route::get('/borrow/data','DataController@borrows')->name('borrow.data');

Route::resource('author','AuthorController');
Route::resource('book','BookController');




// per 46 route untuk tampilannya
Route::get('borrow','BorrowController@index')->name('borrow.index');
//47
Route::put('borrow/{borrowHistory}/return','BorrowController@returnBook')->name('borrow.return');

// 53
Route::get('report/top-book','ReportController@topbook')->name('report.top-book');
Route::get('report/top-user','ReportController@topuser')->name('report.top-user');


// EMPLOYE
Route::get('/employe/data','DataController@employe')->name('employe.data');
Route::get('/employe','EmployeController@index')->name('employe.index');
Route::get('/employe/create','EmployeController@create')->name('employe.create');
Route::post('/employe','EmployeController@store')->name('employe.store');
Route::get('/employe/{employe}/edit','EmployeController@edit')->name('employe.edit');
Route::put('/employe/{employe}','EmployeController@update')->name('employe.update');
Route::delete('/employe/{employe}','EmployeController@destroy')->name('employe.destroy');



// COMPANY
Route::get('/company/data','DataController@company')->name('company.data');

Route::get('/company','CompanyController@index')->name('company.index');
Route::get('/company/create','CompanyController@create')->name('company.create');
Route::post('/company','CompanyController@store')->name('company.store');
Route::get('/company/{company}/edit','CompanyController@edit')->name('company.edit');
Route::put('/company/{company}','CompanyController@update')->name('company.update');
Route::delete('/company/{company}','CompanyController@destroy')->name('company.destroy');
