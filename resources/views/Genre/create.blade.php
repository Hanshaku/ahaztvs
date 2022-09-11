@extends('Genre.layouts.layoutgenre')

@section ('title', 'Genre')                <!-- Judul pd tab browser -->

@section ('heading','Genre')

@section('konten') 
<div class="container">
    <div class="row" style="margin-top: 5%">
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
                <h2>Tambah Data</h2>
                <form action="/genre" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control bg-gradient-dark" name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
                        @error('nama')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                </form>
               </div>
             
               <a href="/genre"> Kembali ke halaman sebelumnya </a>
              </div>
               <!-- /.table-responsive -->
             </div>
          </div>
        </div>
        <!-- /.col -->

      </div>
</div> 
@endsection
   