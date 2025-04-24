@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="row w-100">
      <div class="col-lg-5 col-lg-4 mx-auto">
        <div class="card shadow-sm p-4">
          <h4 class="text-center mb-4">Login</h4>
  
          <form action="" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Email or Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
  
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
  
            <button type="submit" class="btn btn-danger w-100">Login</button>
          </form>
  
          <div class="text-center mt-2">
            <small>Not registered <a href="/register">Register Now!</a></small>
          </div>
        </div>
      </div>
    </div>
</div>  
@endsection