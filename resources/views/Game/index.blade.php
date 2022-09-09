@extends('Layout.drAdmin')                  <!-- Menambahkan layout drAdmin -->

@section ('title', 'Kumpulan Game')                <!-- Judul pd tab browser -->

@section ('heading','Kumpulan Game')   

@section ('body')                                <!-- Ditampilkan pada user -->
<a href="/game/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Gameplay</th>
                <th scope="col">Developer</th>
                <th scope="col">Year</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($game as $key=>$value)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->gameplay}}</td>
                        <td>{{$value->developer}}</td>
                        <td>{{$value->year}}</td>
                        <td>
                            <a href="/game/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/game/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/game/{{$value->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection