@extends('layouts/authMaster')

@section('title', 'Update Password')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
  <div class="card border-0 box-shadow-0 bg-transparent">
    <div class="card-body">
      <h3 class="text-center font-weight-bold">Update Your Password</h3>
      <form class="auth-login-form mt-2" method="POST" action="#">
        @csrf
        <div class="form-group">
          <div class="d-flex justify-content-between">
            <label for="login-password">Old Password</label>
          </div>
          <div class="input-group input-group-merge form-password-toggle">
            <input type="password" class="form-control form-control-merge"
                   id="login-password" name="password" tabindex="2"
                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                   aria-describedby="login-password"/>
            <div class="input-group-append">
                                            <span class="input-group-text cursor-pointer"><i
                                                      data-feather="eye"></i></span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="d-flex justify-content-between">
            <label for="login-password">New Password</label>
          </div>
          <div class="input-group input-group-merge form-password-toggle">
            <input type="password" class="form-control form-control-merge"
                   id="login-password" name="password" tabindex="2"
                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                   aria-describedby="login-password"/>
            <div class="input-group-append">
                                            <span class="input-group-text cursor-pointer"><i
                                                      data-feather="eye"></i></span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="d-flex justify-content-between">
            <label for="login-password">Confirm Password</label>
          </div>
          <div class="input-group input-group-merge form-password-toggle">
            <input type="password" class="form-control form-control-merge"
                   id="login-password" name="password" tabindex="2"
                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                   aria-describedby="login-password"/>
            <div class="input-group-append">
                                            <span class="input-group-text cursor-pointer"><i
                                                      data-feather="eye"></i></span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block" tabindex="4">Reset Password</button>
      </form>
      <p class="text-right mt-2">
        @if (Route::has('login'))
          <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> Go back to Sign In </a>
        @endif
      </p>
    </div>
  </div>

@endsection