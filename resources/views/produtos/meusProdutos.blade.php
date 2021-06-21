@extends('layouts.adminComHeader')

@section('title', 'Alugaí')

@section('content')
  <div class="contentPage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Meu Produtos</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="">
      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 10%">
                      Imagem
                    </th>
                    <th style="width: 13%">
                        Nome do Produto
                    </th>
                    <th style="width: 13%">
                        Categoria
                    </th>
                    <th style="width: 13%">
                        Valor
                    </th>
                    <th style="width: 13%">
                        Descrição
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach ($dadosprodutos as $dadoproduto)
                <tr>
                    <td>
                      <input type="file" class="form-control" name="imagens" aria-label="file example" required multiple>
                    </td>
                    <td>
                          <input class="input{{$dadoproduto->id}}" value="{{$dadoproduto->name}}" type="text">
                        <br/>
                        <small>
                            Ultima atualização {{$dadoproduto->desde}}
                        </small>
                    </td>
                    <td>
                      <select class="input{{$dadoproduto->id}}" name="categoria" id="categoria">
                        @foreach ($dadoscategorias as $dadocategoria)
                        <option value="{{$dadocategoria->categoriaID}}">{{$dadocategoria->categoria}}</option>
                        @endforeach
                        <option selected value="{{$dadoproduto->category}}">{{$dadoproduto->categoriaNome}}</option>
                      </select>
                    </td>
                    <td>
                      R$:<input class="input{{$dadoproduto->id}}" value={{$dadoproduto->product_value}} type="number">
                    </td>
                    <td class="project_progress">
                       <input value="{{$dadoproduto->description}}" type="text">
                    </td>
                    <td class="project-state">
                      @if ($dadoproduto->sys_active == 1)
                        <span class="badge badge-success">Ativo</span>
                        @else
                        <span class="badge badge-danger">Inativo</span>
                      @endif
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" target="blank" href="consultaProduto?idProduto={{$dadoproduto->id}}">
                            <i class="fas fa-folder">
                            </i>
                            Ver Produto
                        </a>
                        <a class="btn btn-info btn-sm editar" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>
                        <a class="btn btn-info btn-sm salvar" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Salvar
                        </a>
                        <a class="btn btn-info btn-sm cancelar" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Cancelar
                        </a>
                        @if ($dadoproduto->sys_active == 1)
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Desativar
                        </a>
                        @else
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-check">
                            </i>
                            Ativar
                        </a>
                        @endif
                    </td>
                </tr>
            @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    var dadosprodutos = @JSON($dadosprodutos);
    console.log(dadosprodutos)
      $(document).ready(function() {
        $('input').prop('disabled', true);
        $('select').prop('disabled', true);
        $('.salvar').hide();
        $('.cancelar').hide();


        $('.editar').click(function() {
            $('input').prop('disabled', false);
            $('select').prop('disabled', false);
            $(".salvar").show();
            $('.cancelar').show();
            $('.editar').hide();
        });

        $('.cancelar').click(function() {
            $('input').prop('disabled', true);
            $('select').prop('disabled', true);
            $('.salvar').hide();
            $('.cancelar').hide();
            $('.editar').show();
        });
      });


  </script>
@endsection