<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\SiteController@index');
Route::get('/analise', 'App\Http\Controllers\SiteController@analise');
Route::get('/contato', 'App\Http\Controllers\SiteController@contato');
Route::get('/compras', 'App\Http\Controllers\SiteController@compras');
Route::get('/empresa', 'App\Http\Controllers\SiteController@empresa');
Route::get('/veiculos/{id}', 'App\Http\Controllers\SiteController@veiculo');
Route::get('/buscar/', 'App\Http\Controllers\SiteController@buscar')->name('buscar');
Route::get('/veiculos', 'App\Http\Controllers\SiteController@estoque')->name('veiculos');
Route::post('/contatoVeiculo', 'App\Http\Controllers\SiteController@contatoVeiculo')->name('contatoVeiculo');
Route::post('/contatoAnalise', 'App\Http\Controllers\SiteController@contatoAnalise')->name('contatoAnalise');
Route::post('/newsletter', 'App\Http\Controllers\SiteController@newsletter')->name('newsletter');
Route::post('/contatoSite', 'App\Http\Controllers\SiteController@contatoSite')->name('contatoSite');
