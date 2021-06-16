@extends('layouts.semHeader')

@section('title', 'Alugaí')

@section('content')

<div class="container">
    <div id="card" class="card animated fadeIn w-50" style="width: 18rem">
    <div class="row justify-content-center text-center  style="height: 100px">
            <div class="fa-5x" style="margin-bottom: 0%">
                <i class="fas fa-check-circle" style="color:green"></i>
            </div>

            <div class="card-body" style="margin-top: -2rem">
                <div id='lower-side'>
                    <p id="message" class="card-text">Seu produto foi cadastrado com sucesso.</p>
                    <a href="{{ route('lista') }}" id="contBtn">Ver Produtos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection