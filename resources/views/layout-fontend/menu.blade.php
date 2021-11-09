<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('font-ends.index') }}">
                    <img src="../../../app-assets/images/logo/coin.png" height="30px" width="150px" alt="">
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav justify-content-center" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item mr-1 {{ (request()->routeIs('font-ends.index')) ? 'active' : '' }}"><a class="nav-link d-flex align-items-center" href="{{ route('font-ends.index') }}"><i class="fas fa-coins"></i><span data-i18n="Dashboards">Coins</span></a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i class="far fa-user"></i><span data-i18n="Charts &amp; Maps">Account</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ (request()->routeIs('font-ends.portfolio')) ? 'active' : '' }}" data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{ route('font-ends.portfolio') }}" data-toggle="dropdown" data-i18n="Portfolio"><i class="fas fa-wallet"></i><span data-i18n="Documentation">Portfolio</span></a>
                        </li>
                        <li class="{{ (request()->routeIs('font-ends.watch-list')) ? 'active' : '' }}" data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{ route('font-ends.watch-list') }}" data-toggle="dropdown" data-i18n="Watchlist"><i class="fas fa-star"></i><span data-i18n="Raise Support"> Watchlist</span></a>
                        </li>
                        @if (auth()->check())

                        @else
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{ route('login')}}" data-toggle="dropdown" data-i18n="Login"><i class="fas fa-sign-in-alt"></i><span data-i18n="Raise Support">Login</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="{{ route('register') }}" data-toggle="dropdown" data-i18n="Register"><i class="fas fa-user-plus"></i><span data-i18n="Raise Support"> Register</span></a>
                        @endif
                        </li>
                    </ul>
                </li>
                <li class="nav-item mr-1"><a class="nav-link d-flex align-items-center" href="#"><i class="fab fa-telegram"></i><span data-i18n="Misc">Telegram</span></a>
                </li>
                <li class="nav-item mr-1"><a class="nav-link d-flex align-items-center" href="#"><i class="fab fa-twitter"></i><span data-i18n="Misc">Twitter</span></a>
                </li>
                <li class="nav-item mr-1 {{ (request()->routeIs('font-ends.submit-coin')) ? 'active' : '' }}">
                <a class="btn btn-success" href="{{ route('font-ends.submit-coin') }}">
                    <strong><i class="fas fa-upload"></i> Submit Coin</strong>
                </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->