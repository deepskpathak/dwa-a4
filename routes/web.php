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

Route::pattern('id', '[0-9]+');  // added this regex to force route id patterns and avoid errors with string pass

Auth::routes();

Route::get('/', function () {
    return view('index');
});

// Auth middleware
Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', ['as' => 'home', 'uses' => 'NoteController@index']);
    Route::get('/home/{id}', 'NoteController@notesInNotebook');

    Route::get('/notebook/create', 'NotebookController@create');
    Route::post('/notebook/create', 'NotebookController@save');

    Route::get('/notebook/edit/{id}', 'NotebookController@edit');
    Route::post('/notebook/edit/{id}', 'NotebookController@update');

    Route::get('/notebook/delete/{id}', 'NotebookController@delete');

    Route::get('/note/create', 'NoteController@create');
    Route::post('/note/create', 'NoteController@save');

    Route::get('/note/{id}', ['as' => 'note', 'uses' => 'NoteController@singleNote']);

    Route::get('/note/edit/{id}', 'NoteController@edit');
    Route::post('/note/edit/{id}', 'NoteController@update');

    Route::get('/note/delete/{id}', 'NoteController@delete');



});

