@extends('Genre.layouts.layoutgenre')

@section ('title', 'Genre')                <!-- Judul pd tab browser -->

@section ('heading','Genre')

<<<<<<< HEAD
@section('konten') 
<div class="container">
    <div class="row">
        <!-- Left col -->
        <div class="col-md mt-5 justify-content-center">
          <!-- TABLE: LATEST 1 -->
          <div class="card mt-5">
            <div class="card-header border-transparent">
              <h3 class="card-title">Data Genre</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tbody>
                        @forelse ($genre as $key=>$value)
                            <tr>
                                <td>{{$key + 1}}</th>
                                <td>{{$value->nama}}</td>
        
                                <td>
                                    <form action="/genre/{{$value->id}}" method="POST">
                                        @csrf
                                        <a href="/genre/{{$value->id}}" class="btn btn-info">Show</a>
                                        <a href="/genre/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
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
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
          
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->

      </div>
</div>         
=======
@section ('body')                                <!-- Ditampilkan pada user -->
<a href="/genre/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">List Film</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($genres as $index=>$genre)
                    <tr>
                        <td>{{$index + 1}}</th>
                        <td>{{$genre->nama}}</td>
                        <td>
                            <ul>
                                @foreach ($genre->films as $film)
                                    <li>{{ $film->judul }}</li>   
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="/genre/{{$genre->id}}" class="btn btn-info">Show</a>
                            <a href="/genre/{{$genre->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/genre/{{$genre->id}}" method="POST">
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
>>>>>>> b6499604a7d45d039e3e33e7ddeb022d6c07c730
@endsection