@extends('Layout.drAdmin')               <!-- Menambahkan layout drAdmin -->

@section ('title', 'Tambah Genre Film')              <!-- Judul pd tab browser -->

@section ('heading','Data Genre')   

@section ('body')                             <!-- Ditampilkan pada user -->
    
    <form action="/genre" method="POST">
        <div class="d-flex"><button type="submit" class="btn btn-primary btn-sm">@yield('title')</button></div>
        @csrf
        <div class="form-group">
            <label for="nama">Genre</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Genre Baru">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection