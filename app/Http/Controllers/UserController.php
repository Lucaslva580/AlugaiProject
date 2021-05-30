<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function adiciona(Request $request){
        $dados = $request ->all();
        $ExistEmail = User::where('email', $dados['email']);
        $ExistCPF = User::where('cpf', $dados['cpf']);
        $ExistRG = User::where('rg', $dados['rg']);
        if($ExistEmail->exists()){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse email já foi registrado, use um email diferente ou recupere sua senha');</script>";
            return view('cadastros/cadastroManual');
        }

        if($ExistCPF->exists()){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse CPF já foi registrado');</script>";
            return view('cadastros/cadastroManual');
        }

        if($ExistRG->exists()){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse RG já foi registrado');</script>";
            return view('cadastros/cadastroManual');
        }
        $data = [
                    'nome' => $dados['nome'], 
                    'cpf' => $dados['cpf'],
                    'rg' => $dados['rg'],
                    'dataNascimento' => $dados['dataNascimento'],
                    'telefoneCelular' => $dados['telefoneCelular'],
                    'rua' => $dados['rua'],
                    'numero' => $dados['numero'],
                    'complemento' => $dados['complemento'],
                    'bairro' => $dados['bairro'],
                    'cidade' => $dados['cidade'],
                    'estado' => $dados['estado'],
                    'email' => $dados['email'],
                    'password' => $dados['password'],
        ];
        User::create($data);

        echo "<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso');</script>";
            return view('login');
    }

    public function consulta($userId){

        $results = DB::table('user')->find($userId);
        print_r($results);

        // return view('produtos', $results);
    }

    public function Exclui($userId){

        DB::delete('delete * from users where id= :userId' , ['userId' => $userId]);
        print_r("deletado");

        // return view('produtos', $results);
    }

}
