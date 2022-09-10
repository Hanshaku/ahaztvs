@extends('Layout.drAdmin')                              <!-- Menambahkan layout drAdmin -->

@section ('title', 'Edit Data')                               <!-- Judul pd tab browser -->

@section ('heading','Ubah Data')   

@section ('body')    
<div>
    <h2>Edit cast {{$cast->id}}</h2>
    <form action="/cast/{{$cast->id}}" method="POST"><!-- force method POST menjadi PUT -->
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" value="{{$cast->nama}}" id="nama" placeholder="Masukkan Nama">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
<!--        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control" name="umur" value="{{$cast->umur}}"  id="umur" placeholder="Masukkan Umur">
            @error('umur')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <input type="text" class="form-control" name="bio" value="{{$cast->bio}}"  id="bio" placeholder="Masukkan Bio"> 
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