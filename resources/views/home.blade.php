<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('storage/favicon.ico') }}"  rel="shortcut icon" type="image/x-icon"/>
    <title>Alugaí</title>

    <link href="{{ asset('css/main2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/page-landing.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animations.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/c1066ac0af.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="page-landing">
      <div id="container">
        <header>
          <div class="location animate-up">
            <strong style="color:#e8f1f2">Alugaí</strong>
          </div>
        </header>

        <main>
          <h1 style="color:#13293d" class="animate-up">AQUI VOCÊ ECONOMIZA E GANHA DINHEIRO AO MESMO TEMPO</h1>

          <section class="visit">
            <p style="color:#13293d"  class="animate-up">Alugue objetos úteis no dia a dia por um preço acessível</p>

            <button onclick="window.location.href='/PesquisaProdutos'" class="animate-up">
              <i class="fas fa-arrow-right"></i>
            </button>
          </section>
        </main>
      </div>
    </div>
  </body>
</html>
