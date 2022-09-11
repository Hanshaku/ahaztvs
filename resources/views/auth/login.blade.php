@extends('Genre.layouts.layoutgenre') 
@section('konten')
  <div class="container mt-6">
    <div class="row">
      <div class="col md-6 justify-content-center ">
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
            <h2>Menampilkan Data Peserta Genre ke-  </h2>
                  <hr>
                  <h4>Nama :</h4>

                  <a href="/genre"> Kembali ke halaman peserta </a>
           </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
        
          <!-- /.card-footer -->
        </div>
      </div>
    </div>
  </div>

@endsection
