@extends('layouts.adminComHeader')

@section('title', 'Cadastroalugai')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div  class="content">
      {{-- {{dd($dadosperfil)}} --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil de usuário</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section style="overflow: auto" class="content">
      <div class="container-fluid">
        <div class="row inputperfil">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid"
                       src="{{ asset("storage/".$dadosperfil[0]->image) }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$dadosperfil[0]->nome}}</h3>

                <p class="text-muted text-center">Na Alugaí desde {{$dadosperfil[0]->desde}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Produtos</b> <a class="float-right">{{$dadosperfil[0]->qtdprodutos}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Transações</b> <a class="float-right">23</a>
                  </li>
                  <li class="list-group-item">
                    <b>Comentários</b> <a class="float-right">17</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Formas de pagamento</strong>

                <p class="text-muted">
                    Dinheiro, PIX, boleto
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">{{$dadosperfil[0]->cidade}}, {{$dadosperfil[0]->estado}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Observações</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Trabalho somente com entrega em mãos.</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Categorias alugadas</strong>

                <p class="text-muted">Utensílios, ferramentas, Outros</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <button  id="editar" class="btn btn-primary active">Editar</button>
                    </ul>
                    <ul class="nav nav-pills">
                        <button  id="cancelar" class="btn btn-danger active">Cancelar</button>
                    </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="settings">
                            <form class="form-horizontal" action="{{ route('editaUser') }}" method="post">
                                @csrf
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Nome</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->nome}}" type="text" class="form-control" name="inputName" id="inputName">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->email}}" type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Senha</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->password}}" type="text" class="form-control" name="inputPassword" id="inputPassword" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputCPF" class="col-sm-3 col-form-label">CPF</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->cpf}}" type="text" class="form-control" name="inputCPF" id="inputCPF" placeholder="000.000.0000-00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                  
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputRg" class="col-sm-3 col-form-label">RG</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->rg}}" type="text" class="form-control" name="inputRG" id="inputRG" placeholder="RG">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEstado" class="col-sm-3 col-form-label">ESTADO</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->estado}}" type="text" class="form-control" id="inputEstado" name="inputEstado" placeholder="Estado de moradia atual">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputCelular" class="col-sm-3 col-form-label">CELULAR</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="{{$dadosperfil[0]->celular}}" name="inputCelular" class="form-control" id="inputCelular" placeholder="celular">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputDate" class="col-sm-3 col-form-label">DATA DE NASCIMENTO</label>
                                            <div class="col-sm-8">
                                             <input type="date" value="{{$dadosperfil[0]->dataNascimento}}" name="inputDate" class="form-control" id="inputDate" placeholder="dataNascimento">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputTelefone" class="col-sm-3 col-form-label">TELEFONE</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="{{$dadosperfil[0]->telefone}}" name="inputTelefone" class="form-control" id="inputTelefone" placeholder="telefone">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputRua" class="col-sm-3 col-form-label">RUA</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="{{$dadosperfil[0]->rua}}" name="inputRua" class="form-control" id="inputRua" placeholder="rua">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputNumero" class="col-sm-3 col-form-label">NÚMERO</label>
                                            <div class="col-sm-8">
                                                <input type="text" value="{{$dadosperfil[0]->numero}}" name="inputNumero" class="form-control" id="inputNumero" placeholder="NÚMERO">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputCompl" class="col-sm-3 col-form-label">COMPLEMENTO</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->complemento}}" name="complemento" type="text" class="form-control" id="inputCompl" placeholder="COMPLEMENTO">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputBairro" class="col-sm-3 col-form-label">BAIRRO</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->bairro}}" name="inputBairro" type="text" class="form-control" id="inputBairro" placeholder="BAIRRO">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputCidade" class="col-sm-3 col-form-label">CIDADE</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->cidade}}" type="text" name="inputCidade" class="form-control" id="inputCidade" placeholder="CIDADE">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputCEP" class="col-sm-1 col-form-label">CEP</label>
                                            <div class="col-sm-4">
                                                <input style="margin-left:3.6rem" value="{{$dadosperfil[0]->CEP}}" type="text" name="inputCEP" class="form-control" id="inputCEP" placeholder="CEP">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="form-group row button">
                                    <div class="col">
                                        <button id="salvar" type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row justify-content-md-center">
                <div class="col-md-2 ">
                    <button id="deletar" onclick="ApagaConta()" type="button" class="btn btn-block btn-outline-danger btn-lg">Apagar conta</button>
                </div>
            </div>
        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection




<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous">
</script>
<script src="https://cdnjs.com/libraries/jquery.mask"></script>
<script language='javascript' type='text/javascript'>
    $(document).ready(function() {
        $('input').prop('disabled', true);
        $('#salvar').hide();
        $('#cancelar').hide();


        $('#editar').click(function() {
            $('input').prop('disabled', false);
            $("#salvar").show();
            $('#cancelar').show();
            $('#editar').hide();
        });

        $('#cancelar').click(function() {
            $('input').prop('disabled', true);
            $('#salvar').hide();
            $('#cancelar').hide();
            $('#editar').show();
        });

        $("#inputCPF").mask("000.000.000-00");
        $("#inputRG").mask("00.000.000-0");
        $("#inputTelefone").mask("(00) 0000-0000");
        $("#inputCelular").mask("(00) 00000-0000");
        $("#inputCEP").mask("00000-000");
    });
</script>
<script language='javascript' type='text/javascript'>
    function ApagaConta(){
            if (confirm("Deletar conta? Não é possível desfazer essa ação")){
                $.ajax({
                    url: "{{ route('excluirUser') }}",
                    data:{
                        'id':'{{ session('id') }}',
                        "_token": "{{ csrf_token() }}"
                    },
                    type: 'delete',
                    success: function(result) {
                        alert("usuário removido PARA SEMPRE");
                        window.location.href="{{ route('login')}}";
                    }
                });
            }else{
                return false;
            }
        };
</script>

