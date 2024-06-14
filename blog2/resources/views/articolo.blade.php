<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Bootstrap contributors">
    <title>Succo di Pera</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .full-width {
        width: 100%;
      }
      
      .big-text {
        font-size: 2.5rem; /* Tamaño grande para los encabezados */
        line-height: 1.2;
      }
      
      .big-paragraph {
        font-size: 1.5rem; /* Tamaño grande para los párrafos */
        line-height: 1.6;
      }
      
      .big-img {
        height: 800px; /* Incrementa la altura de la imagen */
        object-fit: cover;
      }
      
      .big-btn {
        font-size: 1.25rem; /* Tamaño grande para los botones */
        padding: 0.75rem 1.5rem;
      }
      
      .big-stars {
        font-size: 2rem; /* Tamaño grande para las estrellas */
      }
    </style>
  </head>
  <body>
    
<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Succo di Pera</strong>
      </a>
    </div>
  </div>
</header>

<main>

  @foreach($article as $index => $articles)    
  <section class="py-5 bg-light">
    <div class="container full-width">
      <div class="row">
        <div class="col-md-12">
          <img src="img/download.jpg" class="img-fluid big-img" alt="Succo di Pera">
        </div>
        <div class="col-md-12">
          <h1 class="fw-light big-text">{{ $articles['article'] }}</h1>
          <p class="big-paragraph">{{ $articles['description'] }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a class="btn btn-primary big-btn" href="#">Comprare</a>
            </div>
            <small class="text-muted big-stars">{{ $articles['valoracion'] }}</small>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Ritornare alla base</a>
    </p>
    <p class="mb-1">Pagina web in <strong>Bootstrap</strong>.</p>
    <p class="mb-0"><a href="/docs/5.0/getting-started/introduction/">Volver a casa</a></p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+HkrJz9UqD36/T7f65oFYpZhgano" crossorigin="anonymous"></script>

  </body>
</html>
