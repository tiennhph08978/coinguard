@extends('layout-fontend.default')
@section('title', 'Watchlist')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        {{-- <div class="header-navbar-shadow"></div> --}}
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0" data-i18n="Watchlist">Watchlist</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('font-ends.index')}}" data-i18n="Coin">Coin</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{route('font-ends.watch-list')}}" data-i18n="Watchlist">Watchlist</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height mb-2">
                        <!-- Medal Card -->
                        <div class="col-xl-6 col-md-6 col-12">
                            <h1 style="font-size: 3rem;font-weight: bold;" data-i18n="Watchlist">Watchlist</h1>
                            <p class="card-text font-small-3" data-i18n="Follow your favorite coins and tokens!">
                                Follow your favorite coins and tokens!</p>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-6 col-md-6 col-12">
                            <div>
                                <p class="card-text font-small-2 mb-0 ml-1 float-right" data-i18n="Advertise with us!">
                                    Advertise with us!</p>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-sm-12 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <img src="https://coinsniper.net/storage/images/ZmrhzONxqxjHtxYHLk3IhgF4jdmEiNXUvZab0bT0.gif"
                                            width="100%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>
                    <!-- box col-6 -->
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body d-flex mt-1">
                                    <i class="fas fa-external-link-alt mr-1" style="font-size: 32px;"></i>
                                    <p style="display: block;" data-i18n="Share your watchlistwith this public link">
                                        <b>Share your watchlistwith!</b><br>
                                        <a href="{{ route('font-ends.watch-list') }}">
                                           https://crytogem.net/watchlist
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-6 col-12">
                            <p><span data-i18n="Add projects to your watchlist by clicking on the golden star">
                                Add projects to your watchlist by clicking on the golden star</span> <i class="far fa-star"
                                    style="color:gold; margin-left:0.25rem;"></i></p>
                            <p><span data-i18n="Watchlisted projects are directly visible">
                                Watchlisted projects are directly visible</span> <i class="fas fa-star"
                                    style="color:gold; margin-left:0.25rem;"></i></p>
                            <p><span data-i18n="Remove from your watchlist by clicking on the red X">
                                Remove from your watchlist by clicking on the red X </span><i class="fas fa-times"
                                    style="color:red; margin-left:0.45rem; margin-right:0.1rem; font-size: 1.1rem"></i></p>
                        </div>
                        <!--/ Statistics Card -->
                    </div>
                    <!-- end box col-6 -->
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="card card-statistics">
                                {{-- <div class="card-header"> --}}
                                {{-- </div> --}}
                                <div class="table-responsive">
                                    <table class="table table-striped table-dark table-hover">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th></th>
                                                <th data-i18n="Name">Name</th>
                                                <th data-i18n="Chain">Chain</th>
                                                <th data-i18n="Symbol">Symbol</th>
                                                <th data-i18n="Market Cap">Market Cap</th>
                                                <th data-i18n="Price">Price</th>
                                                <th data-i18n="Launched">Launched</th>
                                                <th data-i18n="Votes">Votes</th>
                                                <th data-i18n="Vote">Vote</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($coins as $key => $coin)
                                                <tr onclick="window.location='/coin/{{$coin->id}}';">
                                                    <td><a href="{{ route('font-ends.del-watchlist', $coin->id) }}">
                                                        <i class="fas fa-times" style="color:red; margin-left:0.45rem; margin-right:0.1rem; font-size: 1.1rem"></i>
                                                    </a></td>
                                                    <td>
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td>
                                                        <img src="/storage/{{ $coin->image }}"
                                                            class="mr-75" height="20" width="20" alt="Angular" />
                                                    </td>
                                                    <td><span class="font-weight-bold">{{ $coin->name }}</span></td>
                                                    <td>
                                                        <span class="badge badge-pill badge-light-primary mr-1"> 
                                                            {{ $coin->network }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $coin->symbol }}</td>
                                                    <td>{{ $coin->presale }}</td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>{{ $coin->lauch_date}}</td>
                                                    <td>
                                                        <span class="badge badge-pill badge-light-primary mr-1">{{ $coin->vote }}</span>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success" data-i18n="Vote">Vote</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
