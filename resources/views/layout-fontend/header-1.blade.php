<style>
    .box {
        padding: 1rem 1.5rem;
        border-bottom: 1px solid #ccc;
        background-color: #3c4e77;
    }

    .box:hover {
        background: rgba(255, 255, 255, 0.1);
        border-right: 1px solid #ccc;
    }
</style>
<div class="is-desktop">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #111621;">
        <a class="navbar-brand" href="{{ route('font-ends.index') }}">
            <img src="/storage/{{ $url_logo->image }}" height="30px" width="150" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav m-auto">
                <li class="nav-item {{ request()->routeIs('font-ends.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('font-ends.index') }}" data-i18n="Coin">Coin </a>
                </li>
                <li class="nav-item" style="width: 300px;">
                    <div class="input-group input-group-merge has-search">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white" id="basic-addon-search2"><i
                                    data-feather="search"></i></span>
                        </div>
                        <input type="text" id="searchCoin1" class="form-control bg-white" data-i18n="Search"
                            placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search2" />
                        <div class="countryList results">
                        </div>
                    </div>
                </li>
                <li
                    class="nav-item dropdown {{ request()->routeIs('font-ends.portfolio') || request()->routeIs('font-ends.watch-list') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-i18n="Account">
                        Account
                    </a>
                    <div class="dropdown-menu" style="background: #7367f0;" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ request()->routeIs('font-ends.portfolio') ? 'active' : '' }}"
                            href="{{ route('font-ends.portfolio') }}">
                            <i class="fas fa-wallet"></i>
                            <span data-i18n="Portfolio">Portfolio</span> </a>
                        <a class="dropdown-item {{ request()->routeIs('font-ends.watch-list') ? 'active' : '' }}"
                            href="{{ route('font-ends.watch-list') }}">
                            <i class="fas fa-star"></i>
                            <span data-i18n="Watchlist"> Watchlist</span></a>
                        @if (auth()->check())
                        @can('coin-list')
                        <a class="dropdown-item" href="{{ route('admin.index') }}">
                            <i class="fas fa-cogs"></i> <span data-i18n="Manage"> Manage</span>
                        </a>
                        @endcan
                        <a class="dropdown-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-in-alt"></i> <span data-i18n="Logout"> Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                            @csrf
                        </form>
                        @else
                        <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>
                            <span data-i18n="Login"> Login</span></a>
                        <a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-user-plus"></i>
                            <span data-i18n="Register"> Register</span></a>
                        @endif
                    </div>
                </li>
                <li class="nav-item">
                    <div class="sosial-links">
                        <a href="{{ $telegram_link->telegram_link }}" data-toggle="tooltip" data-placement="top" title="Telegram"  target="_blank"><i
                                class="fab fa-telegram fa-lg text-primary"></i></a>
                        <a href="{{ $twitter_link->twitter_link }}" data-toggle="tooltip" data-placement="top" title="Twitter"  target="_blank"><i
                                class="fab fa-twitter fa-lg text-primary"></i></a>
                    </div>
                </li>
                <li class="nav-item {{ request()->routeIs('font-ends.submit-coin') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('font-ends.submit-coin') }}">
                        <strong>
                            <i class="fas fa-upload"></i>
                            <span data-i18n="Submit Coin">Submit Coin</span>
                        </strong>
                    </a>
                </li>
                {{-- <li class="nav-item d-none d-lg-block"><a
                        class="nav-link nav-link-style text-white font-weight-bold" id="dark-mode-toggle"><i
                            class="ficon" data-feather="moon"></i></a></li> --}}
            </ul>
            <ul class="nav navbar-nav  ">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" id="dark-mode-toggle" style="padding-top: 15px">

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
            </ul>
            <ul class="nav navbar-nav  ">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"
                        href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
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
            </ul>
        </div>
    </nav>
</div>
{{-- end-desktop --}}
{{-- mobile --}}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    let darkMode = localStorage.getItem('darkMode');
    let darkModeMobile = localStorage.getItem('darkModeMobile');
    let checkBox = $('#hide-checkbox');
    let checkBoxMobile = $('#hide-checkbox-mobile');

    const darkModeToggle = document.querySelector('#dark-mode-toggle');

    const enableDarrkMode = () => {
        document.body.classList.add('dark-layout');
        darkMode = "enabled";
        darkModeMobile = "enabled";
        localStorage.setItem('darkMode', 'enabled');
        localStorage.setItem('darkModeMobile', 'enabled');
    };

    const disableDarkMode = () => {
        document.body.classList.remove('dark-layout');
        darkMode = null;
        darkModeMobile = null;
        localStorage.setItem('darkMode', null);
        localStorage.setItem('darkModeMobile', null);
    };

    if (darkMode === "enabled") {
        checkBoxMobile.replaceWith('<input type="checkbox" id="hide-checkbox-mobile" checked>');
        checkBox.replaceWith('<input type="checkbox" id="hide-checkbox" checked>');
        enableDarrkMode();
    } else {
        disableDarkMode();
    }
    $("#hide-checkbox").on("input", function () {
        if (darkMode !== "enabled") {
            enableDarrkMode();
        } else {
            disableDarkMode();
        }
    });

    $("#hide-checkbox-mobile").on("input", function () {
        if (darkModeMobile !== "enabled") {
            enableDarrkMode();
        } else {
            disableDarkMode();
        }
    });
</script>