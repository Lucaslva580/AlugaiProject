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

Route::get('/cadastro', function () {
    return view('cadastro');
});

// Controllers
Route::get('/', [HomeController::class, 'index']);

Route::get('/produtos/excluir/{userID}/{ProdutoID}', [ProdutosController::class, 'excluir']);
// Route::get('/produtos/adicionar/', [ProdutosController::class, 'index']);
// Route::get('/produtos/consultar/', [ProdutosController::class, 'index']);
// Route::get('/produtos/alterar/', [ProdutosController::class, 'index']);

Route::post('/autentica', [AutenticaController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

