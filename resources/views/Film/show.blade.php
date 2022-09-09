@extends ('Layout.drAdmin')        <!-- Menambahkan layout drAdmin -->

@section ('title','Detail')              <!-- Judul pd tab browser -->

@section ('heading','Detail Film')   

@section ('body')                       <!-- Ditampilkan pada user -->
  <img src="{{ asset('image/'.$film->poster) }}" style=" width: 40%;">
  <h4>{{$film->judul}}</h4>
  <p>Ringkasan :{{$film->ringkasan}}</p>
  <p>Tahun: {{$film->tahun}}</p>

  <h2>Komentar</h2>

  @foreach ($film->review as $value)
    <div class="card">
      <div class="card-body">
        <h3>{{ $value->user->name }}</h3>
              <p class="card-text"> {{ $value->content }}</p>
             
          </div>
  </div>
    
  @endforeach
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
  
  <a href="/film"> Kembali ke halaman peserta </a>
@endsection  
