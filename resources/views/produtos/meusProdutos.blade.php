@extends('layouts.adminComHeader')

@section('title', 'Alugaí')

@section('content')
  <div class="content">
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
                      Alugado no momento?
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
              <form action="{{ route('EditaProduto') }}" method="post" id="formProduto">
                <input type="hidden" name="_token" id="token" class="input{{$dadoproduto->id}}" value="{{ csrf_token() }}">
                <tr>
                  <td>
                    <div class="form-check form-switch">
                      <input class="form-check-input input{{$dadoproduto->id}}" type="checkbox" name="alugado" id="alugado"
                      @if ($dadoproduto->alugado == 0)
                          echo checked
                      @endif
                      >
                      @if ($dadoproduto->alugado == 1)
                        <label class="form-check-label" for="flexSwitchCheckDefault">Alugado</label>
                      @else
                        <label class="form-check-label" for="flexSwitchCheckDefault">Disponível</label>
                      @endif
                    </div>
                  </td>
                  <td>
                    <input name="idProduto"  id="{{$dadoproduto->id}}" value="{{$dadoproduto->id}}" type="text" class="input{{$dadoproduto->id}}" hidden>
                    <input name="nomeProduto"  id="nomeProduto{{$dadoproduto->id}}" value="{{$dadoproduto->name}}" class="input{{$dadoproduto->id}}" type="text">
                    <br/>
                    <small>
                      Ultima atualização {{$dadoproduto->desde}}
                    </small>
                  </td>
                  <td>
                    <select name="categoriaProduto" id="categoriaProduto{{$dadoproduto->id}}" name="categoria" id="categoria">
                      @foreach ($dadoscategorias as $dadocategoria)
                      <option value="{{$dadocategoria->categoriaID}}">{{$dadocategoria->categoria}}</option>
                      @endforeach
                      <option selected value="{{$dadoproduto->category}}">{{$dadoproduto->categoriaNome}}</option>
                    </select>
                  </td>
                  <td>
                    R$:<input name="valorProduto" id="valorProduto{{$dadoproduto->id}}" value={{$dadoproduto->product_value}} type="number" class="input{{$dadoproduto->id}}">
                  </td>
                  <td>
                    <textarea name="descricaoProduto" id="descricaoProduto{{$dadoproduto->id}}" type="text">{{$dadoproduto->description}}</textarea>
                  </td>
                  <td class="project-state">
                    @if ($dadoproduto->sys_active == 1)
                    <span class="badge badge-success">Ativo</span>
                    @else
                    <span class="badge badge-danger">Inativo</span>
                    @endif
                  </td>
                  <td class="project-actions text-right">
                    <a id="ver{{$dadoproduto->id}}" class="btn btn-primary btn-sm" target="blank" href="consultaProduto?idProduto={{$dadoproduto->id}}">
                      <i class="fas fa-folder">
                      </i>
                      Ver Produto
                    </a>
                    <button type="button" id="edita{{$dadoproduto->id}}" onclick="editaProduto({{$dadoproduto->id}})" class="btn btn-info btn-sm editar">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Editar
                    </button>
                    <button type="submit" id="salva{{$dadoproduto->id}}" class="btn btn-info btn-sm salvar">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Salvar
                    </button>
                    <button type="button" id="cancela{{$dadoproduto->id}}" onclick="cancelaEdicao({{$dadoproduto->id}})" class="btn btn-primary  btn-sm cancelar" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Cancelar
                    </button>
                    @if ($dadoproduto->sys_active == 1)
                    <button type="button" onclick="statusProduto({{$dadoproduto->id}}, 0)" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash">
                      </i>
                      Desativar
                    </button>
                    @else
                    <button type="button" onclick="statusProduto({{$dadoproduto->id}}, 1)" class="btn btn-success btn-sm">
                      <i class="fas fa-check">
                      </i>
                      Ativar
                    </button>
                    @endif
                    <button type="button" id="exclui{{$dadoproduto->id}}" onclick="excluiProduto({{$dadoproduto->id}})" class="btn btn-danger btn-sm exclui ">
                      <i class="far fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              </form>
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
      $(document).ready(function() {
        $('input').prop('disabled', true);
        $('select').prop('disabled', true);
        $('textarea').prop('disabled', true);
        $('.salvar').hide();
        $('.cancelar').hide();
        $('.exclui').hide();
      });

      function editaProduto(id){
        $('.input'+id).prop('disabled', false)
        $('#nomeProduto'+id).prop('disabled', false);
        $('#categoriaProduto'+id).prop('disabled', false);
        $('#descricaoProduto'+id).prop('disabled', false);
        $('#valorProduto'+id).prop('disabled', false);
        $('#imagemProduto'+id).prop('disabled', false);
        $("#salva"+id).show();
        $('#cancela'+id).show();
        $('#edita'+id).hide();
        $('#ver'+id).hide();
        $('#exclui'+id).show();
      }

      function cancelaEdicao(id){
        $('#nomeProduto'+id).prop('disabled', true);
        $('#categoriaProduto'+id).prop('disabled', true);
        $('#descricaoProduto'+id).prop('disabled', true);
        $('#valorProduto'+id).prop('disabled', true);
        $('#imagemProduto'+id).prop('disabled', true);
        $("#salva"+id).hide();
        $('#cancela'+id).hide();
        $('#edita'+id).show();
        $('#ver'+id).show();
        $('#exclui'+id).hide();
      }

      function statusProduto(id,status){
        var msg = "Ativar produto?"
        var msgsuccess = "Ativado com sucesso!"
        if (status == 0){
          msg = "Desativar produto?"
          msgsuccess = "Desativado com sucesso!"
        }

        if (confirm(msg)){
          $.ajax({
              url: "{{ route('AlteraStatusProduto') }}",
              data:{
                  'id':id,
                  'status':status,
                  "_token": "{{ csrf_token() }}"
              },
              type: 'post',
              success: function(result) {
                  alert(msgsuccess);
                window.location.reload()
              }
          });
        }else{
            return false;
        }
      }

      function excluiProduto(id){
        if (confirm("Excluir produto? Essa ação não pode ser revertida!")){
          $.ajax({
              url: "{{ route('ExcluiProduto') }}",
              data:{
                  'id':id,
                  "_token": "{{ csrf_token() }}"
              },
              type: 'delete',
              success: function(result) {
                alert("Produto deletado!");
                window.location.reload()
              }
          });
        }else{
            return false;
        }
      }

      // $('#formProduto').submit(function(event){
      //   event.preventDefault();
      //   $.post($('#formProduto').attr('action'),
      //   $('#formProduto').serialize(),
      //   function(data){
      //     window.location.reload();
      //   });
      //   return false;
      // });

      $('.salvar').click(function(){
        $('#formProduto').attr('action', "{{ route('EditaProduto') }}")
      })

  </script>
@endsection