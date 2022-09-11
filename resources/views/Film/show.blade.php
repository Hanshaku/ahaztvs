@extends('Genre.layouts.layoutgenre')        <!-- Menambahkan layout drAdmin -->

@section ('title','Streaming Film')              <!-- Judul pd tab browser -->

@section ('heading','Streaming Film')   

@section ('konten')                       <!-- Ditampilkan pada user -->
  {{-- <img src="{{ asset('image/'.$film->poster) }}" style=" width: 40%;"> --}}
  <iframe width="560" height="315" src="{{$film->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <h4>{{$film->judul}}</h4>
  <p>Ringkasan :{{$film->ringkasan}}</p>
  <p>Tahun: {{$film->tahun}}</p>
  <h3>{{ $rating->nama }}</h3>
        <p class="card-text"> {{ $rating->keterangan }}</p>

  <h2>Komentar</h2>

  {{-- @foreach ($rating as $value) --}}
   
    
  {{-- @endforeach --}}
  <form action="/review" method="POST">
    @csrf

    <div class="form-group">
        <label for="judul">Berikan Komentar</label>
        <input type="hidden" class="form-control" name="film_id" id="film_id" placeholder="Masukkan Komentar" value="{{ $film->id }}">
        <textarea name="content" id="content" class="form-control"></textarea>
    </div>

    @error('content')
    <div class="alert alert-danger">   {{ $message }}   </div>
    @enderror
    

    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
  
  <a href="/film"> Kembali ke halaman utama </a>
@endsection  

