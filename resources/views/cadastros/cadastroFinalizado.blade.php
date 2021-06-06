@extends('layouts.semHeader')

@section('title', 'Alugaí')

@section('content')

<div class="container">
    <div id="card" class="card animated fadeIn w-50" style="width: 18rem">
    <div class="row justify-content-center text-center  style="height: 100px">
            <div id="upper-side">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
<h5 class="card-title"> Seja bem vindo(a) à comunidade Alugaí!<h5>
            </div>
            <div class="card-body">
                <div id='lower-side'>
                    <p id="message" class="card-text">Cadastro realizado com sucesso.</p>
                    <a onclick="window.location.href='/login'" id="contBtn">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection