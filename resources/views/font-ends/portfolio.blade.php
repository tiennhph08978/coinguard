@extends('layout-fontend.default')
@section('title', 'Portfolio')
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
                            <h2 class="content-header-title float-left mb-0" data-i18n="Profile">Profile</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('font-ends.index')}}" data-i18n="Coin">Coin</a>
                                    </li>
                                    
                                    <li class="breadcrumb-item active"><a href="{{route('font-ends.portfolio')}}" title="" data-i18n="Profile">Profile</a>
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
                            <h1 style="font-size: 3rem;font-weight: bold;" data-i18n="Portfolio">Portfolio</h1>
                            <p class="card-text font-small-3" data-i18n="Track the value of your BEP-20 tokens!">
                                Track the value of your BEP-20 tokens!</p>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-6 col-md-6 col-12">
                            <div>
                                <p class="card-text font-small-2 mb-0 ml-1 float-right" data-i18n="Advertise with us!">Advertise with us!</p>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-sm-12 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <img src="https://coinsniper.net/storage/images/ZmrhzONxqxjHtxYHLk3IhgF4jdmEiNXUvZab0bT0.gif" width="100%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>
                    <!-- box col-6 -->
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-4 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h3 class="mt-2" data-i18n="Portfolio Value">Portfolio Value</h3>
                                    <div class="balance">$ -- <span class="btn btn-danger ml-2">-- BNB</span></div>
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-8 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <div>
                                        <h3> <span data-i18n="Welcome">Welcome</span> <b>{{Auth::user()->name}}</b></h3>
                                        {{-- <a href="">logout</a> --}}
                                    </div>
                                        <div style="display: flex;" class="mt-2 row">
                                            <div class="col-xl-2 col-md-4 col-12">
                                            <h2 data-i18n="Your Assets">Your Assets</h2>
                                            </div>
                                            <div class="col-xl-8 col-md-8 col-12">
                                            <form action="" method="POST">
                                                <input type="hidden" name="_token" value="2jZcJnzba2EvBo84XsH5hfGpf7iqhAYXuTBRRH5Y">     
                                                <!-- <input class="input" type="text" placeholder="0xbb4CdB9CBd36B01bD1cBaEBF2De08d9173bc095c" class="form-control" name="address" required="">
                                                <input type="submit" value="Save" class="btn btn-success"> -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="0xbb4CdB9CBd36B01bD1cBaEBF2De08d9173bc095c" aria-describedby="button-addon2" />
                                                    <div class="input-group-append" id="button-addon2">
                                                        <button class="btn btn-success" type="button" data-i18n="Save">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                            
                                        </div>
                                        <p class="mt-2" data-i18n="please">Please enter your BSC address to start tracking your assets.</p>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>
                    <!-- end box col-6 -->
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection