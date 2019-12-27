<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/categori', 'Categori\CategoriController');
Route::resource('/tiket', 'Tiket\TiketController');

Route::get('/transaksi', 'Transaksi\TransaksiController@index');
Route::delete('/transaksi/{transaksi}', 'Transaksi\TransaksiController@destroy');
Route::post('/transaksi/store', 'Transaksi\TransaksiController@store');
Route::get('/transaksi/update/', 'Transaksi\TransaksiController@update');