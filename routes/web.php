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

Route::post('/pessoas/excluir','ControllerApi@Excluir');

Route::post('/pessoas/alterar','ControllerApi@Alterar');

Route::post('/pessoas/adicionar','ControllerApi@Adicionar');

Route::get('/pessoas','ControllerApi@Consultar');

Route::get('/pessoas/{id}','ControllerApi@ConsultarId');