<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\ProdutosService;

class ProdutosController extends Controller
{
    public function adicionar(Request $request){
        $path = $request->file('imagens')->store('files');  
        $dados = $request->all();

        ProdutosService::insertProduto($dados, $path);

        return view('cadastros/cadastroProdutoFinalizado');
    }
    
    public function index(){
        $produtos = ProdutosService::getProdutos();
          return view('produtos/PesquisaProdutos', compact('produtos'));
    }

    public function listaBusca(Request $request){
        $busca = $request->busca;
        $produtos = DB::table('products')
        ->leftJoin('users', 'users.id', '=', 'products.userId')
        ->leftjoin('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'users.email','users.cidade','users.estado','users.celular','users.sysactive', 'categories.categoria')
        ->where('users.sysactive','=','1')
        ->where('products.name','LIKE', '%'.$busca.'%')
        ->where('products.sys_active','=','1')
        ->orderByDesc('products.created_at')
        ->paginate(6);
          return view('produtos/PesquisaProdutos', compact('produtos'));
    }

    public function AlteraStatusProduto(Request $request){
        $id = $request->id;
        $status = $request->status;
        $dadosprodutos= [
            'sys_active' => $status,
        ];

        Product::where('id', $id)
        ->update($dadosprodutos);
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

        if ( !$result->count() )
        {
            return view('produtos/produtoIndisponivel');
        }else{
            return view('produtos/produtoInfo',['result'=> $result]);
        }
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

    public function excluiProduto(Request $request){
        $productId = $request->id;
        DB::delete('delete from products where id= :productId' , ['productId' => $productId]);
    }

    public function EditaProduto(Request $request){
        $dados = $request->all();
        $valorTratado = str_replace(',','.',$dados['valorProduto']);
        if (isset($dados['alugado'])) {
            $alugado = 0;
        } else {
            $alugado = 1;
        }
        $data = [
            'id' => $dados['idProduto'],
            'name' => $dados['nomeProduto'],
            'category' => $dados['categoriaProduto'],
            'product_value' => $valorTratado,
            'description' => $dados['descricaoProduto'],
            'alugado' => $alugado,
        ];

        Product::where('id', $dados['idProduto'])
        ->update($data);

        $sessionID=session('id');
        $dadosprodutos = DB::select(" SELECT p.*, c.categoria as categoriaNome,(select date_format(p.updated_at, '%d/%c/%y')) as desde from products p left join categories c on p.category=c.id where p.userId=$sessionID ");
        $dadoscategorias = DB::select("SELECT c.id as categoriaID, c.categoria as categoria from categories c");
        return view('produtos/meusProdutos', compact('dadosprodutos'), compact('dadoscategorias'));
    }

}
