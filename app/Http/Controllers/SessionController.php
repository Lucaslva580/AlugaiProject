<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function SeLogado(Request $request){
        if (session()->get('sessao') != ""){
            echo "<script language='javascript' type='text/javascript'> window.location
            .href='/';</script>";
          }  else {
            echo"<script language='javascript' type='text/javascript'>
                    alert('Você precisa Logar primeiro');window.location
                    .href='login';</script>";
          }
    }

    public function desloga(){
        if (session()->get('sessao') != ""){
            session()->forget('sessao');
            return view('login');
        }  else {
            echo"<script language='javascript' type='text/javascript'>
              return view('login');
                    alert('Você precisa Logar primeiro');window.location
                    .href='login';</script>";
          }
    }
}
