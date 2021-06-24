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
    Route::get('/listaBusca', [ProdutosController::class, 'listaBusca'])->name('listaBusca');
    Route::post('/adicionar', [ProdutosController::class, 'adicionar'])->name('adicionar');
    Route::get('/consultaProduto', [ProdutosController::class, 'consultaProduto'])->name('consultaProduto');
    Route::get('/meusProdutos', [ProdutosController::class, 'meusProdutos'])->name('meusProdutos');
    Route::post('/AlteraStatusProduto', [ProdutosController::class, 'AlteraStatusProduto'])->name('AlteraStatusProduto');
    Route::delete('/ExcluiProduto', [ProdutosController::class, 'ExcluiProduto'])->name('ExcluiProduto');
    Route::post('/EditaProduto', [ProdutosController::class, 'EditaProduto'])->name('EditaProduto');
    // Produto indisponivel
    Route::get('/produtoIndisponivel', function(){
    return view('produtos/produtoIndisponivel');
    });
});

// ProdutosViews
Route::get('/adicionar',function(){
    if (session('sessionHash') == null){
        return view('login');
    }else{
        return view('produtos/adicionaProdutos');
    };
})->name('adicionaProdutos');

Route::get('/produtoInfo', function () {
    return view('produtos/produtoInfo');
})->name('produtoInfo');

// UsuáriosControllers
Route::prefix('usuarios')->group(function () {
    Route::post('/adicionarUser', [UserController::class, 'adiciona'])->name('adicionaUser');
    Route::post('/EditaUser', [UserController::class, 'editaUser'])->name('editaUser');
    Route::get('/consultar', [UserController::class, 'consulta'])->name('consultaUser');
    Route::delete('/excluir', [UserController::class, 'exclui'])->name('excluirUser');
});
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

