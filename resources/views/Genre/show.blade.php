@extends ('Layout.drAdmin')        <!-- Menambahkan layout drAdmin -->

@section ('title','Detail')              <!-- Judul pd tab browser -->

@section ('heading','Detail Peserta')   

@section ('body')                       <!-- Ditampilkan pada user -->
  <h2>Menampilkan Data Peserta Genre ke-{{$genre->id}} </h2>
  <hr>
  <h4>Nama : {{$genre->nama}}</h4>

<div class="row">
  @foreach ($genre->film as $value) 
  <div class="col-4">
    <div class="card">
      <img src="{{ asset('image/'.$value->poster) }}" class="car-img-top" alt="...">
          <div class="card-body">
              <h3>{{ $value->judul }}</h3>
              <p class="card-text"> {{ Str::limit($value->ringkasan, 30) }}</p>
          </div>
    </div>
  </div>
  @endforeach
</div>

  <a href="/genre"> Kembali ke halaman peserta </a>
@endsection  

