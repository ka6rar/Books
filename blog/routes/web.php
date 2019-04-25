<?php

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('Books/book', 'HomeController@index')->name('Books.book');


Route::get('Books/book' , 'BooksController@create')->name('Books.book');
Route::post('Books/stsore' , 'BooksController@stsore')->name('Books.stsore');
Route::get('Books/edit/{id}' , 'BooksController@edit')->name('Books.edit');
Route::post('Books/update/{id}'  , 'BooksController@update' )->name('Books.update');
Route::get('Books/destroy/{id}'  , 'BooksController@destroy' )->name('Books.destroy');


Route::get('User/deldet/{id}' , 'Usercontroller@deldet')->name('User.deldet');

Route::get('User/user' , 'Usercontroller@index' )->name('User.user');
Route::get('User/books' , 'Usercontroller@books' )->name('User.books');
Route::get('User/destroy/{id}' , 'Usercontroller@destroy' )->name('User.destroy');
Route::get('User/admin/{id}' , 'Usercontroller@admin' )->name('User.admin');
Route::get('User/user/destroy/{id}' , 'Usercontroller@destroy')->name('User.user.destroy');
Route::get('User/edit/{id}' , 'Usercontroller@edit')->name('User.edit');
Route::post('User/update/{id}' , 'Usercontroller@update')->name('User.update');
Route::get('show/{id}' , 'FrontendController@show')->name('show');


Route::get('/' , 'FrontendController@index')->name('welcome');



Route::get('/resulit', function () {

  $books = App\Books::where('title' , 'like' , '%' . request('search') . '%')->get();
  return view('/resulit')
  ->with('title' , request('search'))
  ->with('books' , $books)
  ->with('query' ,  request('search'));
});
