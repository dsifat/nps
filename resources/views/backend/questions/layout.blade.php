<body class="vertical-layout vertical-menu-modern {{ $configData['showMenu'] === true ? '2-columns' : '1-column' }}
{{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }}
{{ $configData['verticalMenuNavbarType'] }}
{{ $configData['sidebarClass'] }} {{ $configData['footerType'] }}" data-menu="vertical-menu-modern" data-col="{{ $configData['showMenu'] === true ? '2-columns' : '1-column' }}" data-layout="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}" style="{{ $configData['bodyStyle'] }}" data-framework="laravel" data-asset-path="{{ asset('/')}}">

{{-- Include Sidebar --}}
@if((isset($configData['showMenu']) && $configData['showMenu'] === true))
  @include('panels.sidebar')
@endif

{{-- Include Navbar --}}
@include('panels.navbar')

<!-- BEGIN: Content-->
<div class="app-content content {{ $configData['pageClass'] }}">
  <!-- BEGIN: Header-->
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  @if(($configData['contentLayout']!=='default') && isset($configData['contentLayout']))
    <div class="content-area-wrapper flex-column">
      <div class="container">
        <h3 class="float-left">All Question</h3>
        <div class="button-grp float-right">
          <ul class="list-inline m-0">
            <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>
            <li><a class="btn btn-outline-dark">Preview</a></li>
            <li><a class="btn btn-primary">Add Question</a></li>
          </ul>
        </div>
      </div>
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General Survey</a>
          <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Telephonic Survey</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div>
            <div class="{{ $configData['sidebarPositionClass'] }}">
              <div class="sidebar">
                {{-- Include Sidebar Content --}}
                @yield('content-sidebar')
              </div>
            </div>
            <div class="{{ $configData['contentsidebarClass'] }}">
              <div class="content-wrapper">
                <div class="content-body">

                  {{-- Include Page Content --}}
                  @yield('content')
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">asdsd</div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
      </div>

    </div>
  @endif

</div>
<!-- End: Content-->

{{-- @if($configData['blankPage'] == false && isset($configData['blankPage']))
@include('content/pages/customizer')

@include('content/pages/buy-now')
@endif --}}

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


{{-- include default scripts --}}
@include('panels/scripts')

@yield('third_party_scripts')

<script type="text/javascript">
    $(window).on('load', function() {
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
