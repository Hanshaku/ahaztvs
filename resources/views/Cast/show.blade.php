@extends ('Layout.drAdmin')        <!-- Menambahkan layout drAdmin -->

@section ('title','Detail')              <!-- Judul pd tab browser -->

@section ('heading','Detail Peserta')   

@section ('body')                       <!-- Ditampilkan pada user -->
  <h2>Menampilkan Data Peserta Cast ke-{{$cast->id}}</h2>
  <hr>
  <h4>Nama Lengkap : {{$cast->nama}}</h4>
  <p>Umur :{{$cast->umur}}</p>
  <p>Bio Terakhir : {{$cast->bio}}</p>

  <a href="/cast"> Kembali ke halaman peserta </a>
@endsection  

