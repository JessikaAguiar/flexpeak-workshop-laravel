<?php

use Illuminate\Support\Facades\Route;

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

// Criando uma nova rota
Route::get('contatos', function (){
    return \App\Contato::all();
});

// Criando uma nova rota para salvar dados
Route::get('salvar', function () {
    $contato = new \App\Contato();

    $contato->nome = "Apollo Aguiar Brito";
    $contato->telefone = time();

    $contato->save();

    return 'Contato salvo com sucesso <h1>'.$contato->nome.'</h1>';
});