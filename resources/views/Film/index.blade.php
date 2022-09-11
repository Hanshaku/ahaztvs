@extends('Genre.layouts.layoutgenre')                <!-- Menambahkan layout drAdmin -->

@section ('title', 'List Film')                <!-- Judul pd tab browser -->

@section ('heading','List Film')   

@section ('konten')    
<div class="container">
    <div class="row" >
        <div class="col-md-9 justify-content-center" style="margin-top: 7%">
        <a href="/film/create" class="btn btn-primary mb-2">Tambah</a>
        <div class="row" >
            @forelse ($film as $value)
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset('image/'.$value->poster) }}" class="car-img-top" style=" width: 100%; height: 15vw; object-fit: cover;" alt="...">
                            <div class="card-body">
                                <span class="badge badge-info">{{ $value->genre->nama }}</span>
                                <h3>{{ $value->judul }}</h3>
                                <p class="card-text"> {{ Str::limit($value->ringkasan, 300) }}</p>
                                <div class="d-flex justify-content-start">
                                    <a href="/film/{{$value->id}}" class="btn btn-info mr-2">Tonton</a>
                                    <a href="/film/{{$value->id}}/edit" class="btn btn-primary mr-2">Edit</a>
                                    <form action="/film/{{$value->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger mr-2" value="Delete">
                                    </form>
                                </div>
                            
                            </div>
                    </div>
                </div>
            @empty
            <div class="container-fluid card">
                <div class="card-body text-center">
                No data available 
                </div>
            </div>
        </div> 
            @endforelse
</div>
</div>
</div>
@endsection