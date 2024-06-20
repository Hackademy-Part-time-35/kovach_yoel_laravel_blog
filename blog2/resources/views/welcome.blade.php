

<x-layout>
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <x-navbar/>



    <main class="px-3">
      <h1>benvenutto a  </h1>
      <p class="lead">abbiamo i megliori suggi</p>
      <p class="lead">
        <a href="{{ route('articoli') }}" class="btn btn-lg btn-secondary fw-bold border-white .text-dark" >suggi</a>
      </p>
    </main>

    <footer class="mt-auto text-white-50">
      <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a class="text-white">yoelK</a>.</p>
    </footer>
  </div>

</x-layout>
