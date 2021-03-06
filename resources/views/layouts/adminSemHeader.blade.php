<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="{{ asset('storage/favicon.ico') }}"  rel="shortcut icon" type="image/x-icon"/>
    <title>@yield('title')</title>

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts -->
    <script src="{{ asset('site/jquery.js') }}"></script>
<!-- Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@700&family=Pattaya&family=Yellowtail&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1066ac0af.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>

<!-- Styles -->
    <link href="{{ asset('css/cadastroFinalizado.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cadastroManual.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/bootstrap.css') }}" rel="stylesheet" type="text/css"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <script src="//code-sa1.jivosite.com/widget/oHcm1tfcUg" async></script>
<!-- AdminLayout -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
  </head>
  <body>
    @yield('content')
    <footer>
      <p>Aluga?? &copy; 2021</p>
    </footer>
  </body>
</html>