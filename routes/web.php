<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    AutenticaController,
    PostController,
    ProdutosController,
    SessionController,
};

// Route::get('/', 'HomeController@index');
Route::get('/posts', [PostController::class, 'index'] );
// Views
Route::get('/login', function () {
    if (session()->get('sessao') == ""){
        return view('login');
      }  else {
        echo"<script language='javascript' type='text/javascript'>
               window.location.href='/';</script>";
      }
});

Route::get('/cadastroManual', function () {
    return view('cadastros/cadastroManual');
});

Route::get('/PesquisaProdutos', function () {
    return view('PesquisaProdutos');
});

// Controllers
Route::get('/', [HomeController::class, 'index']);

Route::get('/desloga', [SessionController::class, 'desloga']);

Route::get('/produtos/excluir/{userID}/{ProdutoID}', [ProdutosController::class, 'excluir']);
// Route::get('/produtos/adicionar/{userID}/{ProdutoID}', [ProdutosController::class, 'index']);
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtao');;
// Route::get('/produtos/alterar/{userID}/{ProdutoID}', [ProdutosController::class, 'index']);

Route::post('/autentica', [AutenticaController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

