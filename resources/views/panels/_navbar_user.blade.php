<li class="nav-item dropdown dropdown-user">
    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @auth
            <div class="user-nav d-sm-flex d-none">
                <span class="user-name font-weight-bolder">{{ auth()->user()->name }}</span>
                {{-- <span class="user-status">User type</span> --}}
            </div>
            {{-- <span class="avatar">
                <img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40">
                <span class="avatar-status-online"></span>
            </span> --}}
        @endauth
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
    {{-- <a class="dropdown-item" href="{{url('page/profile')}}">
        <i class="mr-50" data-feather="user"></i> Profile
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{url('page/account-settings')}}">
        <i class="mr-50" data-feather="settings"></i> Settings
    </a> --}}
    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="mr-50" data-feather="power"></i> Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </div>
</li>
