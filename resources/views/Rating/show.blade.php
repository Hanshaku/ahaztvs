@extends ('Layout.drAdmin')        <!-- Menambahkan layout drAdmin -->

@section ('title','Detail')              <!-- Judul pd tab browser -->

@section ('heading','Detail Rating')   

@section ('body')                       <!-- Ditampilkan pada user -->
  <h2>Menampilkan Data Rating ke-{{$rating->id}} </h2>
  <hr>
  <h4>Rating Film {{$rating->nama}}</h4>


  <a href="/rating"> Kembali ke halaman peserta </a>
@endsection  

