    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
        data-nav="brand-center">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i
                                class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <a href="/">
                    <img src="/storage/{{ $url_logo->image }}" alt="">
                </a>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"
                        href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a
                            class="dropdown-item" href="javascript:void(0);" data-language="en"><i
                                class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item"
                            href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr"></i>
                            French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i
                                class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item"
                            href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt"></i>
                            Portuguese</a></div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style" onclick="change()"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                            data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link"
                        href="javascript:void(0);" data-toggle="dropdown"><i class="ficon"
                            data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img
                                                src="../../../app-assets/images/portrait/small/avatar-s-15.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam
                                                🎉</span>winner!</p><small class="notification-text"> Won the monthly
                                            best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar"><img
                                                src="../../../app-assets/images/portrait/small/avatar-s-3.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">New
                                                message</span>&nbsp;received</p><small class="notification-text"> You
                                            have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Revised Order
                                                👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                            order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="media d-flex align-items-center">
                                <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                                <div class="custom-control custom-control-primary custom-switch">
                                    <input class="custom-control-input" id="systemNotification" type="checkbox"
                                        checked="">
                                    <label class="custom-control-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Server
                                                down</span>&nbsp;registered</p><small class="notification-text"> USA
                                            Server is down due to hight CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Sales
                                                report</span>&nbsp;generated</p><small class="notification-text"> Last
                                            month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">High
                                                memory</span>&nbsp;usage</p><small class="notification-text"> BLR
                                            Server
                                            using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block"
                                href="javascript:void(0)">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user">
                    @if (auth()->check())
                        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user"
                            href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name font-weight-bolder">
                                    {{Auth::user()->name}}
                                </span>
                                {{-- <span class="user-status">Admin</span> --}}
                            </div><span
                                class="avatar"><img class="round"
                                    src="{{ asset('avt/avatardefault.png') }}" alt="avatar"
                                    height="40" width="40"><span class="avatar-status-online"></span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                            <div
                                class="dropdown-divider {{ request()->routeIs('font-ends.setting') ? 'active' : '' }}">
                            </div>
                            @can('user-list')
                            <a class="dropdown-item" href="{{ route('admin.user') }}">
                                <i class="mr-50" data-feather="user"></i> Manage User
                            </a>    
                            @endcan

                            @can('role-list')
                            <a class="dropdown-item" href="{{ route('admin.user') }}">
                                <i class="mr-50" data-feather="credit-card"></i> Manage Role
                            </a>    
                            @endcan
                            
                            @can('coin-list')
                            <a class="dropdown-item" href="{{ route('admin.user') }}">
                                <i class="mr-50" data-feather="dollar-sign"></i> Manage Coin
                            </a>    
                            @endcan
                            
                            <a class="dropdown-item" href="{{ route('font-ends.setting') }}">
                                <i class="mr-50" data-feather="settings"></i> Settings
                            </a>

                            <a class="dropdown-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="mr-50" data-feather="power"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                @csrf
                            </form>
                        </div>
                    @else
                    @endif
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
                    <div class="mr-75"><img src="../../../app-assets/images/icons/xls.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing
                            Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/jpg.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small
                            class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/pdf.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small
                            class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/doc.png" alt="png"
                            height="32"></div>
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
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI
                            designer</small>
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
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital
                            Marketing
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
            </a>
        </li>
    </ul>
    <!-- END: Header-->
<script>
        function change() {
      var element = document.body;
      element.classList.toggle("dark-layout");
    
      if (element.classList.contains("dark-layout")) {
     //if class was added to body
        localStorage.setItem("background", "dark-layout");
     //save information in "background" localStorage variable, use dark-layout class name
      } else {
        localStorage.setItem("background", "");
    //if class was removed set background" localStorage variable to null
      }
    }
    
    document.addEventListener("DOMContentLoaded", function(event) {
//when loading document
      var background = localStorage.getItem("background");
    // get localStorage var background
      if (background) {
    // if its not null and empty
        document.body.className += background;
    //add class to body
      }
    });
</script>
{{-- aaaa --}}
<div class="is-mobile">
    <nav class="navbar navbar-dark" style="background: #111621;">
        <a class="navbar-brand" href="{{ route('font-ends.index') }}">
            <img src="/storage/{{ $url_logo->image }}" height="30px" width="150" alt="">
        </a>
        <div style="display: flex;">
            <span class="mr-1" style="margin-top: 1rem !important;" data-toggle="collapse" data-target="#search"
                aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-search text-white"></i>
            </span>

            <a class="nav-link d-lg-block" id="dark-mode-toggle-mobile" style="padding-top: 10px">

                <input type="checkbox" id="hide-checkbox-mobile">
                <label for="hide-checkbox-mobile" class="toggle">
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
            {{-- </li> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hhh"
                aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="collapse" id="search">
        <div class="input-group input-group-merge has-search">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon-search2"><i data-feather="search"></i></span>
            </div>
            <input type="text" id="searchCoin1" class="form-control" placeholder="Search..." aria-label="Search..."
                aria-describedby="basic-addon-search2" />
            <div class="countryList results">
            </div>
        </div>
    </div>
    <div class="collapse" id="hhh">
        <div class="container-fluid">
            <div class="row">
                <a href="{{ route('font-ends.index') }}" class="nav-item col-md-6 col-12 box text-white"><i
                        class="fas fa-coins"></i> <strong data-i18n="Coin">Coin</strong></a>
                <a href="{{ route('font-ends.submit-coin') }}" class="nav-item col-md-6 col-12 box text-white">
                    <strong><i class="fas fa-upload"></i> <span data-i18n="Submit Coin">Submit Coin</span> </strong>
                </a>
                <a href="{{ route('font-ends.portfolio') }}" class="nav-item col-md-6 col-12 box text-white">
                    <strong><i class="fas fa-wallet"></i> <span data-i18n="Portfolio">Portfolio</span> </strong>
                </a>
                <a href="{{ route('font-ends.watch-list') }}" class="nav-item col-md-6 col-12 box text-white">
                    <strong><i class="fas fa-star"></i> <span data-i18n="Watchlist">Watchlist</span> </strong>
                </a>
                @if (auth()->check())
                @can('coin-list')
                <a class="nav-item col-md-12 col-12 box text-white" href="{{ route('admin.index') }}">
                    <strong><i class="fas fa-cogs"></i> <span data-i18n="Manage">Manage</span> </strong>
                </a>
                @endcan
                <a class="nav-item col-md-12 col-12 box text-white" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <strong><i class="fas fa-sign-in-alt"></i> <span data-i18n="Logout">Logout</span> </strong>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                    @csrf
                </form>
                @else
                <a class="nav-item col-md-12 col-12 box text-white" href="{{ route('login') }}">
                    <strong><i class="fas fa-sign-in-alt"></i>
                        <span data-i18n="Login">Login</span> </strong></a>
                <a class="nav-item col-md-12 col-12 box text-white" href="{{ route('register') }}">
                    <i class="fas fa-user-plus"></i>
                    <strong data-i18n="Register">Register</strong></a>
                @endif
                <a href="{{ $twitter_link->twitter_link }}" target="_blank"
                    class="nav-item col-md-6 col-12 box text-white"
                    style="background: #97b4f4d9;border-right:1px solid #ccc ;"> <i
                        class="fab fa-twitter fa-lg text-white"></i> <strong data-i18n="Follow us on twitter!">
                        Follow us on twitter!</strong></a>
                <a href="{{ $telegram_link->telegram_link }}" target="_blank"
                    class="nav-item col-md-6 col-12 box text-white" style="background: #97b4f4d9;"><i
                        class="fab fa-telegram fa-lg text-white"></i> <strong data-i18n="Join our Telegram group!">
                        Join our Telegram group! </strong></a>
            </div>
        </div>
    </div>
</div>