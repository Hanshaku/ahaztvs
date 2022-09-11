@extends('Layout.drAdmin')               <!-- Menambahkan layout drAdmin -->

@section ('title', 'Tambah Genre Film')              <!-- Judul pd tab browser -->

@section ('heading','Data Genre')   

@section ('body')                             <!-- Ditampilkan pada user -->
    <form action="/rating" method="POST">
        @csrf
        <div class="d-flex"><button type="submit" class="btn btn-primary btn-sm">@yield('title')</button></div>
        <div class="form-group">
            <label for="nama">Rating</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Rating Baru">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Deskripsi Rating Usia">
            @error('keterangan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
 <!--       <div class="form-group">
            <label for="bio">Bio</label>       
            <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan Bio Terakhir">
            @error('bio')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>-->
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection