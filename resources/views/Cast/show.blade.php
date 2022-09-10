@extends ('Layout.drAdmin')        <!-- Menambahkan layout drAdmin -->

@section ('title','Detail')              <!-- Judul pd tab browser -->

@section ('heading','Rating')   

@section ('body')                       <!-- Ditampilkan pada user -->
  <h2>Menampilkan Data Rating ke-{{$rating->id}} </h2>
  <hr>
  <h4>Nama : {{$rating->nama}}</h4>


  <a href="/rating"> Kembali ke halaman peserta </a>
@endsection  

