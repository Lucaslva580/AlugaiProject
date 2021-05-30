@extends('layouts.main')

@section('title', 'Cadastroalugai')

@section('content')

<button onclick="window.location.href='/login'"><i class="fas fa-arrow-left"></i></i></button>
<link href="{{ asset('css/cadastroManual.css') }}" rel="stylesheet" type="text/css">

<body style="background-color:#1b98e0">
  <div class="container">
    <div class="row justify-content-center">
      <form style="margin-bottom:2rem;" class="row g-3 col-10" method="post" action="/usuarios/adicionar" id="form">
      @csrf

        <!-- Dados de endereço -->


        <!-- Dados de Cadastro -->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
          <div class="carousel-indicators" style="position:fixed; margin-bottom:20rem">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="card text-dark mb-9 col-9" id="cardCadastro">
                  <h2 class="text-center">Dados Pessoais</h2>
                  <div class="col" style="margin:3rem">
                    <div class="row">
                      <div class="col">
                        <label for="inputName" class="form-label">Nome*</label>
                        <input type="text" class="form-control" placeholder="Nome completo" id="inputName" name="nome"  required>
                      </div>
                    </div>
                    <div class=row>
                      <div class="col-md-6">
                        <label for="inputTel" class="form-label">Telefone/Celular*</label>
                        <input type="phone" class="form-control" id="inputTel" name="telefoneCelular" required>
                      </div>
                      <div class="col-md-6">
                        <label for="inputCPF" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="inputCPF" name="cpf" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label for="inputRG" class="form-label">RG</label>
                        <input type="text" class="form-control" id="inputRG" name="rg" required>
                      </div>
                      <div class="col-md-6">
                        <label for="inputDate" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="inputDate" name="dataNascimento" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row justify-content-center">
                <div class="card text-dark mb-9 col-9 id="cardEndereco">
                  <h2 class="text-center">Dados de endereço</h2>
                  <div class="col d-flex justify-content-center">
                    <div class="row g-10" style="margin:3rem">
                      <div class="col-10">
                        <label for="inputRua" class="form-label">Rua</label>
                        <input type="text" class="form-control" id="inputRua" placeholder="Rua" name="rua" required>
                      </div>
                      <div class="col-2">
                        <label for="inputNumero" class="form-label">Número</label>
                        <input type="number" min="0" class="form-control" id="inputNumero" name="numero">
                      </div>
                      <div class="col-md-6">
                        <label for="inputBairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="inputBairro" name="bairro" required>
                      </div>
                      <div class="col-md-6">
                        <label for="inputCidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="inputCidade" name="cidade" required>
                      </div>
                      <div class="col-md-2">
                        <label for="inputState" class="form-label" name="estado">UF</label>
                        <?php

                        use Illuminate\Support\Facades\DB;

                        $Estados = DB::table('states')->get('UF')->sortBy('UF');
                        ?>
                        <select id="inputState" class="form-select" name="estado">
                        @foreach($Estados as $Estado) {
                        "<option value='{{$Estado->UF}}'>{{$Estado->UF}}</option>";
                        }
                        @endforeach
                        </select>
                      </div>
                      <div class="col-md-5">
                        <label for="inputCEP" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="inputZip" name="cep" required>
                      </div>
                      <div class="col-md-12">
                        <label for="inputComplemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="inputComplemento" name="complemento">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="card text-dark mb-9 col-9" id="cardEndereco">
                  <h2 class="text-center">Dados de cadastro</h2>
                  <div class="col" style="margin:4rem">
                    <div class="row">
                      <div class="col-md-10">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" required>
                      </div>
                    </div>
                    <div class="row">
                        <label for="inputPassword" class="form-label">Senha</label>
                        <div class="col d-flex justify-content-center">
                          <div class="col-md-8 text-center" style="margin-left:-7rem">
                            <input type="password" class="form-control" id="inputPassword" name="password" required>
                          </div>
                          <div class="col-md-2 text-center" >
                            <img id="olho" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABDUlEQVQ4jd2SvW3DMBBGbwQVKlyo4BGC4FKFS4+TATKCNxAggkeoSpHSRQbwAB7AA7hQoUKFLH6E2qQQHfgHdpo0yQHX8T3exyPR/ytlQ8kOhgV7FvSx9+xglA3lM3DBgh0LPn/onbJhcQ0bv2SHlgVgQa/suFHVkCg7bm5gzB2OyvjlDFdDcoa19etZMN8Qp7oUDPEM2KFV1ZAQO2zPMBERO7Ra4JQNpRa4K4FDS0R0IdneCbQLb4/zh/c7QdH4NL40tPXrovFpjHQr6PJ6yr5hQV80PiUiIm1OKxZ0LICS8TWvpyyOf2DBQQtcXk8Zi3+JcKfNafVsjZ0WfGgJlZZQxZjdwzX+ykf6u/UF0Fwo5Apfcq8AAAAASUVORK5CYII=" />
                          </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                      <label for="inputConfirm" class="form-label">Confirmar senha</label>
                      <input type="password" class="form-control" id="inputConfirm" name="confirma" required>
                    </div>
                    <div class="col-12 text-center" style="margin-top:3rem">
                      <button id="submit-forms" type="submit" class="btn btn-primary center ">Finalizar cadastro</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

<?php ?>

<script>
  var inputPassword = $('#inputPassword');
  var olho = $("#olho");

  olho.mousedown(function() {
    senha.attr("type", "text");
  });

  olho.mouseup(function() {
    senha.attr("type", "password");
  });

  $("#olho").mouseout(function() {
    $("#inputPassword").attr("type", "password");
  });

  $("#inputNumero").focusout(function() {
    var valor = $("#inputNumero").val();
    if (valor < 0) {
      $("#inputNumero").val("");
    }
  });

  $("#inputConfirm").focusout(function(){
    var senha = $("#inputPassword").val();
    var confirmacao = $("#inputConfirm").val();
    if (senha != confirmacao){
      alert("Confirmação diferente da senha");
      $("#inputConfirm").val("");
    }
  })
</script>

@endsection