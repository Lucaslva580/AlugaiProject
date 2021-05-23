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
      <form method="POST" action="produtos.blade.php">
        <label class="fonte"><i class="far fa-envelope"></i></span> Login:</label></br><input type="text" name="login" id="login"><br><br>
        <label class="fonte"><i class="fas fa-lock"></i> Senha:</label></br><input type="password" name="senha" id="senha"><br>
        <Button class="btn btn-lg btn-success" type="submit" value="Entrar" id="entrar" name="Entrar">Entrar</Button><br>

          <a href="cadastro.html">Criar cadastro</a><br>
          <a id="recupera" href="RecuperarSenha.html">Esqueceu sua senha?</a>

      </div>
    </div>
</div>
</form>
<div class="footer"><p></p></div>
</body>
</html>