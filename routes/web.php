<?php
use Illuminate\Support\Request;
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
    // Retornando todos os contatos
    // return \App\Contato::all();

    $contatos = \App\Contato::all();

    // Retornando a view contatos, com parametros
    return view('contatos', compact('contatos'));
});

// Criando uma nova rota para salvar dados
Route::get('salvar', function () {
    $contato = new \App\Contato();

    $contato->nome = "Apollo Aguiar Brito";
    $contato->telefone = time();

    $contato->save();

    return 'Contato salvo com sucesso <h1>'.$contato->nome.'</h1>';
});

// Criando uma rota para formulario
Route::get('formulario', function () {
    return view('formulario');
});


// salvando e retornando para contatos
Route::post('contatos', 'ContatoController@store');

