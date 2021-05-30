<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function adiciona($name, $email, $senha ){
        // dd($email, $senha);
        // $dados = $request ->all();
        // $UserID = $dados['UserID'];
        // $ProdutoID = $dados['ProdutoID'];
        DB::insert('insert into users (name, email, password) values (":name", ":email" , ":senha" ) ', ['name' => $name,'email'=> $email, 'senha' => $senha]);
        print_r("Adicionado");
        // DB::insert('select * from users where email = :email and password = :senha', ['email' => $email, 'senha'=>$senha]);

        // $dados = [
        //     'NomeProduto'=>$NomeProduto::all(),
        //     'categoria'=>$categoria::all(),
        //     'UF'=>$UF
        // ];
        // return view('produtos', $dados);
    }

    public function excluir($UserID, $ProdutoID){
        echo 'Usuario: '.$UserID.' Produto:'.$ProdutoID;
    }
}
