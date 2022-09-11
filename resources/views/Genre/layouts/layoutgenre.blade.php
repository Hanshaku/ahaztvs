<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Google Font: Source Sans Pro -->
  @include('admin.komponenadmin._assetatas')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('hae/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <div class="container">
    <div class="row">
      
      @include('komponen.header')
    </div>
  </div>
  <div class="content">
    <div class="container" >
      <div class="row justify-content-center" >
        <div class="col-md-8" style="margin-top: 10%">
          @yield('konten')

        </div>
      </div>
    </div>
  </div>
  {{-- footer --}}
 @include('admin.komponenadmin.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.komponenadmin._asetmasterbawah')

</body>
</html>
