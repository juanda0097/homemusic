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
Route::get('/pdfcancion','SongController@mostrar_all_pdf');



Route::get('/pdfcasamusical','HomemusicController@mostrar_all_pdf');

Route::get('/pdfalbum','AlbumController@mostrar_all_pdf');

Route::get('/pdfinterprete','InterpreterController@mostrar_all_pdf');

Route::get('/pdfgenero','GenderController@mostrar_all_pdf');

Route::get('/pdfautor','AuthorController@mostrar_all_pdf');

Route::get('/pdfmedio','MedialController@mostrar_all_pdf');


/* Consultas con otras tablas PDF */

Route::get('/pdfconsulta3','SongController@consulta_3');

Route::get('/pdfcancionmedio','SongController@mostrar_all_pdf1');

Route::get('/pdfconsulta4','SongController@consulta_4');

Route::get('/pdfconsulta5','SongController@consulta_5');

Route::get('/pdfconsulta6','SongController@consulta_6');

