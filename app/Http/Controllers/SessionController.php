<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function SeLogado(Request $request){
        if (session()->get('sessao') != ""){
            //retorna para a página requisitada
          }  else {
            //retorna para o login
          }
    }

    public function desloga(){
        if (session('sessionHash')){
            session()->forget('sessionHash');
            return view('login');
        }  else {
            echo"<script language='javascript' type='text/javascript'>
            alert('Você precisa Logar primeiro');window.location
            .href='login';</script>";
            return view('login');
          }
    }
}
