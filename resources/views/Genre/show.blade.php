@extends ('Layout.drAdmin')        <!-- Menambahkan layout drAdmin -->

@section ('title','Detail')              <!-- Judul pd tab browser -->

@section ('heading','Detail ')   

@section ('body')                       <!-- Ditampilkan pada user -->
  <h2>Menampilkan List Film dengan {{$genres->nama}} </h2>
  <hr>
  <div class="row">
    @foreach ($genres->films as $film)
      <div class="col-4">
        <div class="card">
          <img src="{{ asset('image/'.$film->poster) }}" class="card-img-top" alt="thumbnail">
          <div class="card-body">
            <span class="badge badge-warning"> {{ $ratings->nama }}</span> 
            <h3>{{ $film->judul }}</h3>
            <p class="card-text"> {{ $film->ringkasan }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <a href="/genre"> Kembali ke halaman sebelumnya </a>
@endsection  

