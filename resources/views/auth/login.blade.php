@extends('layouts/authMaster')

@section('title', 'Login Page')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
  <div class="card border-0 box-shadow-0 bg-transparent">
    <div class="card-body">
      <h3 class="text-center font-weight-bold">Login to Your Account</h3>
      <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <label for="login-email" class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email" name="email"
                 placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus
                 value="{{ old('email') }}"/>
          @error('email')
          <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="form-group">
          <div class="d-flex justify-content-between">
            <label for="login-password">Password</label>
          </div>
          <div class="input-group input-group-merge form-password-toggle">
            <input type="password" class="form-control form-control-merge"
                   id="login-password" name="password" tabindex="2"
                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                   aria-describedby="login-password"/>
            <div class="input-group-append">
              <span class="input-group-text cursor-pointer">
                <i data-feather="eye"></i></span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <div class="d-flex justify-content-between">
              <input class="custom-control-input" type="checkbox" id="remember-me"
                     name="remember-me"
                     tabindex="3" {{ old('remember-me') ? 'checked' : '' }} />
              <label class="custom-control-label" for="remember-me"> Remember Me </label>
              @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                  <small>Forgot Password?</small>
                </a>
              @endif
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block" tabindex="4">Sign in</button>
      </form>

      {{-- <p class="text-center mt-2">
        <span>New on our platform?</span>
        @if (Route::has('register'))
        <a href="{{ route('register') }}">
          <span>Create an account</span>
        </a>
        @endif
      </p>

      <div class="divider my-2">
        <div class="divider-text">or</div>
      </div>

      <div class="auth-footer-btn d-flex justify-content-center">
        <a href="javascript:void(0)" class="btn btn-facebook">
          <i data-feather="facebook"></i>
        </a>
        <a href="javascript:void(0)" class="btn btn-twitter white">
          <i data-feather="twitter"></i>
        </a>
        <a href="javascript:void(0)" class="btn btn-google">
          <i data-feather="mail"></i>
        </a>
        <a href="javascript:void(0)" class="btn btn-github">
          <i data-feather="github"></i>
        </a>
      </div> --}}
    </div>
  </div>

@endsection