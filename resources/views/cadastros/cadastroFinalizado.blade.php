@extends('layouts.main')

@section('title', 'Alugaí')

@section('content')

<div class="container">
    <div class="row justify-content-center text-center " style="height: 100px">
        <div id="card" class="card animated fadeIn w-50" style="margin: 60px">
            <div id="upper-side">
                <i class="fa fa-check"></i>
                <h5 class="card-title">Seja bem vindo à comunidade Alugaí</h5>
            </div>
            <div class="card-body">
                <div id='lower-side'>
                    <p id="message" class="card-text">Cadastro realizado com sucesso. Seja bem vindo à comunidade Alugaí!</p>
                    <a href="http://127.0.0.1:8001/login" id="contBtn">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection