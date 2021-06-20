<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function adicionar(Request $request){
        $path = $request->file('imagens')->store('files');  
        $dados = $request->all();

        $valorTratado = str_replace(',','.',$dados['valorProduto']);

        $data = [
            'userId' => session('id'),
            'name' => $dados['nomeProduto'],
            'category' => $dados['categoriaProduto'],
            'product_value' => $valorTratado,
            'description' => $dados['descricaoProduto'],
            'image' => $path,
            'sys_active' => 1,
        ];

        Product::create($data);

        return view('cadastros/cadastroProdutoFinalizado');

    }
    
    public function index(){

        $produtos = DB::table('products')
        ->leftJoin('users', 'users.id', '=', 'products.userId')
        ->leftjoin('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'users.*', 'categories.categoria')
        ->where('products.sys_active','=','1')
        ->orderByDesc('products.created_at')
        ->paginate(6);

          return view('produtos/PesquisaProdutos', compact('produtos'));
    }

    public function excluir($UserID, $ProdutoID){
        echo 'Usuario: '.$UserID.' Produto:'.$ProdutoID;
    }

}
