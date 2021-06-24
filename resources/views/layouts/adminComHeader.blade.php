<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="{{ asset('storage/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
  <title>@yield('title')</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@700&family=Pattaya&family=Yellowtail&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/c1066ac0af.js" crossorigin="anonymous"></script>

  <!-- Styles -->
  <script src="{{ asset('site/jquery.js') }}"></script>
  <script src="{{ asset('site/bootstrap.js') }}"></script>
  <script src="{{ asset('site/bootstrap.css') }}" rel="stylesheet" type="text/css"></script>
  <link href="{{ asset('css/cadastroProdutos.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/produtoInfo.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/perfil.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/produtoIndisponivel.css') }}" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@pnotify/core@5.2.0/dist/PNotify.min.js"></script>
  <!-- AdminLayout -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdn.rawgit.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js"></script>
  <script src="https://cdnjs.com/libraries/jquery.mask"></script>
  
  <script src="//code-sa1.jivosite.com/widget/eS3mPBjnky" async></script>

  
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
  <div class="wrapper">
    <!-- Navbar -->
    <nav style="background-color:#13293d" class="navbar navbar-expand navbar-primary navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
          @if (session('sessionHash') !== null)
          <a href="/produtos/lista" class="nav-link"><i class="fas fa-home"></i></a>
          @else
          <a href="/" class="nav-link"><i class="fas fa-home"></i></a>
          @endif
        </li>
        @if (session('sessionHash') !== null)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Perfil</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('consultaUser') }}">Meu perfil</a></li>
            <li><a class="dropdown-item" href="{{ route('meusProdutos') }}">Meus produtos</a></li>
            <li><a class="dropdown-item" href="{{ route('adicionaProdutos') }}">Cadastrar produtos</a></li>
          </ul>
        </li>
        @endif
        @if (session('sessionHash') !== null)
        <ul class="navbar-nav bd-navbar-nav flex-row">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('desloga') }}">Logout</a>
          </li>
        </ul>
        @else
        <ul class="navbar-nav bd-navbar-nav flex-row">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login/Cadastro') }}</a>
          </li>
        </ul>
        @endif
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline" action="{{route('listaBusca')}}">
              <div class="input-group input-group-sm">
                <input class="form-control" type="busca" name="busca" placeholder="Busca" aria-label="busca">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    @yield('content')
    <footer
    style="position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 4%;
  background-color: #13293d;
  color: #13293d;
  text-align: left;
  z-index:-1;">
      <p
      style="color:white;margin-left:4rem;"
      >Alugaí &copy; 2021</p>
    </footer>
</body>

</html>