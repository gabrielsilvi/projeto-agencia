<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', 'IndexController@index')->name('index');
// Route::get('logado', 'logadoController');
