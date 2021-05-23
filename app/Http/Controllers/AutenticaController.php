<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticaController extends Controller
{
    public function index(Request $request){
        //option 1
        // $dados = $request ->all();

        $email = $request->input('email');
        $senha = $request->input('senha');

        // $dados =[
        //     'email'=>$request->input('email'),
        //     'senha'=>$request->input('senha'),
        // ];

        $data = ['email'=>$request->input('email'),
                'senha'=>$request->input('senha'),
                ];
        return view('autentica', ['email'=>$email, 'senha'=>$senha]);

        // return view('/autentica')->with('dados', $dados);
    }
}
?>