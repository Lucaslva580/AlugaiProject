<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class AutenticaController extends Controller
{
    public function index(Request $request){
        //option 1
        // $dados = $request ->all();

        $dados = [
            $email = $request->input('email'),
            $senha = $request->input('senha'),
            $entrar = $request->Entrar,   
        ];
        if (isset($entrar)) {
        $results = DB::select('select * from users where email = :email and password = :senha', ['email' => $email, 'senha'=>$senha]);
        if (empty($results)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login';</script>";
        }else{
        setcookie("login",$email);
        return view('produtos', ['dados'=>$dados]);
      }
  }


        // return view('/autentica')->with('dados', $dados);
    }
}
?>