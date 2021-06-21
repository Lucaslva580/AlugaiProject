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
        ->select('products.*', 'users.email','users.cidade','users.estado','users.celular','users.sysactive', 'categories.categoria')
        ->where('users.sysactive','=','1')
        ->where('products.sys_active','=','1')
        ->orderByDesc('products.created_at')
        ->paginate(6);
          return view('produtos/PesquisaProdutos', compact('produtos'));
    }

    public function excluir($UserID, $ProdutoID){
        echo 'Usuario: '.$UserID.' Produto:'.$ProdutoID;
    }
    
    public function consultaProduto(Request $request){
        $id = $request->idProduto;
        $result = DB::table('products')
        ->leftJoin('users', 'users.id', '=', 'products.userId')
        ->leftjoin('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'users.email','users.cidade','users.estado','users.celular','users.sysactive','users.nome', 'categories.categoria')
        ->where('users.sysactive','=','1')
        ->where('products.sys_active','=','1')
        ->where('products.id','=',$id)
        ->get();

        return view('produtos/produtoInfo',['result'=>$result]);
    }

    public function meusProdutos(){
            if (session('sessionHash') == null){
                return view('login');
            }else{
                $sessionID=session('id');
                $dadosprodutos = DB::select(" SELECT p.*, c.categoria as categoriaNome,(select date_format(p.updated_at, '%d/%c/%y')) as desde from products p left join categories c on p.category=c.id where p.userId=$sessionID ");
                $dadoscategorias = DB::select("SELECT c.id as categoriaID, c.categoria as categoria from categories c");
                return view('produtos/meusProdutos', compact('dadosprodutos'), compact('dadoscategorias'));
            }
    }

}
