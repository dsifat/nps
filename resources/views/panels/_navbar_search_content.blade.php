<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center">
        <a href="javascript:void(0);">
        <h6 class="section-label mt-75 mb-0">Files</h6>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between w-100" href="{{url('app/file-manager')}}">
        <div class="d-flex">
            <div class="mr-75">
            <img src="{{asset('images/icons/xls.png')}}" alt="png" height="32">
            </div>
            <div class="search-data">
            <p class="search-data-title mb-0">Two new item submitted</p>
            <small class="text-muted">Marketing Manager</small>
            </div>
        </div>
        <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between w-100" href="{{url('app/file-manager')}}">
        <div class="d-flex">
            <div class="mr-75">
            <img src="{{asset('images/icons/jpg.png')}}" alt="png" height="32">
            </div>
            <div class="search-data">
            <p class="search-data-title mb-0">52 JPG file Generated</p>
            <small class="text-muted">FontEnd Developer</small>
            </div>
        </div>
        <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between w-100" href="{{url('app/file-manager')}}">
        <div class="d-flex">
            <div class="mr-75">
            <img src="{{asset('images/icons/pdf.png')}}" alt="png" height="32">
            </div>
            <div class="search-data">
            <p class="search-data-title mb-0">25 PDF File Uploaded</p>
            <small class="text-muted">Digital Marketing Manager</small>
            </div>
        </div>
        <small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between w-100" href="{{url('app/file-manager')}}">
        <div class="d-flex">
            <div class="mr-75">
            <img src="{{asset('images/icons/doc.png')}}" alt="png" height="32"></div>
            <div class="search-data">
            <p class="search-data-title mb-0">Anna_Strong.doc</p>
            <small class="text-muted">Web Designer</small>
            </div>
        </div>
        <small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a>
    </li>
    <li class="d-flex align-items-center">
        <a href="javascript:void(0);">
        <h6 class="section-label mt-75 mb-0">Members</h6>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between py-50 w-100" href="{{url('app/user/view')}}">
        <div class="d-flex align-items-center">
            <div class="avatar mr-75">
            <img src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32">
            </div>
            <div class="search-data">
            <p class="search-data-title mb-0">John Doe</p>
            <small class="text-muted">UI designer</small>
            </div>
        </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between py-50 w-100" href="{{url('app/user/view')}}">
        <div class="d-flex align-items-center">
            <div class="avatar mr-75">
            <img src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32">
            </div>
            <div class="search-data">
            <p class="search-data-title mb-0">Michal Clark</p>
            <small class="text-muted">FontEnd Developer</small>
            </div>
        </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between py-50 w-100" href="{{url('app/user/view')}}">
        <div class="d-flex align-items-center">
            <div class="avatar mr-75">
            <img src="{{asset('images/portrait/small/avatar-s-14.jpg')}}" alt="png" height="32">
            </div>
            <div class="search-data">
            <p class="search-data-title mb-0">Milena Gibson</p>
            <small class="text-muted">Digital Marketing Manager</small>
            </div>
        </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="d-flex align-items-center justify-content-between py-50 w-100" href="{{url('app/user/view')}}">
        <div class="d-flex align-items-center">
            <div class="avatar mr-75">
            <img src="{{asset('images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32">
            </div>
            <div class="search-data">
            <p class="search-data-title mb-0">Anna Strong</p>
            <small class="text-muted">Web Designer</small>
            </div>
        </div>
        </a>
    </li>
</ul>

 {{-- if main search not found! --}}
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between">
        <a class="d-flex align-items-center justify-content-between w-100 py-50">
        <div class="d-flex justify-content-start">
            <span class="mr-75" data-feather="alert-circle"></span>
            <span>No results found.</span>
        </div>
        </a>
    </li>
</ul>