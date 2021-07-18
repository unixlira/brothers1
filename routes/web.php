<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\SiteController@index');
Route::get('/analise', 'App\Http\Controllers\SiteController@analise');
Route::get('/contato', 'App\Http\Controllers\SiteController@contato');
Route::get('/compras', 'App\Http\Controllers\SiteController@compras');
Route::get('/veiculos/{id}', 'App\Http\Controllers\SiteController@veiculo');
Route::post('/contatoVeiculo', 'App\Http\Controllers\SiteController@contatoVeiculo');
Route::get('/xml', 'App\Http\Controllers\XmlController@index')->name('xml');
Route::get('/buscar/', 'App\Http\Controllers\SiteController@buscar')->name('buscar');
Route::get('/veiculos', 'App\Http\Controllers\SiteController@estoque')->name('veiculos');
