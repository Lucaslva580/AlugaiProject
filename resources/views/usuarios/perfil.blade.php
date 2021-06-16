@extends('layouts.adminComHeader')

@section('title', 'Cadastroalugai')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
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
    <section class="content">
      <div class="container-fluid">
        <div class="row inputperfil">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$dadosperfil[0]->nome}}</h3>

                <p class="text-muted text-center">Na Alugaí desde 02/2021</p>

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
                        <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="settings">
                            <form class="form-horizontal">
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Nome</label>
                                            <div class="col-sm-8">
                                                <input value={{$dadosperfil[0]->nome}} type="text" class="form-control" id="inputName">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input value="{{$dadosperfil[0]->email}}" type="email" class="form-control" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-3 col-form-label">Senha</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-3 col-form-label">CPF</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                  
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">RG</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">ESTADO</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">CELULAR</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">RUA</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">NÚMERO</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">COMPLEMENTO</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row inputperfil">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">BAIRRO</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-3 col-form-label">CIDADE</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-8">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection