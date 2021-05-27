<!-- <!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="{{ asset('css/cadastroManual.css') }}" rel="stylesheet" type="text/css">
  <title>Document</title>
</head> -->

@extends('layouts.main')

@section('title', 'Alugaí')

@section('content')

<body style="background-color:#1b98e0">
  <div class="container">
  <div class=" row justify-content-center">
    <div style="margin:4rem; border-radius:2rem" class="card text-dark bg-info mb-8 col-8" id="cardCadastro">
      <h1 class="col d-flex justify-content-center" style="margin-top:2rem">Dados Pessoais</h1>
      <div style="margin:3rem" class="col d-flex justify-content-center">
        <form style="margin-bottom:2rem;" class="row g-3 col-10" method="POST" action="cadastro.blade.php">
          <div class="row g-3">
            <div class="col">
              <label for="inputName" class="form-label">Nome*</label>
              <input type="text" class="form-control" placeholder="Nome completo" id="inputName">
            </div>
          </div>
          <div class="col-md-6">
            <label for="inputTel" class="form-label">Telefone/Celular*</label>
            <input type="phone" class="form-control" id="inputTel">
          </div>
          <div class="col-md-6">
            <label for="inputCPF" class="form-label">CPF</label>
            <input type="text" class="form-control" id="inputCPF">
          </div>
          <div class="col-md-6">
            <label for="inputRG" class="form-label">RG</label>
            <input type="text" class="form-control" id="inputRG">
          </div>
          <div class="col-md-6">
            <label for="inputDate" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="inputDate">
          </div>
      </div>
      </form>
    </div>
    </div>
    <!-- Dados de endereço -->
    <div class="row justify-content-center">
      <div style="margin:3rem; border-radius:2rem" class="card text-dark bg-info mb-10 col-8" id="cardEndereco">
        <h1 class="col d-flex justify-content-center">Dados de endereço</h1>
        <div class="col d-flex justify-content-center">
          <form style="margin-bottom:2rem" class="row g-3 col-8" method="POST" action="cadastro.blade.php">
            <div class="row g-3">
              <div class="col-10">
                <label for="inputRua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="inputRua" placeholder="Rua">
              </div>
              <div class="col-2">
                <label for="inputNumero" class="form-label">Número</label>
                <input type="number" min="0" class="form-control" id="inputNumero">
              </div>
              <div class="col-md-6">
                <label for="inputBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="inputBairro">
              </div>
              <div class="col-md-6">
                <label for="inputCidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputBairro">
              </div>
              <div class="col-md-2">
              <?php
              use Illuminate\Support\Facades\DB;
              $Estados = DB::select('select UF from states');
              ?>
                <label for="inputState" class="form-label">UF</label>
                <select id="inputState" class="form-select">
                    <option selected><?php print_r($Estados[0]) ?></option>
                </select>
              </div>
              <div class="col-md-5">
                <label for="inputCEP" class="form-label">CEP</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
              <div class="col-md-12">
                <label for="inputCompl" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="inputCompl">
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary center ">Finalizar cadastro</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div style="margin:3rem; border-radius:2rem" class="card text-dark bg-info mb-10 col-8" id="cardEndereco">
        <h1 class="col d-flex justify-content-center">Dados de cadastro</h1>
        <div class="col d-flex justify-content-center">
          <form style="margin-bottom:2rem" class="row g-3 col-8" method="POST" action="cadastro.blade.php">
          <div class="col-md-8">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail">
          </div>
          <div class="col-md-8">
            <label for="inputSenha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <img id="olho" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABDUlEQVQ4jd2SvW3DMBBGbwQVKlyo4BGC4FKFS4+TATKCNxAggkeoSpHSRQbwAB7AA7hQoUKFLH6E2qQQHfgHdpo0yQHX8T3exyPR/ytlQ8kOhgV7FvSx9+xglA3lM3DBgh0LPn/onbJhcQ0bv2SHlgVgQa/suFHVkCg7bm5gzB2OyvjlDFdDcoa19etZMN8Qp7oUDPEM2KFV1ZAQO2zPMBERO7Ra4JQNpRa4K4FDS0R0IdneCbQLb4/zh/c7QdH4NL40tPXrovFpjHQr6PJ6yr5hQV80PiUiIm1OKxZ0LICS8TWvpyyOf2DBQQtcXk8Zi3+JcKfNafVsjZ0WfGgJlZZQxZjdwzX+ykf6u/UF0Fwo5Apfcq8AAAAASUVORK5CYII="/>
          </div>
          <div class="col-md-8">
            <label for="inputConfirma" class="form-label">Confirmar senha</label>
            <input type="password" class="form-control" id="senha">
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php ?>

  <script>
    var senha = $('#senha');
    var olho= $("#olho");

olho.mousedown(function() {
  senha.attr("type", "text");
});

olho.mouseup(function() {
  senha.attr("type", "password");
});
// para evitar o problema de arrastar a imagem e a senha continuar exposta, 
//citada pelo nosso amigo nos comentários
$( "#olho" ).mouseout(function() { 
  $("#senha").attr("type", "password");
});
  </script>

@endsection