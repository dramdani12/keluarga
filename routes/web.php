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
// Route::get('/ortu', function () {
// 	$or=App\ortu::all();
// 	foreach($or as $data){
// 		echo $data->nama_ibu." dengan ";
// 		echo $data->nama_ayah." ";
// 		foreach ($data ->budak as  $key ) {
// 			echo"<li>$key->nama</li><br>";
// 		}
// 	}
// });
Route::get('/percobaan', 'MyController@index');
Route::get('/abour', 'MyController@tampilan');
Route::get('/ortu', 'MyController@model');
Route::get('/budak', 'MyController@model1');
Route::resource('orangtua','orangtuacontroller');
Route::resource('author','authorcontroller');
Route::resource('book','bookcontroller');
Route::resource('anak','anakcontroller');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
