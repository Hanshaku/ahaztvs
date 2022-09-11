@extends('Genre.layouts.layoutgenre')                  <!-- Menambahkan layout drAdmin -->

@section ('title', 'Rating')                <!-- Judul pd tab browser -->

@section ('heading','Rating')   

@section ('konten')                                <!-- Ditampilkan pada user -->
<a href="/rating/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table border-transparent">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
                <th scope="col">List Film</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($ratings as $index=>$rating) 
                    <tr>
                        <td>{{$index + 1}}</th>
                        <td>{{$rating->nama}}</td>
                        <td>{{$rating->keterangan}}</td>
                        <td>
                            <ul>
                                @foreach ($rating->films as $film)
                                    <li>{{ $film->judul }}</li>   
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <form action="/rating/{{$rating->id}}" method="POST">
                                @csrf
                                <a href="/rating/{{$rating->id}}" class="btn btn-info">Show</a>
                                <a href="/rating/{{$rating->id}}/edit" class="btn btn-primary">Edit</a>
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td class="text-center">
                            No data available 
                        </td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection