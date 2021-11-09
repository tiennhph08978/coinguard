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
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">
    <!-- END: Vendor CSS-->
    {{--
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('app-assets/js/jquery.dataTables.min.css') }}">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/charts/chart-apex.css') }}">
    {{--
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css') }}"> --}}
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    
    {{-- <link rel="stylesheet" href="{{ asset('app-assets/js/font-awesome.css') }}"> --}}


    {{-- <link rel="stylesheet" href="{{ asset('app-assets/js/font-awesome.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('app-assets/js/all.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
     {{-- on/off swicth --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toggle.css') }}">

    @yield('style')
    <style>
        table.dataTable thead th{
            font-size: 15px;
        }
        .nameTd {
            font-weight: bold;
            font-size: 19px;
        }
        .is-hidden {
            display: none !important;
        }

        table.dataTable thead .sorting {
            background-image: url() !important;
        }

        table.dataTable thead .sorting_asc {
            background-image: url() !important;
        }

        table.dataTable thead .sorting_desc {
            background-image: url() !important;
        }

        .table-hover tbody tr td {
            color: #ffeded !important;
             font-size: 1.2rem;
        }

        .table-hover tbody tr:hover td {
            /*opacity: 0.5 !important;*/
            background: #ccc !important;
            color: #000 !important;
        }

        .navbar-light .navbar-nav .show>.nav-link,
        .navbar-light .navbar-nav .active>.nav-link,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .nav-link.active {
            color: #7367f0 !important;
        }

        .navbar-light .navbar-nav .show>.nav-link,
        .navbar-light .navbar-nav .active>.nav-link,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .nav-item {
            font-weight: 700;
            font-size: 18px;
            margin-left: 25px;
        }

        .sosial-links a {
            background: #fff;
            display: block;
            float: left;
            width: 36px;
            height: 36px;
            border: 2px solid #909090;
            border-radius: 20px;
            margin-right: 8px;
            /*space between*/

        }

        .sosial-links a i {
            padding: 9px 7px;
            font-size: 20px;
            color: #909090;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current{
            background: #17A2B8;
            color: #fff !important;
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="click"
    data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Header-->
    @include('layout-fontend.header-1')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    {{-- @include('layout-fontend.menu') --}}
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @include('sweetalert::alert')
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layout-fontend.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    {{--
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script> --}}
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <!-- END: Page JS-->
    <script src="{{ asset('app-assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/bootstrap3-typeahead.min.js') }}"></script>
    <script src="{{ asset('app-assets/js//moment.min.js') }}"></script>
    {{--
    <script type="text/javascript" src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> --}}
    {{--
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    --}}
    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script> --}}
    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
        let timeout = false;
        $(".has-search input").keyup(function () {
            let resultsElem = $(this).parent().parent().find(".results");
            let inputElem = this;
            if (timeout !== false) {
                clearTimeout(timeout);
                timeout = false;
            }
            timeout = setTimeout(function () {
                console.log("Done polling");
                doSearch(inputElem, resultsElem);
            }, 500);
        });

        function doSearch(inputElem, resultsElem) {
            let q = $(inputElem).val();
            if (q.length === 0) {
                $(resultsElem).addClass("is-hidden");
                return false;
            }

            $(resultsElem).html("");

            $.get("/search/" + q, function (response) {
                if (response.length > 0) {
                    response.forEach(function (listing) {
                        let elem =
                            `<a href="/coin/${listing.id}" class="result">\n` +
                            `    <img src="/storage/${listing.image}" alt="">\n` +
                            `    <span class="titles">\n` +
                            `        <h1>${listing.name}</h1>\n` +
                            `        <h2>\$${listing.symbol}</h2>\n` +
                            `    </span>\n` +
                            `</a>`;
                        $(resultsElem).append($(elem));
                    });
                } else {
                    let elem = '<div class="noresults result">No results...</div>';
                    $(resultsElem).append($(elem));
                }
                $(resultsElem).removeClass("is-hidden");
            });
        }

        $("body").click(function (e) {
            if ($(e.target).parents(".has-search").length == 0) {
                $(".has-search .results").addClass("is-hidden");
            } else {
                if (
                    !$(".has-search .results").is(":visible") &&
                    $(".has-search:visible input").val().length > 0
                ) {
                    $(".has-search:visible .results").removeClass("is-hidden");
                }
                console.log("show again");
            }
        });
        function countDays(value) {
            if (value >= 0 && value < 30) {
                return value + ' day';
            } else if (value > 30 && value < 59) {
                return '1 months';
            } else if (value > 59 && value < 90) {
                return '2 months';
            } else if (value > 90 && value < 120) {
                return '3 months';
            } else if (value > 120 && value < 150) {
                return '4 months';
            } else if (value > 150 && value < 365) {
                return 'many months';
            } else if (value > 365 && value < 730) {
                return '1 years';
            } else if (value > 730 && value < 1095) {
                return '2 years';
            } else if (value > 1095 && value < 1460) {
                return '3 years';
            } else if (value > 1460) {
                return 'many years';
            } else {
                return 'Tomorrow';
            }
        }
    </script>

    @yield('script')
</body>
<!-- END: Body-->

</html>