<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutenticaController extends Controller
{
    public function index(Request $request)
    {
        //option 1
        // $dados = $request ->all();

        $dados = [
            "email" => $email = $request->input('email'),
            "senha" => $senha = $request->input('password'),
            "entrar" => $entrar = $request->Entrar,
        ];
        if (isset($entrar)) {
            $results = DB::select('select * from users where email = :email and password = :senha and sysactive=1', ['email' => $email, 'senha' => $senha]);
            if (DB::table('users')->where('email', $email)->where('password', $senha)->doesntExist()) {
                echo "<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login';</script>";
            } else {
                $UserID = $results[0]->id;
                $nome = $results[0]->nome;
                session(['id' => $UserID, 'userName' => $nome, 'sessionHash' => $UserID . $email]);

                $produtos = DB::table('products')
                    ->leftJoin('users', 'users.id', '=', 'products.userId')
                    ->leftjoin('categories', 'categories.id', '=', 'products.category')
                    ->select('products.*', 'users.*', 'categories.categoria')
                    ->where('products.sys_active', '=', '1')
                    ->orderByDesc('products.created_at')
                    ->paginate(6);

                if (session('sessionHash') !== null) {
                    return view('produtos/PesquisaProdutos', compact('produtos'));
                } else {
                    return view('login');
                }
            }
        }
    }
}
