@extends('login.layouts.main')

@section('bodyauth')
<div class="login-wrapper">
  <div class="login-container">
    <h2 class="text-center title">REGISTRASI AKUN BARU</h2>
    <form class="login-form" action="/daftar" method="post" id="login">
      @csrf
      <div class="login-form-username form-group">
        <label class="sr-only" for="nim">
          NIM
        </label>
        <input type="number" class="form-control @error('nim') is-invalid @enderror" name="nim" required placeholder="NIM">
      </div>
      <div class="login-form-username form-group">
        <label class="sr-only" for="name">
          Nama Lengkap
        </label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required placeholder="Nama Lengkap">
      </div>
      <div class="login-form-username form-group">
        <label class="sr-only" for="username">
          Username
        </label>
        <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" required placeholder="Username">
      </div>
      <div class="login-form-username form-group">
        <label class="sr-only" for="nim">
          Password
        </label>
        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required placeholder="Password">
      </div>
      <div class="login-form-username form-group">
        <label class="sr-only" for="nim">
          Konfirmasi Ulang Password
        </label>
        <input type="password" class="form-control  @error('password2') is-invalid @enderror" name="password2" required placeholder="Konfirmasi Ulang Password">
      </div>
      <div class="login-form-submit form-group text-right">
        <button class="btn btn-login" type="submit" id="loginbtn">daftar</button>
      </div>
    </form>
  </div>
</div>
@endsection