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

// Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Autenticação
Route::post('/autentica', [AutenticaController::class, 'index']);

Route::get('/login', function () {
    if (session('sessionHash') == null){
        return view('login');
    }  else {
        return view('produtos/PesquisaProdutos');
    }
})->name('login');

Route::get('/desloga', [SessionController::class, 'desloga'])->name('desloga');


// ProdutosControllers
Route::get('/produtos', [ProdutosController::class, 'index']);
Route::post('/produtos/adicionar', [ProdutosController::class, 'adicionar'])->name('adicionar');
Route::get('/produtos/excluir/{ProdutoID}', [ProdutosController::class, 'excluir']);
Route::get('/produtos/alterar/{ProdutoID}', [ProdutosController::class, 'index']);

// ProdutosViews
Route::get('/produtos',function(){
    return view('produtos/produtos');
})->name('produtos');

Route::get('/PesquisaProdutos', function () {
    return view('produtos/PesquisaProdutos');
})->name('/PesquisaProdutos');

// UsuáriosControllers
Route::post('/usuarios/adicionar', [UserController::class, 'adiciona']);
Route::get('/usuarios/consultar/{userId}', [UserController::class, 'consulta']);
Route::delete('/usuarios/excluir', [UserController::class, 'exclui']);

// UsuáriosViews
Route::get('/cadastroUsuario', function () {
    return view('cadastros/cadastroUsuario');
})->name('cadastroUsuario');

Route::get('/cadastroFinalizado', function () {
    return view('cadastros/cadastroFinalizado');
});

// Home e indefinidos
Route::get('/', function(){
    return view('home');
});

Route::get('/posts', [PostController::class, 'index'] );