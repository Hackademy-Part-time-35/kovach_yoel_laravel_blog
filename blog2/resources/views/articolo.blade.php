<x-layout>
  
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  
<x-navbar/>
  <main>
  <section class="py-5 ">
    <div class="container full-width">
      <div class="row">
        <div class="col-md-12">
          <img src="img/download.jpg" class="img-fluid big-img" alt="Succo di Pera">
        </div>
        <div class="col-md-12">
          <h1 class="fw-light big-text text-dark">{{ $article['title'] }}</h1>
          <p class="big-paragraph">{{ $article['description'] }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a class="btn btn-primary big-btn" href="#">Comprare</a>
            </div>
            <small class="text-muted big-stars">{{ $article['valoracion'] }}</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  </main>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+HkrJz9UqD36/T7f65oFYpZhgano" crossorigin="anonymous"></script>

</x-layout>