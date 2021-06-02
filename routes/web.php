<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    AutenticaController,
    PostController,
    ProdutosController,
    SessionController,
    UserController,
};

// Route::get('/', 'HomeController@index');
Route::get('/posts', [PostController::class, 'index'] );
// Views
Route::get('/login', function () {
    if (session()->get('sessao') == ""){
        return view('login');
      }  else {
        return view('PesquisaProdutos');
      }
});
Route::get('/desloga', [SessionController::class, 'desloga']);

Route::get('/cadastroManual', function () {
    return view('cadastros/cadastroManual');
});

Route::get('/PesquisaProdutos', function () {
    return view('PesquisaProdutos');
});

Route::get('/', function(){
    return view('landingPage');
});

// Controllers


// Route::get('/produtos/excluir/{ProdutoID}', [ProdutosController::class, 'excluir']);
// Route::get('/produtos/adicionar/{name}/{email}/{senha}/', [ProdutosController::class, 'adiciona']);
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtao');;
// Route::get('/produtos/alterar/{ProdutoID}', [ProdutosController::class, 'index']);

Route::post('/usuarios/adicionar', [UserController::class, 'adiciona']);
Route::get('/usuarios/consultar/{userId}', [UserController::class, 'consulta']);
Route::delete('/usuarios/excluir', [UserController::class, 'exclui']);

Route::post('/autentica', [AutenticaController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cadastroFinalizado', function () {
    return view('cadastros/cadastroFinalizado');
});