@extends('layouts.adminComHeader')

@section('title', 'Alugaí')

@section('content')

<div class="content">
  <div class="row justify-content-center divCard">
    <div class="card text-dark mb-9 col-9" id="cardProdutos">
      <div id="title">
        <h1 class="text-center" style="margin-top:2rem"> Cadastro de Produtos </h1>
      </div>
      <form id="formProduto" action="{{ route('adicionar') }}" method="POST" enctype="multipart/form-data" class="was-validated">
        @csrf
        <div class="row">
          <div class="col">
            <div class="row">
              <div class="col-md-10 inputCadastro">
                <label for="nomeProduto" class="form-label">Nome do produto</label>
                <input type="text" class="form-control is-valid" id="nomeProduto" name="nomeProduto" required>
                <div class="invalid-feedback">Coloque o nome do seu produto</div>
              </div>
            </div>
            <div class="row">
              <div class="row">
                <div class="col-md-10 inputCadastro">
                  <label for="categoriaProduto" class="form-label">Categoria</label>
                  <?php
                  use Illuminate\Support\Facades\DB;
                  $Categories = DB::table('categories')->get('*')->sortBy('categoria');
                  ?>
                  <select name="categoriaProduto" id="categoriaProduto" class="form-select" required aria-label="select example">
                    <option value="">Selecione</option>
                    @foreach($Categories as $categorie)
                    <option value='{{$categorie->id}}'>{{$categorie->categoria}}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback">Escolha a categoria do seu produto</div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 inputCadastro">
                  <label for="descricaoProduto" class="form-label">Descrição do seu produto</label>
                  <textarea type="text" class="form-control is-valid" id="descricaoProduto" name="descricaoProduto" placeholder="Descreva com a máximo de detalhes sobre o seu produto" form="formProduto" required></textarea>
                  <div class="invalid-feedback">Descreva seu produto</div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 inputCadastro">
                    <label for="valorProduto" class="form-label">Valor(diária)</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" class="form-control is-valid valorProduto" id="valorProduto" name="valorProduto" placeholder="00,00" form="formProduto" required>
                    <div class="invalid-feedback">Recomendamos que a diária seja aproxidamente o valor do seu produto divido por 60</div>
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col" style="align-self: center;">
            <div class="mb-3 inputCadastroUpload">
              <label for="formFileMultiple" class="form-label">Selecione as fotos do seu produto</label>
              <input type="file" class="form-control" name="imagens" aria-label="file example" required multiple>
              <div class="invalid-feedback">Insira um arquivo de imagem válido</div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary botaoCadastrar" type="submit">Cadastrar produto</button>
            </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>

<script type="text/javascript">
  $('.valorProduto').mask('000.000.000.000.000,00', {
    reverse: true
  });
</script>

@endsection