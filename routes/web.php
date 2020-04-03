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
    return view('welcome');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/ofertaEducativa', function () {
    return view('ofertaEducativa');
});
Route::get('/sobreNosotros', function () {
    return view('sobreNosotros');
});*/

Route::view('/', 'welcome');
Route::view('/contacto', 'contacto');
Route::view('/ofertaEducativa', 'ofertaEducativa');
Route::view('/directorio', 'directorio');
Route::view('/sobreNosotros', 'sobreNosotros');
Route::view('/convocatoria', 'convocatoria');
Route::view('/login', 'login');