@extends('login.layouts.main')

@section('bodyauth')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="login-wrapper">
  <div class="login-container">
    <h2 class="text-center title">Login</h2>
    <form class="login-form" action="/login" method="post" id="login">
      @csrf
      <div class="form-group row fitem">
        <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
          <label class="d-inline word-break ">
            username
          </label>
        </div>
        <div class="col-md-9 form-inline align-items-start felement">
          <input type="text" class="form-control" name="username">
        </div>
      </div>
      <div class="form-group row fitem">
        <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
          <label class="d-inline word-break ">
            password
          </label>
        </div>
        <div class="col-md-9 form-inline align-items-start felement">
          <input type="password" class="form-control" name="password">
        </div>
      </div>
      <div class="login-form-submit form-group text-right">
        <button class="btn btn-login" type="submit" id="loginbtn">login</button>
      </div>
    </form>
  </div>
</div>
<div class="login-footer text-center">
  belum memiliki akun?<a href="/login/daftar">Registrasi</a>
</div>

@endsection