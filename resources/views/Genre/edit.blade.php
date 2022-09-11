@extends('Genre.layouts.layoutgenre')                             <!-- Menambahkan layout drAdmin -->

@section ('title', 'Edit Data')                               <!-- Judul pd tab browser -->

@section ('heading','Ubah Data')   

@section ('konten')    

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
             <div class="container">
                <h2>Edit genre {{$genre->id}}</h2>
                <form action="/genre/{{$genre->id}}" method="POST"><!-- force method POST menjadi PUT -->
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="{{$genre->nama}}" id="nama" placeholder="Masukkan Nama">
                        @error('nama')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <button type="submit" class="btn btn-block btn-primary mb-3">Edit</button>
                </form>
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

@section ('footer')    

@endsection