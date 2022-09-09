@extends('Layout.drAdmin')                              <!-- Menambahkan layout drAdmin -->

@section ('title', 'Edit Data')                               <!-- Judul pd tab browser -->

@section ('heading','Ubah Data')   

@section ('body')    
<div>
    <h2>Edit game {{$game->id}}</h2>
    <form action="/game/{{$game->id}}" method="POST"><!-- force method POST menjadi PUT -->
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Judul</label>
            <input type="text" class="form-control" name="name" value="{{$game->name}}" id="name" placeholder="Masukkan judul">
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gameplay">Gameplay</label>
            <input type="text" class="form-control" name="gameplay" value="{{$game->gameplay}}"  id="gameplay" placeholder="Masukkan gameplay">
            @error('gameplay')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="developer">Developer</label>
            <input type="text" class="form-control" name="developer" value="{{$game->developer}}"  id="developer" placeholder="Masukkan developer"> 
            @error('developer')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" class="form-control" name="year" value="{{$game->year}}"  id="year" placeholder="Masukkan year"> 
            @error('year')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection

@section ('footer')    

@endsection