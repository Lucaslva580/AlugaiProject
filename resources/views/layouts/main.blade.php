<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cadastroManual.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('site/jquery.js') }}"></script>
    <link href="{{ asset('site/boostrap.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@700&family=Pattaya&family=Yellowtail&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1066ac0af.js" crossorigin="anonymous"></script>
  </head>
  <body>
    @yield('content')
    <footer>
      <p>Alugaí &copy; 2021</p>
    </footer>
  </body>
</html>