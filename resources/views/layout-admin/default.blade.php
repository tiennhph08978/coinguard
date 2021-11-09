<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="keywords" content="admin template, Coingruad">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="/storage/{{ $url_favicon->image }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- HTML Meta Tags -->
    <title>{{ $site_name->site_name }} - @yield('title')</title>
    <meta name="description" content="{{ $site_description->site_description}}">
    
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $site_name->site_name }} - @yield('title')">
    <meta itemprop="description" content="{{ $site_description->site_description}}">
    <meta itemprop="image" content="{{ url('') }}/storage/{{ $url_logo->image }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $site_name->site_name }} - @yield('title')">
    <meta property="og:description" content="{{ $site_description->site_description}}">
    <meta property="og:image" content="{{ url('') }}/storage/{{ $url_logo->image }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $site_name->site_name }} - @yield('title')">
    <meta name="twitter:description" content="{{ $site_description->site_description}}">
    <meta name="twitter:image" content="{{ url('') }}/storage/logos/coin.png">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}"> --}}
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/sweetalert2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/js/font-awesome.min.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <!-- END: Custom CSS-->
    <style>
    .btn-success:hover{
        background: #fff !important;
        color: #28c76f !important;
    }
    .btn-primary:hover{
        background: #fff !important;
        color: #7367f0 !important;
    }
    .btn-danger:hover{
        background: #fff !important;
        color: #ea5455 !important;
    }
   /* .main-menu.menu-light .navigation > li.open:not(.menu-item-closing) > a, .main-menu.menu-light .navigation > li.sidebar-group-active > a{color: #fff;background: #7367f0;}*/
    </style>

    {{-- on/off swicth --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toggle.css') }}">
    @yield('style')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layout-admin.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layout-admin.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @include('sweetalert::alert')
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layout-admin.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    {{-- <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script> --}}
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <script src="{{ asset('app-assets/js/sweetalert2.all.js') }}"></script>
    <script src="{{ asset('app-assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('app-assets/js/sweetalert2.min.js') }}"></script>
    <!-- END: Page JS-->
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
        $(".delete").on('click', function(e){
        e.preventDefault();
        const url = $(this).attr('href')
        Swal.fire({
          title: 'Are you delete?',
          // text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
                // var url = $(this).attr('href');
                window.location.href = url;
            }
        })
        return false; 
    })
    $(".active").on('click', function(e){
        e.preventDefault();
        const url = $(this).attr('href')
        Swal.fire({
          title: 'Are you active?',
          // text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
                // var url = $(this).attr('href');
                window.location.href = url;
            }
        })
        return false; 
    })
    $(".unactive").on('click', function(e){
        e.preventDefault();
        const url = $(this).attr('href')
        Swal.fire({
          title: 'Are you Unactive?',
          // text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
                // var url = $(this).attr('href');
                window.location.href = url;
            }
        })
        return false; 
    })
    </script>
    @yield('script')
</body>
<!-- END: Body-->

</html>