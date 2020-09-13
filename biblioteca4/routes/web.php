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

Route::resource('/libros','librosController');


Route::get('/', function () {

	/*$user = Auth::user();
	if($user->esBiblio()){
		echo "Eres usuario bibliotecario/a";
	}
	else{
		echo "Eres usuario";
	}*/


    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/biblio','bibliotecarioController@index');

Route::get('/inicio', 'librosController@index');
/*
Route::get('/crear', 'librosController@create');

Route::get('/actualizar', 'librosController@update');
Route::get('/insertar', 'librosController@store');
Route::get('/borrar', 'librosController@destroy');*/