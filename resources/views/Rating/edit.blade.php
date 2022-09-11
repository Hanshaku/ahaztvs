@extends('Layout.drAdmin')                              <!-- Menambahkan layout drAdmin -->

@section ('title', 'Edit Data')                               <!-- Judul pd tab browser -->

@section ('heading','Ubah Data')   

@section ('body')    
<div>
    <h2>Edit rating {{$rating->id}}</h2>
    <form action="/rating/{{$rating->id}}" method="POST"><!-- force method POST menjadi PUT -->
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$rating->nama}}" id="nama" placeholder="Masukkan Nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
       <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="{{$rating->keterangan}}"  id="keterangan" placeholder="Keterangan">
            @error('keterangan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
<!--         <div class="form-group">
            <label for="bio">Bio</label>
            <input type="text" class="form-control" name="bio" value="{{$rating->bio}}"  id="bio" placeholder="Masukkan Bio"> 
            @error('bio')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div> -->
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection

@section ('footer')    

@endsection