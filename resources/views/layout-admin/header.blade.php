<!-- BEGIN: Header-->

<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-fluid">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            {{-- d-xl-none --}}
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i
                            class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                {{-- d-none  --}}
                <li class="nav-item d-lg-block d-none"><a class="nav-link" data-toggle="tooltip" data-placement="top" title="Home" href="{{ route('admin.index') }}">
                    <i class="ficon" data-feather="home"></i></a></li>
                <li class="nav-item d-lg-block d-none"><a class="nav-link" data-toggle="tooltip" data-placement="top" title="Image" href="{{ route('images.index') }}">
                    <i class="ficon" data-feather="image"></i></a></li>
                <li class="nav-item d-lg-block d-none"><a class="nav-link" data-toggle="tooltip" data-placement="top" title="User" href="{{ route('users.index') }}">
                    <i class="ficon" data-feather="user"></i></a></li>
                <li class="nav-item d-lg-block d-none"><a class="nav-link" data-toggle="tooltip" data-placement="top" title="Settings" href="{{ route('admin.setting') }}">
                    <i class="ficon" data-feather="settings"></i></a></li>
                <li class="nav-item d-lg-block d-none"><a class="nav-link" data-toggle="tooltip" data-placement="top" title="Banner" href="{{ route('banner.index') }}">
                    <i data-feather='link-2'></i></a></li>        
                        
            </ul>
            <!-- <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                    <div class="bookmark-input search-input">
                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                        <ul class="search-list search-list-bookmark"></ul>
                    </div>
                </li>
            </ul> -->
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"
                    href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="flag-icon flag-icon-us" style="font-size: 19px;"></i><span class="selected-language">English</span></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag">
                    <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                        <i class="flag-icon flag-icon-us">
                        </i> English</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="in">
                        <i class="flag-icon flag-icon-in">
                        </i> India</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="ru">
                        <i class="flag-icon flag-icon-ru"></i> Russia</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="pt"><i
                            class="flag-icon flag-icon-pt">
                        </i> Portuguese</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="ir"><i
                            class="flag-icon flag-icon-ir">
                        </i> Iran</a>
                </div>
            </li>
            <li class="nav-item d-lg-block">
                <a class="nav-link" id="dark-mode-toggle"  style="padding-top: 10px">
                    {{-- <i class="ficon" id="icon" data-feather="moon"></i> --}}
                    {{-- <label class="switch" >
                        <input id="checkBox" type="checkbox" checked>
                        <span class="slider round"></span>
                    </label> --}}
                    <input type="checkbox" id="hide-checkbox">
                    <label for="hide-checkbox" class="toggle">
                        <span class="toggle-button">
                            <span class="crater crater-1"></span>
                            <span class="crater crater-2"></span>
                            <span class="crater crater-3"></span>
                            <span class="crater crater-4"></span>
                            <span class="crater crater-5"></span>
                            <span class="crater crater-6"></span>
                            <span class="crater crater-7"></span>
                        </span>
                        <span class="star star-1"></span>
                        <span class="star star-2"></span>
                        <span class="star star-3"></span>
                        <span class="star star-4"></span>
                        <span class="star star-5"></span>
                        <span class="star star-6"></span>
                        <span class="star star-7"></span>
                        <span class="star star-8"></span>
                    </label>
                </a>
            </li>
            {{-- <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                        data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li> --}}
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name font-weight-bolder">
                            {{Auth::user()->name}}
                        </span>
                        {{-- <span class="user-status">Admin</span> --}}
                    </div><span class="avatar">
                        <img class="round" src="{{ asset('avt/avatardefault.png') }}"
                            alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item d-lg-block" href="{{route('font-ends.index')}}"><i data-feather='airplay' class="mr-1"></i>Page</a>
                    <div class="dropdown-divider"></div>
                            {{-- <a class="dropdown-item" href="{{ route('font-ends.setting') }}"><i
                            class="mr-50" data-feather="settings"></i> Settings</a> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                            class="mr-50" data-feather="power"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="javascript:void(0);">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="mr-75"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small
                        class="text-muted">Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="mr-75"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="mr-75"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="mr-75"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                        Designer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="javascript:void(0);">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view.html">
            <div class="d-flex align-items-center">
                <div class="avatar mr-75"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                        Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75"
                    data-feather="alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
<!-- END: Header -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
let darkMode = localStorage.getItem('darkMode');
let checkBox = $('#hide-checkbox');

const darkModeToggle = document.querySelector('#dark-mode-toggle');
// check if dark mode is enabled
// if it's enabled,turn it off
// if it's enabled,turn it on

const enableDarrkMode = ()=>{
    document.body.classList.add('dark-layout');
    darkMode = "enabled";
    localStorage.setItem('darkMode','enabled');
};

const disableDarkMode = ()=>{
    document.body.classList.remove('dark-layout');
    darkMode = null;
    localStorage.setItem('darkMode',null);
};

if (darkMode === "enabled") {
    checkBox.replaceWith('<input type="checkbox" id="hide-checkbox" checked>');
    enableDarrkMode();
} else {
    disableDarkMode();
}
$("#hide-checkbox").on("input", function() {
    if (darkMode !== "enabled") {
        enableDarrkMode();
    }else{
        disableDarkMode();
    }
});
</script>
