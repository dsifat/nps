<div class="bookmark-wrapper d-flex align-items-center">
    <ul class="nav navbar-nav d-xl-none">
    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
    </ul>
    <ul class="nav navbar-nav bookmark-icons">
    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/email')}}" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/chat')}}" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/calendar')}}" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{url('app/todo')}}" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
    </ul>
    <ul class="nav navbar-nav">
    <li class="nav-item d-none d-lg-block">
        <a class="nav-link bookmark-star">
        <i class="ficon text-warning" data-feather="star"></i>
        </a>
        <div class="bookmark-input search-input">
        <div class="bookmark-input-icon">
            <i data-feather="search"></i>
        </div>
        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
        <ul class="search-list search-list-bookmark"></ul>
        </div>
    </li>
    </ul>
</div>