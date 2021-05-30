@extends('layouts.main')

@section('title', 'Alugaí')

@section('content')


<link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
<body style="background-color:#1b98e0">
  <div class="container">
    <h1 class="text-center">Alugaí</h1>
    <div class="row justify-content-center">
      <div id=modalLogin class="card text-dark mb-8 col-8">
        <div style="margin:3rem" class="col d-flex justify-content-center" id=formLogin>
          <form style="margin-bottom:2rem;" class="row g-3 col-10" method="post" action="/autentica">
            @csrf
            <div class="row g-4">
              <div class="col">
                <label class="form-label"><i class="far fa-envelope"></i> Login:</label></br>
                <input class="form-control" type="text" name="email" value="{{ old('email') }}" id="login" required autocomplete="email" placeholder="email@exemplo.com" autofocus ><br><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label class="form-label"><i class="fas fa-lock"></i> Senha:</label></br>
                <input type="password" class="form-control" value="{{ old('password') }}" id="password" name="password" required autocomplete="current-password"><br>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6 offset-md">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>
            <Button class="btn btn-lg btn-success" type="submit" value="Entrar" id="entrar" name="Entrar">Entrar</Button><br>
            <a class="btn btn-link" href="{{url ('/cadastroManual')}}">{{ __('Criar cadastro')}}</a><br>
            <a class="btn btn-link" href="">
              {{ __('Esqueceu sua senha?') }}
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endsection