@extends('layouts.comHeader')

@section('title', 'Alugaí')

@section('content')

<h1> Produtos </h1>
<div class="content">
  <form class="was-validated">
  <div class="row" style="margin-bottom:1rem">
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">Nome do produto</label>
      <input type="text" class="form-control is-valid" id="validationServer01" required>
      <div class="invalid-feedback">Coloque o nome do seu produto</div>
    </div>
  </div>
    <div class="row" style="margin-bottom:1rem">
      <div class="col-md-4">
        <select class="form-select" required aria-label="select example">
          <option value="">Categoria</option>
          <option value="1">Ferramentas</option>
          <option value="2">Artigos de esporte</option>
          <option value="3">Brinquedos</option>
          <option value="4">Utensilios</option>
          <option value="5">Veículos</option>
        </select>
        <div class="invalid-feedback">Example invalid select feedback</div>
      </div>
    </div>
  
      <label for="validationTextarea" class="form-label">Descrição do seu produto</label>
      <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Descreva com a máximo de detalhes sobre o seu produto" required></textarea>
      <div class="invalid-feedback">
        Por favor descreva seu produto
      </div>
    </div>
  
    <div class="mb-3">
      <input type="file" class="form-control" aria-label="file example" required>
      <div class="invalid-feedback">Example invalid form file feedback</div>
    </div>
    
    <div class="mb-3">
      <button class="btn btn-primary" type="submit" disabled>Cadastrar produto</button>
    </div>
  </form>
</div>

@endsection