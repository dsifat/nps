@extends('layouts/authMaster')

@section('title', 'Forgot Password')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
  <div class="card border-0 bg-transparent box-shadow-0">
    <div class="card-body">
{{--      <a href="javascript:void(0);" class="brand-logo">--}}
{{--        <h2 class="brand-text text-primary ml-1">{{ config('app.name') }}</h2>--}}
{{--      </a>--}}
      <h3 class="text-center font-weight-bold">Send OTP</h3>
{{--      <p class="card-text mb-2">Enter your email and we'll send you instructions to reset your password</p>--}}
      <form class="auth-forgot-password-form mt-2" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
          <label for="forgot-password-email" class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="forgot-password-email"
                 name="email" value="{{ old('email') }}" placeholder="john@example.com"
                 aria-describedby="forgot-password-email" tabindex="1" autofocus/>
          @error('email')
          <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="forgot-password-mobile" class="form-label">Mobile No</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">+997</span>
            </div>
            <input type="text" id="forgot-password-mobile" class="form-control" aria-label="Mobile No" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="mb-2 text-sm-center mt-0" style="font-size: 11px">
          Mobile number must contains 10 digits and start with 16 or 18. Example: 18xxxxxxxx or 16xxxxxxxx
        </div>
        <button type="submit" class="btn btn-primary btn-block" tabindex="2">Send OTP</button>
      </form>
      <p class="text-right mt-2">
        @if (Route::has('login'))
          <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> Go back to Sign In </a>
        @endif
      </p>
    </div>
  </div>
@endsection
