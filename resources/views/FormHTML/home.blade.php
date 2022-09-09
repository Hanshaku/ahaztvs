@extends ('Layout.drAdmin')        <!-- Menambahkan layout drAdmin -->

@section ('title','Home')                <!-- Judul pd tab browser -->

@section ('heading','Utama')   

@section ('body')                       <!-- Ditampilkan pada user -->
  <h2>Media Online</h2>                 
  <h3>Sosial Media Developer</h3>
  <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
  
  <h3>Benefit Join di Media Online</h3>
    <ul>                                               <!-- Tombol -->
      <li>Mendapatkan motivasi dari sesama para Developer</li>
      <li>Sharing knowledge</li>
      <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
  
  <h3>Cara Bergabung ke Media Online</h3>             
    <ol>                                                <!-- Angka -->
      <li>Mengunjungi Website ini</li>                   <!-- List -->
      <li>Mendaftarkan di <a href="/register">Form Sign Up</a></li>
      <li>Selesai</li>
  </ol>
  @endsection  

