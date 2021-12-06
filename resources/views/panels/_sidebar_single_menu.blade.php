<li class="nav-item {{ Helper::setActive($menu->slug ?? '') }} {{ $custom_classes }}">
    <a href="{{isset($menu->url)? url($menu->url):'javascript:void(0)'}}" class="d-flex align-items-center" target="{{isset($menu->newTab) ? '_blank':'_self'}}">
        <i data-feather="{{ $menu->icon }}"></i>
        <span class="menu-title text-truncate">{{ __('locale.'.$menu->name) }}</span>
        @if (isset($menu->badge))
            <?php $badgeClasses = "badge badge-pill badge-light-primary ml-auto mr-1" ?>
            <span class="{{ isset($menu->badgeClass) ? $menu->badgeClass : $badgeClasses }} ">{{$menu->badge}}</span>
        @endif
    </a>
    @if(isset($menu->submenu))
        @include('panels/submenu', ['menu' => $menu->submenu])
    @endif
</li>
