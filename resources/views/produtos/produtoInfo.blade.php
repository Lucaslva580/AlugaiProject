@extends('layouts.adminComHeader')

@section('title', 'Alugaí')

@section('content')
  <div class="contentPage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Anúncio de {{$result[0]->nome}}</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img id="imagPainel" src={{ asset("storage/".$result[0]->image) }} class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$result[0]->name}}</h3>
              <p>{{$result[0]->description}}</p>

              <hr>
              <h4 class="mt-3">Número de dias pretendido</h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <div class="slider-blue">
                  slider(talvez)
                </div>
              </div>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  R$ {{$result[0]->product_value}} <small>(diária)</small>
                </h2>
              </div>

              <div class="mt-4">
                <a href={{str_replace(' ','',"https://api.whatsapp.com/send?phone=55".$result[0]->celular)}} target="_blank">
                  <div class="btn btn-success btn-lg btn-flat">
                    <i class="fas fa-comments" aria-hidden="true"></i>
                  </div>
                </a>
                <div class="btn btn-primary btn-lg btn-flat">
                  <a href="mailto:{{$result[0]->email}}?subject=Tenho%20interesse%20de%20alugar%20seu/sua%20{{$result[0]->name}}">
                    <i style="color: white" class="fas fa-envelope"></i>
                  </a>
              </div>

                <button id="listaAdd" onclick="alert('adicionado à lista de desejos')">
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-heart fa-lg mr-2"></i>
                    Adicionar à lista de desejos
                  </div>
                </button> 
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comentários</a>
                
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="post">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src={{ asset('storage/files/22045818_337621173365116_4792919699903294553_n.jpg') }} alt="user image">
                  <span class="username">
                    <a href="#">Marcus Robalino</a>
                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                  </span>
                  <span class="description">21/04/2021 - 7:30 PM</span>
                </div>
                <!-- /.user-block -->
                <p>
                  Ótimo produto, muito seguro para as crianças. E o rapaz que veio entregar foi super educado e solícito, achei ele um gato.
                </p>

                <p>
                  <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                </p>
              </div>
              <!-- /.post -->

              <!-- Post -->
              <div class="post clearfix">
                <div class="user-block">
                  <img class="img-circle img-bordered-sm" src={{ asset('storage/files/diana.jpg') }} alt="User Image">
                  <span class="username">
                    <a href="#">Diana Trump</a>
                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                  </span>
                  <span class="description">17/06/2021 - 11:18 AM</span>
                </div>
                <!-- /.user-block -->
                <p>
                  O produto é bom, mas acho que poderia ser um pouco mais barato, pelo menos o transporte compensa.
                </p>

                <p>
                  <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>Like</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  });

</script>

@endsection