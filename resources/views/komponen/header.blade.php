@push('bg')
<link rel="stylesheet" href="{{asset('netflix/images/css/bg.css')}}">
@endpush
<div class="wrapper">
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-5">
      <a class="navbar-brand" href="/welcome">AHAZ-TV</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      @auth
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/welcome"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acara TV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/film">Film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/genre">Genre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">publisher</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#">Baru & Populer</a>
          </li>
          {{-- search --}}
         
          
        </ul>
        <ul class="navbar-nav ml-auto">
{{-- search --}}

          <li class="nav-item">
            <form class="d-flex-end form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="/admin">Settings</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class=" dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  
                  <p>Logout</p>
           </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            </form>  
        </div>
      </li>
    </ul>
      @endauth
@guest
<ul class="navbar-nav ml-auto">
<li class="nav-item">
  <a class="nav-link" href="{{ route('login') }}">
    <button class="btn btn-danger my-2 my-sm-0" type="submit">MASUK</button>
  </a>
</li>
</ul>
@endguest
      </div>
    </nav>
  </div>