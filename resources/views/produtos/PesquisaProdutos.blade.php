@extends('layouts.adminComHeader')

@section('title', 'Alugaí')

@section('content')
      <div class="card-header">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            {{$produtos->links('pagination::bootstrap-4')}}
          </ul>
        </nav>
      </div>
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
          @if (isset($produtos))
            @foreach ($produtos as $produto)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  {{$produto->categoria}}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{$produto->name}}</b></h2>
                      <p class="text-muted text-sm"><b>Descrição: </b>{{$produto->description}}</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Localização: {{$produto->estado}}, {{$produto->cidade}} </li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-at"></i></span> Email:{{' '.$produto->email}}</li>
                      </ul>
                      <p class="text-muted text-sm"><b>Valor: </b> R$ {{' '.$produto->product_value}}</p>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{ asset("storage/".$produto->image) }}" alt="image-product" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href={{str_replace(' ','',"https://api.whatsapp.com/send?phone=55".$produto->celular)}} class="btn btn-sm bg-teal" target="_blank">
                      <i class="fas fa-comments"></i>
                    </a>
                    <form id="verProduto{{$produto->id}}" action={{ route('consultaProduto') }} method="get" hidden>
                      <input name="idProduto" value={{$produto->id}} type="text">
                    </form>
                      <button type="submit" form="verProduto{{$produto->id}}" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> Ver Produto
                      </button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          @else
              Recarregue a página para visualizar a lista de produtos atualizados
          @endif
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              {{$produtos->links('pagination::bootstrap-4')}}
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

@endsection