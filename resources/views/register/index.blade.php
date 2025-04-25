@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 pt-5">
    <div class="row w-100">
      <div class="col-lg-5 col-lg-4 mx-auto">
        <div class="card shadow-sm p-4">
          <h4 class="text-center mb-4">Register Account</h4>
  
          <form action="" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
  
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
  
            <button type="submit" class="btn btn-danger w-100">Register</button>
          </form>
  
          <div class="text-center mt-2">
            <small>Already re gisterd? <a href="/login">Login</a></small>
          </div>
        </div>
      </div>
    </div>
</div>  
@endsection