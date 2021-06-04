<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alugaí</title>

    <link href="{{ asset('css/main2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/page-landing.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animations.css') }}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="page-landing">
      <div id="container">
        <header>
          <img 
          class="animate-up";
          id= logo 
          src="./public/images/logo.svg" 
          alt="Alugaí" />

          <div class="location animate-up">
            <strong>Duque de Caxias</strong>
            <p>Rio de Janeiro</p>
          </div>
        </header>

        <main>
          <h1 class="animate-up">AQUI VOCÊ ECONOMIZA E GANHA DINHEIRO AO MESMO TEMPO</h1>

          <section class="visit">
            <p class="animate-up">Alugue objetos úteis no dia a dia por um preço acessível</p>

            <a href="orphanages.html" title="Visite orfanatos" class="animate-up">
              <img id="ir" src="{‌{ public_path('images/arrow.svg') }}" alt="ir para o login" />
            </a>
          </section>
        </main>
      </div>
    </div>
  </body>
</html>
