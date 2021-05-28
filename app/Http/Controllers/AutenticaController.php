<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AutenticaController extends Controller
{
    public function index(Request $request){
        //option 1
        // $dados = $request ->all();

        $dados = [
            "email" => $email = $request->input('email'),
            "senha" => $senha = $request->input('senha'),
            "entrar" => $entrar = $request->Entrar,
        ];
        if (isset($entrar)) {
        $results = DB::select('select * from users where email = :email and password = :senha', ['email' => $email, 'senha'=>$senha]);
        if (empty($results)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login';</script>";
        }else{
        // Hash::make()
        // Session::put('usuario', ['session' => $senha]);
        // setcookie("login",$email);
        // $usuario = Session::get('usuario');
        return view('produtos', ['dados'=>$dados]);
    }
}
}
}
// return view('/autentica')->with('dados', $dados);
?>