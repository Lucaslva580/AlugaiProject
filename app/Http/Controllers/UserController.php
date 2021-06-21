<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function adiciona(Request $request){
        $dados = $request->all();
        $ExistEmail = User::where('email', $dados['email']);
        $ExistCPF = User::where('cpf', $dados['cpf']);
        $ExistRG = User::where('rg', $dados['rg']);
        if($ExistEmail->exists()){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse email já foi registrado, use um email diferente ou recupere sua senha');</script>";
            return view('cadastros/cadastroUsuario');
        } elseif($ExistCPF->exists()){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse CPF já foi registrado');</script>";
            return view('cadastros/cadastroUsuario');
        }elseif($ExistRG->exists()){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse RG já foi registrado');</script>";
            return view('cadastros/cadastroUsuario');
        }else{
            $path = $request->file('imagens')->store('files');
            $data = [
                        'nome' => $dados['nome'], 
                        'cpf' => $dados['cpf'],
                        'rg' => $dados['rg'],
                        'dataNascimento' => $dados['dataNascimento'],
                        'telefone' => $dados['telefone'],
                        'celular' => $dados['celular'],
                        'rua' => $dados['rua'],
                        'numero' => $dados['numero'],
                        'complemento' => $dados['complemento'],
                        'bairro' => $dados['bairro'],
                        'cidade' => $dados['cidade'],
                        'estado' => $dados['estado'],
                        'CEP'=>$dados['CEP'],
                        'email' => $dados['email'],
                        'image' => $path,
                        'password' => $dados['password'],
                        'sysactive' => 1,
            ];

            User::create($data);
    
                return view('cadastros/cadastroFinalizado');
        }
    }

    public function editaUser(Request $request){
        $dados = $request->all();
            $dadosperfil = [
                'nome' => $dados['inputName'], 
                'cpf' => $dados['inputCPF'],
                'rg' => $dados['inputRG'],
                'dataNascimento' => $dados['inputDate'],
                'celular' => $dados['inputCelular'],
                'rua' => $dados['inputRua'],
                'numero' => $dados['inputNumero'],
                'complemento' => $dados['complemento'],
                'bairro' => $dados['inputBairro'],
                'cidade' => $dados['inputCidade'],
                'estado' => $dados['inputEstado'],
                'CEP'=>$dados['inputCEP'],
                'email' => $dados['inputEmail'],
                'password' => $dados['inputPassword'],
                'sysactive' => 1,
            ];

            User::where('id', session('id') )
            ->update($dadosperfil);
            echo "<script language='javascript' type='text/javascript'>
            alert('Edição concluída');</script>";

            return redirect('usuarios/consultar');
    }

    public function consulta(){
    if (session('sessionHash') == null){
        return view('login');
    }else{
        $sessionID=session('id');
        $dadosperfil = DB::select("SELECT u.*,( select count(id) from products where userId=3) as qtdprodutos,(select date_format(u.created_at, '%d/%c/%y')) as desde from users u where u.id=$sessionID");
        return view('usuarios/perfil', compact('dadosperfil'));
    }

    }

    public function Exclui(){
        DB::delete('delete from users where id= :userId' , ['userId' => session('id')]);
        session()->flush();
        return view('login');
    }

}
