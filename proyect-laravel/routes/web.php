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
Route::get('/', 'App\Http\Controllers\ProductosController@index');       
//Route::get('/dashboard', 'ProductoController@index');

 // Route::resource('producto','ProductoController');
  //Route::resource('admin','AdminController');

  Route::get('/nuevoproducto','App\Http\Controllers\ProductosController@create');
  Route::post('/products','App\Http\Controllers\ProductosController@store')->name('producto.store');

  Route::get('modificar/{id}', function ($id) {
    return redirect()->route('producto.edit', ['id'=> $id]);
  })->where('id', '[0-9]+');

  Route::get('eliminar/{id}', function ($id) {
    return redirect()->route('producto.show', ['id'=> $id]);
  })->where('id', '[0-9]+');


//Auth::routes(); // RUTAS DE AUTENTICACIÓN DE LARAVEL



/*Route::group(['middleware' => 'admin'], function () {

    Route::get('admin', 'AdminController@index');

});*/


