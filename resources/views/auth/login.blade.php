@extends('layouts/fullLayoutMaster')

@section('title', 'Login Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="row">
    <div class="col-sm-4 bg-primary">
        <div class="container login-sidebar">
            <img src="{{ asset('images/logo/ncell-dark.png') }}" alt="ncell-dark">
            <div class="description">
                <div class="title">
                    <span>Everybody can connect</span>
                </div>
                <div class="details">
                    <span class="text-left">Acknowledge customer feedback, and respond quickly to detractors, improve the NPS score. Boost the customer loyalty and retention.</span>
                </div>
            </div>
            <div class="img-flavour d-flex justify-content-center">
                <img width="80%" src="{{ asset('images/misc/sidebar-flavor.png') }}" alt="ncell-dark">
            </div>
        </div>
    </div>
    <div class="col-sm-8 auth-wrapper auth-v1 px-2">
        <div class="auth-inner py-2">
                <!-- Login v1 -->
                <div class="card border-0 box-shadow-0 bg-transparent">
                    <div class="card-body">
{{--                        <a href="javascript:void(0);" class="brand-logo">--}}
{{--                            <h2 class="brand-text text-primary ml-1">{{ config('app.name') }}</h2>--}}
{{--                        </a>--}}
                        <h3 class="text-center font-weight-bold text-darken-1">Login to Your Account</h3>
                        <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="login-email" class="form-label">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email" name="email" placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus value="{{ old('email') }}" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <label for="login-password">Password</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            <small>Forgot Password?</small>
                                        </a>
                                    @endif
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input type="password" class="form-control form-control-merge" id="login-password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                                    <div class="input-group-append">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <div class="d-flex justify-content-between">
                                        <input class="custom-control-input" type="checkbox" id="remember-me" name="remember-me" tabindex="3" {{ old('remember-me') ? 'checked' : '' }} />
                                        <label class="custom-control-label" for="remember-me"> Remember Me </label>
                                        <a href="{{ url('/privacy-policy') }}" target="_blank">Privacy Policy</a>
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
            </div>

        <footer class="footer-inside">
            <span class="text-sm-left">Copyright © All Rights Reserved <span class="text-primary">Red.Digital Limited 2021</span></span>
            <span class="float-right text-sm-right">Developed by <span class="text-primary">Red.Digital Limited</span></span>
        </footer>
    </div>
</div>

@endsection
