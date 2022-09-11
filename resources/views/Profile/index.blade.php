@extends('Genre.layouts.layoutgenre')               <!-- Menambahkan layout drAdmin -->

@section ('title', 'Profile')                <!-- Judul pd tab browser -->

@section ('heading', 'One to One')   

@section ('konten')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
      
        <div>
            <h2>Ubah profile Anda</h2>
            <form action="/profile/{{$profile->id}}" method="POST"><!-- force method POST menjadi PUT -->
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" name="name" value="{{$profile->user->name}}" id="name" placeholder="Masukkan Nama " disabled>
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$profile->user->email}}" id="email" placeholder="Masukkan Email " disabled>
                    @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="umur">Umur Profile</label>
                    <input type="number" class="form-control" name="umur" value="{{$profile->umur}}" id="umur" placeholder="Masukkan Umur ">
                    @error('umur')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" name="bio" id="bio" placeholder="Masukkan Bio">{{$profile->bio}}</textarea> 
                    @error('bio')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">{{$profile->alamat}}</textarea> 
                    @error('alamat')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
</div>
</div>
</div>
@endsection
