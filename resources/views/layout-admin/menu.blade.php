 {{-- BEGIN: Main Menu --}}
{{-- d-xl-none --}}
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('admin.index') }}">
                    <img src="/storage/{{ $url_logo->image }}" height="35px" alt="">
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    {{-- <div class="shadow-bottom"></div> --}}
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ (request()->routeIs('admin.index')) ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('admin.index') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home">Home</span></a>
            </li>
            {{-- <li class=" navigation-header"><span data-i18n="Apps">Apps</span> &amp; <span data-i18n="Pages">Pages</span><i data-feather="more-horizontal"></i>
            </li> --}}
            <li class="{{ (request()->routeIs('admin.coin')) ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('admin.coin') }}"><i data-feather="dollar-sign"></i><span class="menu-title text-truncate" data-i18n="Coin">Coin</span></a>
            </li>
            <li class="{{ (request()->routeIs('admin.logo') || request()->routeIs('admin.add-logo') || request()->routeIs('admin.edit-logo')) ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('images.index') }}"><i data-feather="image"></i><span class="menu-title text-truncate" data-i18n="Image">Image</span></a>
            </li>
            <li class=" nav-item {{ (request()->routeIs('admin.user') || request()->routeIs('admin.add-user') || request()->routeIs('admin.edit-user')) || (request()->routeIs('admin.role') || request()->routeIs('admin.add-role') || request()->routeIs('admin.edit-role'))  ? 'active' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">User</span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->routeIs('admin.user') || request()->routeIs('admin.add-user') || request()->routeIs('admin.edit-user')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('users.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="User-List">User-List</span></a>
                    </li>
                    @can('role-list')
                    <li class="{{ (request()->routeIs('admin.role') || request()->routeIs('admin.add-role') || request()->routeIs('admin.edit-role')) ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('roles.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="User-Role">User-Role</span></a>
                    </li>
                    @endcan
                </ul>
            </li>
            <li class="{{ (request()->routeIs('banner.index') || request()->routeIs('banner.create') ) ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('banner.index') }}"><i data-feather='link-2'></i><span class="menu-title text-truncate" data-i18n="Banner adver">Banner adver</span></a>
            </li>
            @can('role-list')
            <li class="{{ (request()->routeIs('admin.setting')) ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('admin.setting') }}"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Setting">Setting</span></a> 
            @endcan
            </li>
        </ul>
    </div>
</div>
{{-- END: Main Menu --}}