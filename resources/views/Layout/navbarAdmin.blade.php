<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li><!--
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ asset('template/index3.html') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>  -->
  </ul>

  <span class="ml-auto justify-content-end font-weight-bold">AHAZ-TV </span>


  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->

    <!-- Notifications -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
    </li>
    <!-- Profile -->
    @guest
    <li class="nav-item dropdown">
      <a class="nav-link " data-toggle="dropdown" href="/login" >
        <button class="btn btn-success btn-sm font-weight-bold">  <i class="fas fa-user mr-3"></i>  LOGIN </button>
      </a>
    </li>
    @endguest
    @auth
    <li class="nav-item dropdown">
      <a class="nav-link " data-toggle="dropdown" href="/logout" >
        <button class="btn btn-success btn-sm font-weight-bold">  <i class="fas fa-user mr-3"></i>  LOGOUT </button>
      </a>
    </li>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <span class="dropdown-item dropdown-header disabled">Data Anggota</span>
      <a href="/profile" class="dropdown-item">
        <i class="fas fa-edit"></i> Edit Profil Anda
      </a>

      <a href="/logout" class="dropdown-item">
        <i class="fas fa-log-out mr-2"></i> Logout
      </a>
      <a href="#" class="dropdown-item dropdown-footer">Masa Aktif Berlangganan : 244 hari</a> 
    </div>
  </li>
</ul>
    @endauth  


      
</nav>
<!-- /.navbar -->
</nav>
<!-- /.navbar -->