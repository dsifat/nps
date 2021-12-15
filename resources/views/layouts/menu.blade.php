




<li class="nav-item">
    <a href="{{ route('backend.roles.index') }}"
       class="nav-link {{ Request::is('backend/roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('backend.permissions.index') }}"
       class="nav-link {{ Request::is('backend/permissions*') ? 'active' : '' }}">
        <p>Permissions</p>
    </a>
</li>



<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
<li class="nav-item">
    <a href="{{ route('backend.isps.index') }}"
       class="nav-link {{ Request::is('backend/isps*') ? 'active' : '' }}">
        <p>Isps</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('backend.packages.index') }}"
       class="nav-link {{ Request::is('backend/packages*') ? 'active' : '' }}">
        <p>Packages</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('backend.subjects.index') }}"
       class="nav-link {{ Request::is('backend/subjects*') ? 'active' : '' }}">
        <p>Subjects</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('backend.questions.index') }}"
       class="nav-link {{ Request::is('backend/questions*') ? 'active' : '' }}">
        <p>Questions</p>
    </a>
</li>


