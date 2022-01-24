@extends('layouts/authMaster')

@section('title', 'OTP Verification')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-otp.css')) }}">
@endsection

@section('content')
  <div class="container">
    <div class="position-relative">
      <h3 class="text-center font-weight-bold">OTP Verification</h3>
      <form class="auth-forgot-password-form mt-2" method="POST" action="/">
        @csrf
        <div id="otp" class="inputs d-flex flex-row justify-content-center">
          <input class="m-1 text-center form-control rounded" type="number" id="first" maxlength="1">
          <input class="m-1 text-center form-control rounded" type="number" id="second" maxlength="1">
          <input class="m-1 text-center form-control rounded" type="number" id="third" maxlength="1">
          <input class="m-1 text-center form-control rounded" type="number" id="fourth" maxlength="1">
          <input class="m-1 text-center form-control rounded" type="number" id="fifth" maxlength="1">
          <input class="m-1 text-center form-control rounded" type="number" id="sixth" maxlength="1">
        </div>
        <div class="mb-2 text-sm-center mt-0" style="font-size: 11px">
          Mobile number must contains 10 digits and start with 16 or 18. Example: 18xxxxxxxx or 16xxxxxxxx
        </div>
        <button type="submit" class="btn btn-primary btn-block" tabindex="2">Verify OTP</button>
      </form>
      <p class="text-right mt-2">
        @if (Route::has('login'))
          <a href="{{ route('login') }}"> <i data-feather="chevron-left"></i> Go back to Sign In </a>
        @endif
      </p>
    </div>
  </div>
@endsection
@section('page-script')
  <script>
      document.addEventListener("DOMContentLoaded", function (event) {
          function OTPInput() {
              const inputs = document.querySelectorAll('#otp > *[id]');
              for (let i = 0; i < inputs.length; i++) {
                  inputs[i].addEventListener('keydown', function (event) {
                      if (event.key === "Backspace") {
                          inputs[i].value = '';
                          if (i !== 0) inputs[i - 1].focus();
                      } else {
                          if (i === inputs.length - 1 && inputs[i].value !== '') {
                              return true;
                          } else if (event.keyCode > 47 && event.keyCode < 58) {
                              inputs[i].value = event.key;
                              if (i !== inputs.length - 1) inputs[i + 1].focus();
                              event.preventDefault();
                          } else if (event.keyCode > 64 && event.keyCode < 91) {
                              inputs[i].value = String.fromCharCode(event.keyCode);
                              if (i !== inputs.length - 1) inputs[i + 1].focus();
                              event.preventDefault();
                          }
                      }
                  });
              }
          }

          OTPInput();
      });
  </script>
@endsection
