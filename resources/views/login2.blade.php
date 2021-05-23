<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="{{ asset('site/jquery.js') }}"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@700&family=Pattaya&family=Yellowtail&display=swap" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('site/boostrap.css') }}" rel="stylesheet" type="text/css">
  <script src="{{ asset('site/bootstrap.js') }}"></script>
  <script src="https://kit.fontawesome.com/c1066ac0af.js" crossorigin="anonymous"></script>
  <title>Login de usuário</title>
</head>

<body style="background-color:#1b98e0">
  <!-- <body style="background-color:white"> -->
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
          <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Esqueceu sua senha?') }}
          </a>
        @endif

    </div>
  </div>
  </div>
  </form>

  <div class="footer">
    <p></p>
  </div>
</body>

</html>