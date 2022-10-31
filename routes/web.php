<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'/', 'middleware' => ['auth']],function(){
    Route::get('logado', 'IndexLogadoController@index')->name('indexlogado');

    Route::resource('minhascompras','MinhasComprasController');
    
    Route::get('logout', 'IndexLogadoController@logout')->name('logout');
    
});
Route::get('/', 'IndexController@index')->name('index');

Auth::routes();