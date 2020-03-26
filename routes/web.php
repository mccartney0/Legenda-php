<?php

use Illuminate\Http\Request;
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
    return view('index');
})->name('index');

/* Rotas para validação de usuario */
Route::get('/login', 'UsuarioController@index')->name('login');

Route::get('/login/RecuperarSenha', function(Request $request){
    $mensagem = $request->session()->get('mensagem');
    return view('usuario.recuperarSenha', compact('mensagem'));
})->name('recuperarSenha');
Route::post('/login/RecuperarSenha', 'UsuarioController@recuperarSenha');

Route::get('/login/informacoes', 'UsuarioController@informacoes')->name('informacoes');
Route::get('/login/sair', 'UsuarioController@sair');
route::post('/login/AlterarSenha', 'UsuarioController@alterarSenha');
Route::post('/login', 'UsuarioController@create');
Route::get('/login/Autenticacao', 'UsuarioController@show');

/* Rotas filmes/series */
Route::get('/filmes', 'FilmeController@index')->name('filmes');
Route::delete('/filmes/excluir/{id}', 'FilmeController@destroy');
Route::post('/filmes/criar', 'FilmeController@store');
Route::get('/filmes/buscar', 'FilmeController@show');

Route::get('/series', 'SerieController@index')->name('series');
Route::delete('/series/excluir/{id}', 'SerieController@destroy');
Route::post('/series/criar', 'SerieController@store');
Route::get('/series/buscar', 'SerieController@show');
