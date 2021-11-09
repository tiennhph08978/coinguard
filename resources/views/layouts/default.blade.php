<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="dmca-site-verification" content="TjRGNHlYdFRrUDB5ellDNkgxRkppQT090">
    <meta name="coinzilla" content="16e7965f0dd715324bbf2463fbff50bf">
    

    <meta property="og:title" content="Today's Most Voted Coins - CoinSniper">
    <meta property="og:description"
        content="Find the best new cryptocurrency projects! Vote for your favorite coins, and see what's trending.">
    <meta name="Description"
        content="Find the best new cryptocurrency projects! Vote for your favorite coins, and see what's trending.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/css-bulma-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/css-style.css') }}">
    
    {{-- <link rel="stylesheet" href="css/css-bulma-tooltip.css">
    <link rel="stylesheet" href="css/css-style.css"> --}}
    <!-- <link rel="manifest" href="/site.webmanifest"> -->

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/4861--apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/752--favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/7406--favicon-16x16.png') }}">
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="favicons/4861--apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/752--favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/7406--favicon-16x16.png"> --}}
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

</head>
<body>
    @include('sweetalert::alert')

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    
</body>
</html>