<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
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
Route::prefix('produtos')->group(function () {
    Route::get('/lista', [ProdutosController::class, 'index'])->name('lista');
    Route::post('/adicionar', [ProdutosController::class, 'adicionar'])->name('adicionar');
    Route::get('/excluir/{ProdutoID}', [ProdutosController::class, 'excluir'])->name('excluir');
    Route::get('/alterar/{ProdutoID}', [ProdutosController::class, 'index'])->name('alterar');
});

// ProdutosViews
Route::get('/adicionar',function(){
    if (session('sessionHash') == null){
        return view('login');
    }else{
        return view('produtos/adicionaProdutos');
    };
})->name('adicionaProdutos');

// UsuáriosControllers
Route::prefix('usuarios')->group(function () {
    Route::post('/adicionarUser', [UserController::class, 'adiciona'])->name('adicionaUser');
    Route::get('/consultar', [UserController::class, 'consulta'])->name('consultaPerfil');
    Route::delete('/excluir', [UserController::class, 'exclui']);
});
// UsuáriosViews
Route::get('/cadastroUsuario', function () {
    return view('cadastros/cadastroUsuario');
})->name('cadastroUsuario');

Route::get('/cadastroFinalizado', function () {
    return view('cadastros/cadastroFinalizado');
});

Route::post('/perfil', function () {
    return view('usuarios/perfil');
})->name('perfil');


// Home e indefinidos
Route::get('/', function(){
    return view('home');
});

Route::get('/posts', [PostController::class, 'index'] );