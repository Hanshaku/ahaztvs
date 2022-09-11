@extends('komponen.master')
@include('inifilm._asset')

@section ('heading','Pendaftaran')   
@section('konten')             <!-- Judul pd tab browser -->

                            <!-- Ditampilkan pada user -->



                            <div class="container">
                                <div class="row">
                                    <!-- Left col -->
                                    <div class="col-md">
                                      <!-- TABLE: LATEST 1 -->
                                      <div class="card">
                                        <div class="card-header border-transparent bg-transparent">
                                          <h3 class="card-title">Top Tranding Movies</h3>
                            
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
                                                <th>Genres</th>
                                                <th>Views</th>
                                                <th>Popularity</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                              <tr>
                                                <td><a href="pages/examples/invoice.html">1</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class="badge badge-success">Shipped</span></td>
                                                <td>
                                                  <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><a href="pages/examples/invoice.html">1</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                                <td>
                                                  <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><a href="pages/examples/invoice.html">1</a></td>
                                                <td>iPhone 6 Plus</td>
                                                <td><span class="badge badge-danger">Delivered</span></td>
                                                <td>
                                                  <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><a href="pages/examples/invoice.html">1</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="badge badge-info">Processing</span></td>
                                                <td>
                                                  <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><a href="pages/examples/invoice.html">1</a></td>
                                                <td>Samsung Smart TV</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                                <td>
                                                  <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><a href="pages/examples/invoice.html">1</a></td>
                                                <td>iPhone 6 Plus</td>
                                                <td><span class="badge badge-danger">Delivered</span></td>
                                                <td>
                                                  <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td><a href="pages/examples/invoice.html">1</a></td>
                                                <td>Call of Duty IV</td>
                                                <td><span class="badge badge-success">Shipped</span></td>
                                                <td>
                                                  <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                                </td>
                                              </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                          <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer clearfix">
                                          <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                                          <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                                        </div>
                                        <!-- /.card-footer -->
                                      </div>
                                      <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                            
                                  </div>
                            </div>


    <h2>Tambah Data</h2>
    <form action="/genre" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection