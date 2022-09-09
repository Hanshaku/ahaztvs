@extends ('Layout.drAdmin')        <!-- Menambahkan layout drAdmin -->

@section ('title','Detail')              <!-- Judul pd tab browser -->

@section ('heading','Detail Game')   

@section ('body')                       <!-- Ditampilkan pada user -->
  <h2>Menampilkan Data Game ke-{{$game->id}}</h2>
  <hr>
  <h4>Judul : {{$game->name}}</h4>
  <p>Gameplay :{{$game->gameplay}}</p>
  <p>Developer : {{$game->developer}}</p>
  <p>Year : {{$game->year}}</p>

  <a href="/game"> Kembali ke halaman sebelumnya</a>
@endsection  

