@extends('Layout.drAdmin')                  <!-- Menambahkan layout drAdmin -->

@section ('title', 'Rating')                <!-- Judul pd tab browser -->

@section ('heading','Rating')   

@section ('body')                                <!-- Ditampilkan pada user -->
<a href="/rating/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($rating as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->keterangan}}</td>
                        <td>
                            <a href="/rating/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/rating/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/rating/{{$value->id}}" method="POST">
                                @csrf
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