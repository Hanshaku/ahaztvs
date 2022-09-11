@extends('Genre.layouts.layoutgenre')              <!-- Menambahkan layout drAdmin -->

@section ('title', 'Register')                <!-- Judul pd tab browser -->

@section ('heading','Pendaftaran')   

@section ('konten')                             <!-- Ditampilkan pada user -->
  <form action="/welcome" method="post">               <!-- Form crucial -->
  @csrf <!-- 
  To prevent this vulnerability, we need to inspect every incoming POST, PUT, PATCH, or DELETE 
  request for a secret session value that the malicious application is unable to access. -->
  <h3>Buat Account Baru</h3>                                <!-- Heading -->
    <h4>Sign Up Form</h4>
    
    <p>First name :</p>                                   <!-- Paragraph -->
      <input type="text" name="fname" required>         <!-- Wajib diisi -->
    
    <p>Last name :</p> 
      <input type="text" name="lname" required>

    <p>Password :</p>
      <input type="password" minlength="8" required>         <!-- Hidden -->
      
    <p>Gender :</p>
      <input type="radio" name="Gender" required>Male<br><!-- name != id -->
      <input type="radio" name="Gender" required>Female   <!-- u/ 1 tipe -->

    <p><label for="gender">Nationality :</label></p>
      <select id="nation">
        <option value="0"> Pilih salah satu
        <option value="Indonesia" required>Indonesia
        <option value="Inggris" required>Inggris
        <option value="India" required>India
      </select>
      
    <p>Language Spoken :</p>
      <input type="checkbox" name="language" value="Bahasa Indonesia">Bahasa Indonesia<br>
      <input type="checkbox" name="language" value="Inggris">Inggris<br>
      <input type="checkbox" name="language" value="Other">Other<br>

    <p>Bio :</p>
      <textarea cols="30" rows="10"></textarea><br>       <!-- break row -->
      <button type="submit">Sign Up</button>
  </form>
@endsection  

