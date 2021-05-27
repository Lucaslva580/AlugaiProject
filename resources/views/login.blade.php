@extends('layouts.main')

@section('title', 'Alugaí')

@section('content')

<link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">

<body style="background-color:#1b98e0">
  <h1>Alugaí</h1>
  <div id=modalLogin>
    <div id="form">
      <form method="post" action="/autentica">
      @csrf
        <label class="fonte"><i class="far fa-envelope"></i> Login:</label></br><input class= "@error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" id="login" required autocomplete="email" autofocus><br><br>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        <!-- <label class="fonte"><i class="fas fa-lock"></i> Senha:</label></br><input class= "@error('password') is-invalid @enderror" type="password" name="senha" id="senha" required autocomplete="current-password"><br><br> -->
        <label class="fonte"><i class="fas fa-lock"></i> Senha:</label></br><input type="password" name="senha" value="{{ old('senha') }}" id="senha" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><br>
        @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
        <div class="form-group row">
          <div class="col-md-6 offset-md-4">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                  </label>
              </div>
          </div>
        </div>
        <Button class="btn btn-lg btn-success" type="submit" value="Entrar" id="entrar" name="Entrar">Entrar</Button><br>
        <a href="cadastro.html">Criar cadastro</a><br>

        @if (Route::has('password.request'))
          <a class="btn btn-link" href="">
              {{ __('Esqueceu sua senha?') }}
          </a>
        @endif

    </div>
  </div>
  </div>
  </form>

  @endsection