<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request){
        $dados = $request ->all();

        $NomeProduto = $dados['NomeProduto'];
        $categoria = $dados['categoria'];
        $UF = $dados['UF'];

        $dados = [
            'NomeProduto'=>$NomeProduto::all(),
            'categoria'=>$categoria::all(),
            'UF'=>$UF
        ];

        return view('produtos', $dados);
    }

    public function excluir($UserID, $ProdutoID){
        echo 'Usuario: '.$UserID.' Produto:'.$ProdutoID;
    }
}
