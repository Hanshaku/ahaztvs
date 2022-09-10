@extends ('Layout.drAdmin')        <!-- Menambahkan layout drAdmin -->

@section ('title','Detail')              <!-- Judul pd tab browser -->

@section ('heading','Detail ')   

@section ('body')                       <!-- Ditampilkan pada user -->
  <h2>Menampilkan Data Genre ke-{{$genre->id}} </h2>
  <hr>
  <h4>Nama : {{$genre->nama}}</h4>

  <a href="/genre"> Kembali ke halaman peserta </a>
@endsection  

