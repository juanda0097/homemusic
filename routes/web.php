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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/Homemusic', 'HomemusicController');
Route::resource('/Album', 'AlbumController');
Route::resource('/Interpreter', 'InterpreterController');
Route::resource('/Gender', 'GenderController');
Route::resource('/Medial', 'MedialController');
Route::resource('/Author', 'AuthorController');
Route::resource('/Song', 'SongController');
Route::get('/mostrarcanciones','SongController@mostrar_all_pdf');