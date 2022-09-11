@extends('Genre.layouts.layoutgenre')

@section ('title', 'Genre')                <!-- Judul pd tab browser -->

@section ('heading','Genre')

@section('konten') 
<div class="container">
    <div class="row">
        <!-- Left col -->
        <div class="col-md mt-5 justify-content-center">
          <a href="/genre/create">
            
          <button type="submit" class="btn btn-info">Tambah data</button>
          </a>
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
                        @forelse ($genres as $key=>$value)
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
@endsection