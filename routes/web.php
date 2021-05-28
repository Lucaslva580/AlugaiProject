<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    AutenticaController,
    PostController,
    ProdutosController,
};

// Route::get('/', 'HomeController@index');
Route::get('/posts', [PostController::class, 'index'] );
// Views
Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastroManual', function () {
    return view('cadastros/cadastroManual');
});

// Controllers
Route::get('/', [HomeController::class, 'index']);

Route::get('/produtos/excluir/{userID}/{ProdutoID}', [ProdutosController::class, 'excluir']);
// Route::get('/produtos/adicionar/{userID}/{ProdutoID}', [ProdutosController::class, 'index']);
// Route::get('/produtos/consultar/{userID}/{ProdutoID}', [ProdutosController::class, 'index']);
// Route::get('/produtos/alterar/{userID}/{ProdutoID}', [ProdutosController::class, 'index']);

Route::post('/autentica', [AutenticaController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

