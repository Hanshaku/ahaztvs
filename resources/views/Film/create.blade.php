@extends('Layout.drAdmin')               <!-- Menambahkan layout drAdmin -->

@section ('title', 'Tambah Data')              <!-- Judul pd tab browser -->

@section ('heading','Pendaftaran Film')   

@section ('body')                             <!-- Ditampilkan pada user -->
    <h2>Tambah Data</h2>
    <form action="/film" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul Film">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="ringkasan">Ringkasan</label>
            <textarea class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan Ringkasan"></textarea>
            @error('ringkasan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="genre">Kategori</label>
            <select name="genre" class="form-control" id="">
                <option value="">----- Pilih salah satu -----</option>
                @foreach ($genre as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>                    
                @endforeach
            </select>
            @error('genre')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tahun">Tahun</label>       
            <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun Rilis" maxlength="4">
            @error('tahun')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="poster">File Gambar</label>
                <input type="file" class="form-control" name="poster" id="poster">
                @error('poster')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                 @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection