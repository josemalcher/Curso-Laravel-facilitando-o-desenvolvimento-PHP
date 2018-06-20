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

/* Route::get('/', function () {
    return view('welcome');
});
 */
/* Route::get('/', function () {
    return 'Primeira lógica com Laravel';
}); */

Route::get('/', function () {
    return '<h1>Primeira lógica com Laravel</h1';
});

Route::get('/outra', function(){
    return '<h1>Outra lógica com Laravel</h1';
});