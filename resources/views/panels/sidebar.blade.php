@php
$configData = Helper::applClasses();
@endphp
<div class="main-menu menu-fixed {{($configData['theme'] === 'dark') ? 'menu-dark' : 'menu-light'}} menu-accordion menu-shadow" data-scroll-to-active="true">
  @include('panels._sidebar_header')
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      {{-- Foreach menu item starts --}}
      @if(isset($menuData[0]))
        @foreach($menuData[0]->menu as $menu)
            @if(isset($menu->navheader))
                <li class="navigation-header">
                    <span>{{ __('locale.'.$menu->navheader) }}</span>
                    <i data-feather="more-horizontal"></i>
                </li>
            @else
                {{-- Add Custom Class with nav-item --}}
                @php
                    $custom_classes = "";
                    if(isset($menu->classlist)) {
                        $custom_classes = $menu->classlist;
                    }
                @endphp
                @if (isset($menu->can))
                    @can($menu->can)
                        @include('panels._sidebar_single_menu')
                    @endcan
                @else
                    @include('panels._sidebar_single_menu')
                @endif
            @endif
        @endforeach
      @endif
      {{-- Foreach menu item ends --}}
    </ul>
  </div>
</div>
<!-- END: Main Menu-->
