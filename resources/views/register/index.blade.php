@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Form Registration</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" required>
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">{{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="name" class="form-control " id="username" placeholder="username" required>
          <label for="username">Username</label>

        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="floatingInput" placeholder="email" required>
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">{{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">{{ $message }}
          </div>
          @enderror
        </div>

        <div class="checkbox mb-3">
        </div>
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registered</button>
        <small class="d-block text-center mt-3">Already Registered? <a href="/login">Sign In Now!</a></small>

      </form>


  </div>
</div>

@endsection