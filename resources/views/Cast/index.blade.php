@extends('Layout.drAdmin')                  <!-- Menambahkan layout drAdmin -->

@section ('title', 'Peserta Cast')                <!-- Judul pd tab browser -->

@section ('heading','Peserta Cast')   

@section ('body')                                <!-- Ditampilkan pada user -->
<a href="/cast/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>

                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($cast as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->nama}}</td>

                        <td>
                            <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/cast/{{$value->id}}" method="POST">
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