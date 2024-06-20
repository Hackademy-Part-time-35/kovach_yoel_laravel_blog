<x-layout>
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">  
  <x-navbar/>
    <main class="px-3">
      <div class="container-md">
        <x-success/>
        <form action="{{route('contatti.invia')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">name</label>
            <input type="name" name="name" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">mensaggio</label>
            <textarea class="form-control" placeholder="Leave a comment here" name="message" id="message" style="height: 100px"></textarea>
            <label for="floatingTextarea2">mensaggio</label>
          </div>
          <button type="submit" class="btn btn-primary">invia</button>
        </form>
      </div>

    <footer class="mt-auto text-white-50">
      <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a class="text-white">yoelK</a>.</p>
    </footer>
    

  </div>

</x-layout>