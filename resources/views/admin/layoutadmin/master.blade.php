<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Dashboard Admin</title>

  <!-- Google Font: Source Sans Pro -->
  @include('admin.komponenadmin._assetatas')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <div class="container">
    <div class="row">
      
      @include('komponen.header')
    </div>
<div class="margin" style="margin-top: 10%">

  @yield('konten')

</div>

  <!-- Main Footer -->
  @include('komponen.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('admin.komponenadmin._asetmasterbawah')
@stack('chart')
</body>
</html>
