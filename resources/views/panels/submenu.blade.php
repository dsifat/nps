{{-- For submenu --}}
<ul class="menu-content">
  @if(isset($menu))
    @foreach($menu as $submenu)
        @if (isset($submenu->can))
            @if (isset($submenu->canparams))
                @can($submenu->can, $submenu->canparams)
                    @include('panels/_submenu_single_submenu')
                @endcan
            @else
                @can($submenu->can)
                    @include('panels/_submenu_single_submenu')
                @endcan
            @endif
        @elseif (isset($submenu->role))
            @can('role', $submenu->role)
                @include('panels/_submenu_single_submenu')
            @endcan
        @else
            @include('panels/_submenu_single_submenu')
        @endif
    @endforeach
  @endif
</ul>
