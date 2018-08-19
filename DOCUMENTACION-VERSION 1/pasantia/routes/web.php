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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes -Rutas

Route::middleware(['auth'])->group(function(){
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');


	//Rutas de personas
	Route::post('personas/store', 'PersonaController@store')->name('personas.store')
		->middleware('permission:persona.create');

	Route::get('personas', 'PersonaController@index')->name('personas.index')
		->middleware('permission:persona.index');

	Route::get('personas/create', 'PersonaController@create')->name('personas.create')
		->middleware('permission:persona.create');

	Route::put('personas/{role}', 'PersonaController@update')->name('personas.update')
		->middleware('permission:persona.edit');

	Route::get('personas/{role}', 'PersonaController@show')->name('personas.show')
		->middleware('permission:persona.show');

	Route::delete('personas/{role}', 'PersonaController@destroy')->name('personas.destroy')
		->middleware('permission:persona.destroy');

	Route::get('personas/{role}/edit', 'PersonaController@edit')->name('personas.edit')
		->middleware('permission:persona.edit');


	//Ruta de Usuarios
	Route::post('users/store', 'UserController@store')->name('users.store')
		->middleware('permission:users.create');

	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');

	Route::get('users/create', 'UserController@create')->name('users.create')
		->middleware('permission:users.create');

	Route::put('users/{role}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{role}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');
});