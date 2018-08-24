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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','main');
Route::view('/index','index');
Route::resource('alumnos','AlumnosController');
Route::resource('cursos','CursosController');
Route::resource('materias','MateriasController');
