@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
{{-- {!! Helper::applClasses() !!} --}}
@php
  $configData = Helper::applClasses();
@endphp
<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif"
      data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}"
      class="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') - {{ config('app.full_name') }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

  {{-- Include core + vendor Styles --}}
  @include('panels/styles')

</head>

<body class="vertical-layout vertical-menu-modern bg-white {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }} {{($configData['theme'] === 'dark') ? 'dark-layout' : 'light' }}"
      data-menu="vertical-menu-modern"
      data-layout="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}"
      style="{{ $configData['bodyStyle'] }}" data-framework="laravel" data-asset-path="{{ asset('/')}}">

<!-- BEGIN: Content-->
  <div class="app-content content {{ $configData['pageClass'] }}">
    <div class="content-wrapper container p-0">
      <div class="content-body">

        {{-- Include Startkit Content --}}
        <div class="row">
          <div class="col-sm-3 bg-primary">
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
          <div class="col-sm-9">
            <div class="auth-wrapper auth-v1 px-2">
              <div class="auth-inner py-2">
                <!-- Login v1 -->
                @yield('content')
              </div>
              <footer class="footer-inside">
                <span class="text-sm-left">Copyright © All Rights Reserved <span
                          class="text-primary">Red.Digital Limited </span>2021</span>
                <span class="float-right text-sm-right">Developed by <span class="text-primary">Red.Digital Limited</span></span>
              </footer>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End: Content-->
  {{-- include default scripts --}}
  @include('panels/scripts')

  <script type="text/javascript">
      $(window).on('load', function () {
          if (feather) {
              feather.replace({
                  width: 14
                  , height: 14
              });
          }
      })
  </script>

</body>

</html>
