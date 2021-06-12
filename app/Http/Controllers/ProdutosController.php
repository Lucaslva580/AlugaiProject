<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class ProdutosController extends Controller
{
    public function adicionar(Request $request){
        $path = $request->file('imagens')->store('files');  
        $dados = $request->all();

        $data = [
            'userId' => session('id'),
            'name' => $dados['nomeProduto'],
            'category' => $dados['categoriaProduto'],
            'product_value' => $dados['valorProduto'],
            'description' => $dados['descricaoProduto'],
            'image' => $path,
        ];

        Product::create($data);

        echo"<script language='javascript' type='text/javascript'>
            alert('Cadastro realizado');</script>";

        return view('produtos/PesquisaProdutos');
    }

    public function excluir($UserID, $ProdutoID){
        echo 'Usuario: '.$UserID.' Produto:'.$ProdutoID;
    }
}
