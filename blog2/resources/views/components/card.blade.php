<div class="col">
    <div class="card shadow-sm">
      <svg class="bd-placeholder-img card-img-top " width="100%" height="225" xmlns="http://www.w3.org/2000/svg"   preserveAspectRatio="xMidYMid slice" focusable="false"><title>{{ $title }}</title><img src="{{ asset($img) }}" alt=""></svg>

      <div class="card-body">
        <p class="card-text">{{ $title }}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a class="btn btn-sm btn-outline-secondary" href="{{$route}}">comprare</a>
          </div>
          <small class="text-muted">{{$valoracion }}</small>
        </div>
      </div>
    </div>
  </div>