@extends('Genre.layouts.layoutgenre')      <!-- Menambahkan layout drAdmin -->

@section ('title','Detail')              <!-- Judul pd tab browser -->

@section ('heading','Detail Peserta')   
{{-- tambahhhhhhhhhhhhhhhhhhhhh --}}


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
           <div class="container">
            <h2>Menampilkan Data Peserta Genre ke-{{$genres->id}} </h2>
                  <hr>
                  <h4>Nama : {{$genres->nama}}</h4>

                  <a href="/genre"> Kembali ke halaman peserta </a>
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

