<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title')</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <link href="{{ asset('css/HeaderFooter.css') }}" rel="stylesheet">
  <script src="{{ asset('site/jquery.js') }}"></script>
  <link href="{{ asset('site/boostrap.css') }}" rel="stylesheet" type="text/css">
  <script src="{{ asset('site/bootstrap.js') }}"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@700&family=Pattaya&family=Yellowtail&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/c1066ac0af.js" crossorigin="anonymous"></script>
</head>

<body>
  <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
    <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Home"><svg class="d-block" width="36" height="36">
        <title>Home</title>
      </svg>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav bd-navbar-nav flex-row">
        <li class="nav-item">
          <a class="nav-link " href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/"></a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      @if (session()->get('sessao') !="")
      <ul class="navbar-nav bd-navbar-nav flex-row">
        <li class="nav-item">
          <a class="nav-link" href="/desloga">Logout</a>
        </li>
      </ul>
      @else
      <ul class="navbar-nav bd-navbar-nav flex-row">
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
      </ul>
      @endif
    </div>
  </header>

  @yield('content')
  <footer>
    <p>Alugaí &copy; 2021</p>
  </footer>
</body>

</html>