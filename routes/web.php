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

/*
Route::get('/', function () {
    return view('home');
});
*/

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

Route::resource('portafolio', 'ProjectController')
	->parameters(['portafolio'=>'project'])
	->names('projects');

Route::view('/contact','contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');

Route::get('/form', ['as' => 'form', 'uses' => 'FormController@index']);

/* Este código no funciona. sigue mostrando register*/
Auth::routes(['register' => false]);
