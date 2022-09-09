@extends ('Layout.drAdmin')            <!-- Menambahkan layout drAdmin -->

@section ('title', 'Welcome')                <!-- Judul pd tab browser -->

@section ('heading','Index')     

@section ('body')  
  <h1>Selamat Datang {{ $fname }} {{ $lname }}!</h1>
  <b>Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama!</b> <!-- Bold -->
@endsection  

