<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;    
use App\Http\Controllers\AutenticaController;    
use App\Http\Controllers\ProdutosController;    

// Route::get('/', 'HomeController@index');
Route::get('/', [HomeController::class, 'index']);

Route::get('/login2', function () {
    return view('login2');
});

Route::post('/autentica', [AutenticaController::class, 'index']);
Route::get('/autentica', [AutenticaController::class, 'index']);

Route::get('/produtos/excluir/{userID}/{ProdutoID}', [ProdutosController::class, 'excluir']);
Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/produtos', [ProdutosController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
