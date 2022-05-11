<?php

namespace App\Services;

use App\Models\Product;

class ProdutosService
{
    public static function getProdutos()
    {
        return Product::
        leftJoin('users', 'users.id', '=', 'products.userId')
        ->leftjoin('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'users.email','users.cidade','users.estado','users.celular','users.sysactive', 'categories.categoria')
        ->where('users.sysactive','=','1')
        ->where('products.sys_active','=','1')
        ->orderByDesc('products.created_at')
        ->paginate(6);
    }
    
    public static function insertProduto(array $dados, string $path = null)
    {
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

      return Product::create($data);
    }
}