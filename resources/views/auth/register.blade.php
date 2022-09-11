@extends('admin.layoutadmin.master')
@section('konten')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 ">
      <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="/" class="h1"><b>AHAZ-</b>TV</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>
      
            <form action="{{ route('register') }}" method="POST">
              @CSRF
              <div class="input-group mb-3">
                <input type="text" class="form-control bg-dark" placeholder="Full name" name="name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              @error('name')
                <div class="alert alert-danger">
                  {{ $message }}
                </div>
              @enderror
      
              <div class="input-group mb-3">
                <input type="email" class="form-control bg-dark" placeholder="Email" name="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
      
              @error('email')
              <div class="alert alert-danger">
                {{ $message }}
              </div>
              @enderror
      
              <div class="input-group mb-3">
                <input type="password" class="form-control bg-dark" placeholder="Password" name="password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              
              @error('password')
              <div class="alert alert-danger">
                {{ $message }}
              </div>
              @enderror
      
              <div class="input-group mb-3">
                <input type="password" class="form-control bg-dark" placeholder="Retype password" name="password_confirmation">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
      
              <div class="input-group mb-3">
                <input type="text" class="form-control bg-dark" placeholder="Age" name="umur"> 
              </div>
              
              @error('umur')
              <div class="alert alert-danger">
                {{ $message }}
              </div>
              @enderror
      
              <div class="input-group mb-3">
                <textarea class="form-control bg-dark" placeholder="Last Bio" name="bio"></textarea>
              </div>
      
              @error('bio')
              <div class="alert alert-danger">
                {{ $message }}
              </div>
              @enderror
      
              <div class="input-group mb-3">
                <textarea class="form-control bg-dark" placeholder="Address" name="alamat"></textarea>
              </div>
              
              @error('alamat')
              <div class="input-group mb-3">
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              </div>
              @enderror
              
            
              
              
              
              
              
              <div class="row">
               
      
      
      
      
      
                <!-- /.col -->
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
      
      
            <a href="{{  route('login') }}" class="text-center">I already have a membership</a>
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
    </div>
  </div>
</div>

<!-- /.register-box -->
@endsection
