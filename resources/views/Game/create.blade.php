@extends('Layout.drAdmin')               <!-- Menambahkan layout drAdmin -->

@section ('title', 'Tambah Data')              <!-- Judul pd tab browser -->

@section ('heading','Pendaftaran')   

@section ('body')                             <!-- Ditampilkan pada user -->
    <h2>Tambah Data</h2>
    <form action="/game" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan judul">
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gameplay">Gameplay</label>
            <input type="text" class="form-control" name="gameplay" id="gameplay" placeholder="Masukkan gameplay">
            @error('gameplay')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="developer">Developer</label>       
            <input type="text" class="form-control" name="developer" id="developer" placeholder="Masukkan developer">
            @error('developer')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">Year</label>       
            <input type="text" class="form-control" name="year" id="year" placeholder="Masukkan year Terakhir">
            @error('year')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection