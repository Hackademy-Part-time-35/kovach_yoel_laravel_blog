<x-layout>


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  
  <x-navbar/>
  

<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">i nostri suggi sono fatte abbsolutamente tutte a mano e con fruta di casa</h1>
        <p class="lead text-muted"></p>
        <p>
          <a href="https://www.recetasgratis.net/receta-de-jugo-de-manzana-52591.html" class="btn btn-primary my-2">leggi piu</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
         @foreach($article as $index => $articles)          
          @if($articles['visible'] === true)

            <x-card 
              :img="$articles['imagen']"
              :title="$articles['title']"
              :valoracion="$articles['valoracion']"
              :route="route('articolo', $index)"
            />
          @else
          @endif
        @endforeach
      </div>
    </div>
  </div>
</main>

</div>




    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      
</x-layout>