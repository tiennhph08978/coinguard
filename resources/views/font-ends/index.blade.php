@extends('layout-fontend.default')
@section('title', 'Home')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    {{-- <div class="header-navbar-shadow"></div> --}}
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height mb-2">
                    <!-- Medal Card -->
                    <div class="col-xl-6 col-md-6 col-12">
                        <h1 style="font-size: 3rem;font-weight: bold;" data-i18n="Best Coins Today">Best Coins Today</h1>
                        <p class="card-text font-small-3" data-i18n="Find the top">Find the top voted coins of the last 24 hours</p>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-6 col-md-6 col-12">
                        <div style="display: flex;">
                            <h4 class="card-title" data-i18n="Statistics">Statistics</h4>
                            <p class="card-text font-small-2 mb-0 ml-1" data-i18n="Advertise with us!">Advertise with us!</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-sm-12 col-12 mb-2 mb-xl-0">
                                <div class="media">
                                    <a class="navbar-brand" href="{{ $url_banner->link }}" target="_blank">
                                        <img src="/storage/{{ $url_banner->banner }}" height="50px" width="100%" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>
                <!-- //table -->
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title font-weight-bold" style="font-size: 1.6rem;" data-i18n="Promoted">Promoted</h4>
                                <div class="d-flex align-items-center">
                                    <p class="card-text font-small-2 mr-25 mb-0" data-i18n="Your coin here? Contact us!">
                                        Your coin here? Contact us!</p>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-dark table-hover" id="coin">
                                    <thead>
                                        <tr>
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
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->
                </div>
                <!-- end table -->
                <!-- tab-show -->
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="card card-statistics">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12 col-12 mb-2 mb-xl-0">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                          <li class="nav-item">
                                            <a class="nav-link active" id="today-tab" data-toggle="tab" href="#today" role="tab" aria-controls="today" aria-selected="true">
                                                <span class="icon is-small"><i class="far fa-clock"></i></span>
                                                <span data-i18n="Today">Today</span>
                                                
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" id="all-time-tab" data-toggle="tab" href="#all-time" role="tab" aria-controls="all-time" aria-selected="false">
                                                <span class="icon is-small"><i class="fas fa-fire"></i></span>
                                                <span data-i18n="All Time">All Time</span>
                                                
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">
                                                <span class="icon is-small"><i class="fas fa-plus"></i></span>
                                                <span data-i18n="New">New</span>
                                                
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" id="marketcap-tab" data-toggle="tab" href="#marketcap" role="tab" aria-controls="marketcap" aria-selected="false">
                                                <span class="icon is-small"><i class="fas fa-coins"></i></span>
                                                <span data-i18n="Marketcap">Marketcap</span>
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" id="presales-tab" data-toggle="tab" href="#presales" role="tab" aria-controls="presales" aria-selected="false">
                                                <span class="icon is-small"><i class="fas fa-stopwatch"></i></span>
                                                <span data-i18n="Presales">Presales</span>
                                            </a>
                                          </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                          <div class="tab-pane fade show active" id="today" role="tabpanel" aria-labelledby="today-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-dark table-hover" id="coin_today">
                                                        <thead>
                                                            <tr>
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

                                                        </tbody>
                                                    </table>
                                                </div>
                                          </div>
                                          <div class="tab-pane fade" id="all-time" role="tabpanel" aria-labelledby="all-time-tab">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-dark table-hover" id="coins_all">
                                                    <thead>
                                                        <tr>
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
                                                       
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                          </div>
                                          <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-dark table-hover" id="coins_new">
                                                    <thead>
                                                        <tr>
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
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                            </div>
                                            <div class="tab-pane fade" id="marketcap" role="tabpanel" aria-labelledby="marketcap-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-dark table-hover" id="market-cap"> 
                                                        <thead>
                                                            <tr>
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
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="presales" role="tabpanel" aria-labelledby="presales-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-dark table-hover" id="presales1">
                                                        <thead>
                                                            <tr>
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
                                                            
                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->
                </div>
                <!-- end-tab-show -->
                <!-- box col-6 -->
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body text-center">
                                <h2 data-i18n="Your Favorite Coin Missing?">Your Favorite Coin Missing?</h2>
                                <p class="card-text font-small-3">Can't find your coin? List your favorite coin now!
                                    <br> Get your community to vote for your coin and gain exposure.</p>
                                <a href="{{ route('font-ends.submit-coin') }}" class="btn btn-success" data-i18n="Submit Coin">Submit Coin</a>
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body text-center">
                                <h2 data-i18n="View New Listings">View New Listings</h2>
                                <p class="card-text font-small-3">Click the button below to view the New Listings!<br> These coins were just submitted.</p>
                                <a href="/" class="btn btn-primary" data-i18n="View New Listings">View New Listings</a>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>
                <!-- end box col-6 -->
                <div class="row match-height mb-2">
                    <!-- Medal Card -->
                    <div class="col-xl-6 col-md-6 col-12">
                        <h2 data-i18n="Find the best new cryptocurrency projects">Find the best new cryptocurrency projects</h2>
                        <p class="justify-content-between">
                            Did ever you wonder where people find the best new cryptocurrency projects, coins and tokens like Doge and Shiba Inu? They use
                            websites like <a href="/">coingurard</a>. Cryptocurrency projects are listed here before CoinMarketCap,
                            CoinGecko and major exchanges. Find the best crypto moonshots on our website.
                        </p>
                        <p>
                            However: before investing always do your
                            own research (DYOR)! Listing on <a href="/">coingurard</a> does NOT mean we endorse the project, they could be scams.
                            Be careful with your investments.
                        </p>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-6 col-md-6 col-12">
                        <h2 data-i18n="How does coingurard work?">How does coingurard work?</h2>
                        <p>
                            New cryptocurrency projects can be listed <a href="/">Applying Here.</a> Once applied, they instantly become visible
                            on the <a href="/">New Listings Page.</a> New listings require 500 votes to be officially listed in our top list.
                            After that, anyone can see and vote for the project.
                        </p>
                        <p>
                            Get your community to vote on your project, because votes matter! Our ranking is simple: the highest votes is #1 on our website.
                            The project will get exposure with all our visitors!
                        </p>
                        <p>
                            <b>Note on voting:</b> Unique votes only count once for the "All Time" page, but can count every 24 hours on the "Today" page.
                        </p>
                    </div>
                    <!--/ Statistics Card -->
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->
        </div>
    </div>
</div>
{{-- <div class="font-weight-bold"></div> --}}
@endsection
@section('script')
    <script>
        $('#coin').DataTable({
            "processing": true,
            "serverSide": true,
            "lengthChange": false,
            "info": false,
            "searching": false,
             "order": [[ 7 , "desc" ]],
             "paging": false,
            "ajax": {
                url: '{{ route('coin') }}'
                },
                "columns": [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                    data: 'image',
                    "render": function(data,type,row) { 
                        return "<img src='/storage/"+data+"' height='50px'>";}
                    },
                    { data: 'name'},
                    { data: 'network',
                        "render": function(data,type,row){
                            return "<span class='badge badge-pill badge-light-white mr-1'>"+data+"</span>"
                        }
                    },
                    { data: 'symbol' },
                    { data: 'presale' },
                    { data: null },
                    { data:  null,
                    title : 'days',
                    render: function ( data, type, row ) {
                      var update_script = moment(data.lauch_date, 'YYYY-MM-DD HH:mm:ss');
                      var now = moment();
                       return '<font color='+row.cat_color+'>'+countDays(now.diff(update_script, 'days'))+'</font>'; 
                    }
                },
                    { data: 'vote',
                        "render": function(data,type,row){
                            return "<span class='badge badge-pill badge-light-primary mr-1'>"+data+"</span>"
                        }
                    },
                    { data: 'action' },
                ],
                "columnDefs": [
                    { className: "nameTd", "targets": [ 2,3,8 ] }
                  ]
        });
        $('#coin_today').DataTable({
            "processing": true,
            "serverSide": true,
            "lengthChange": false,
            "info": false,
            "searching": false,
             "order": [[ 7, "desc" ]],
            // "language": {
            //   "emptyTable": "",
            // },
            "ajax": {
                url: '{{ route('coin_today') }}'
                },
                "columns": [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                    data: 'image',
                    "render": function(data,type,row) { 
                        return "<img src='/storage/"+data+"' height='50px'>";}
                    },
                    { data: 'name' },
                    { data: 'network',
                        "render": function(data,type,row){
                            return "<span class='badge badge-pill badge-light-white mr-1'>"+data+"</span>"
                        }
                    },
                    { data: 'symbol' },
                    { data: 'presale' },
                    { data: null },
                    { data:  null,
                    title : 'days',
                    render: function ( data, type, row ) {
                      var update_script = moment(data.lauch_date, 'YYYY-MM-DD HH:mm:ss');
                      var now = moment();
                       return '<font color='+row.cat_color+'>'+countDays(now.diff(update_script, 'days'))+'</font>'; 
                    }
                },
                    { data: 'vote',
                        "render": function(data,type,row){
                            return "<span class='badge badge-pill badge-light-primary mr-1'>"+data+"</span>"
                        }
                    },
                    { data: 'action' },
                ],
                "columnDefs": [
                    { className: "nameTd", "targets": [ 2,3,8 ] }
                  ]
        });
        $('#coins_all').DataTable({
            responsive: true,
            // "responsive": true,
            "processing": true,
            "serverSide": true,
            "lengthChange": false,
            "info": false,
            "searching": false,
             "order": [[ 7, "desc" ]],
            //  "language": {
            //   "emptyTable": "",
            // },
            "ajax": {
                url: '{{ route('coins_all') }}'
                },
                "columns": [
                { data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {
                data: 'image',
                "render": function(data,type,row) { 
                    return "<img src='/storage/"+data+"' height='50px'>";}
                },
                { data: 'name' },
                { data: 'network',
                    "render": function(data,type,row){
                        return "<span class='badge badge-pill badge-light-white mr-1'>"+data+"</span>"
                    }
                },
                { data: 'symbol' },
                { data: 'presale' },
                { data: null },
                { data:  null,
                    title : 'days',
                    render: function ( data, type, row ) {
                      var update_script = moment(data.lauch_date, 'YYYY-MM-DD HH:mm:ss');
                      var now = moment();
                        return '<font color='+row.cat_color+'>'+countDays(now.diff(update_script, 'days'))+'</font>'; 
                    }
                },
                // { data: 'lauch_date' },
                { data: 'vote',
                    "render": function(data,type,row){
                        return "<span class='badge badge-pill badge-light-primary mr-1'>"+data+"</span>"
                    }
                },
                { data: 'action' },
            ],
            "columnDefs": [
                    { className: "nameTd", "targets": [ 2,3,8 ] }
                  ]
        });
        $('#coins_new').DataTable({
            "processing": true,
            "serverSide": true,
            "lengthChange": false,
            "info": false,
            "searching": false,
             "order": [[ 7, "desc" ]],
            //  "language": {
            //   "emptyTable": "",
            // },
            "ajax": {
                url: '{{ route('coins_new') }}'
                },
                "columns": [
                { data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {
                data: 'image',
                "render": function(data,type,row) { 
                    return "<img src='/storage/"+data+"' height='50px'>";}
                },
                { data: 'name' },
                { data: 'network',
                    "render": function(data,type,row){
                        return "<span class='badge badge-pill badge-light-white mr-1'>"+data+"</span>"
                    }
                },
                { data: 'symbol' },
                { data: 'presale' },
                { data: null },
                { data:  null,
                    title : 'days',
                    render: function ( data, type, row ) {
                        var update_script = moment(data.lauch_date, 'YYYY-MM-DD HH:mm:ss');
                        var now = moment();
                        return '<font color='+row.cat_color+'>'+countDays(now.diff(update_script, 'days'))+'</font>'; 

                    }
                },
                { data: 'vote',
                    "render": function(data,type,row){
                        return "<span class='badge badge-pill badge-light-primary mr-1'>"+data+"</span>"
                }
                },
                { data: 'action' },
            ],
            "columnDefs": [
                    { className: "nameTd", "targets": [ 2,3,8 ] }
                  ]
        });
        $('#market-cap').DataTable({
            "processing": true,
            "serverSide": true,
            "lengthChange": false,
            "searching": false,
            "info": false,
             "order": [[ 7, "desc" ]],
            //  "language": {
            //   "emptyTable": "",
            // },
            "ajax": {
                url: '{{ route('marketcap') }}'
                },
                "columns": [
                { data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {
                data: 'image',
                "render": function(data,type,row) { 
                    return "<img src='/storage/"+data+"' height='50px'>";}
                },
                { data: 'name' },
                { data: 'network',
                    "render": function(data,type,row){
                        return "<span class='badge badge-pill badge-light-white mr-1'>"+data+"</span>"
                    }
                },
                { data: 'symbol' },
                { data: 'presale' },
                { data: null },
                { data:  null,
                    title : 'days',
                    render: function ( data, type, row ) {
                        var update_script = moment(data.lauch_date, 'YYYY-MM-DD HH:mm:ss');
                        var now = moment();
                        return '<font color='+row.cat_color+'>'+countDays(now.diff(update_script, 'days'))+'</font>'; 
 
                    }
                },
                { data: 'vote',
                    "render": function(data,type,row){
                        return "<span class='badge badge-pill badge-light-primary mr-1'>"+data+"</span>"
                    }
                },
                { data: 'action' },
            ],
            "columnDefs": [
                    { className: "nameTd", "targets": [ 2,3,8 ] }
                  ]
        });
        $('#presales1').DataTable({
            "processing": true,
            "serverSide": true,
            "lengthChange": false,
            "info": false,
            "searching": false,
             "order": [[ 7, "desc" ]],
            //  "language": {
            //   "emptyTable": "",
            // },
            "ajax": {
                url: '{{ route('presales') }}'
                },
                "columns": [
                { data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {
                data: 'image',
                "render": function(data,type,row) { 
                    return "<img src='/storage/"+data+"' height='50px'>";}
                },
                { data: 'name' },
                { data: 'network',
                    "render": function(data,type,row){
                        return "<span class='badge badge-pill badge-light-white mr-1'>"+data+"</span>"
                    }
                },
                { data: 'symbol' },
                { data: 'presale' },
                { data: null },
                { data:  null,
                    title : 'days',
                    render: function ( data, type, row ) {
                        var update_script = moment(data.lauch_date, 'YYYY-MM-DD HH:mm:ss');
                        var now = moment();
                        return '<font color='+row.cat_color+'>'+countDays(now.diff(update_script, 'days'))+'</font>'; 
 
                    }
                },
                { data: 'vote',
                    "render": function(data,type,row){
                        return "<span class='badge badge-pill badge-light-primary mr-1'>"+data+"</span>"
                    }
                },
                { data: 'action' },
            ],
            "columnDefs": [
                    { className: "nameTd", "targets": [ 2,3,8 ] }
                  ]
        });
        var coin = $('#coin').DataTable();
        $('#coin tbody').on('click', 'tr', function () {
            var data = coin.row( this ).data();
            $id_coin = data['id'];
            window.location.href = '/coin/' +$id_coin;
        });

        var coin_today = $('#coin_today').DataTable();
        $('#coin_today tbody').on('click', 'tr', function () {
            var data = coin_today.row( this ).data();
            $id_coin = data['id'];
            window.location.href = '/coin/' +$id_coin;
        });

        var coins_all = $('#coins_all').DataTable();
        $('#coins_all tbody').on('click', 'tr', function () {
            var data = coins_all.row( this ).data();
            $id_coin = data['id'];
            window.location.href = '/coin/' +$id_coin;  
        });

        var coins_new = $('#coins_new').DataTable();
        $('#coins_new tbody').on('click', 'tr', function () {
            var data = coins_new.row( this ).data();
            $id_coin = data['id'];
            window.location.href = '/coin/' +$id_coin;
        });
        var market_cap = $('#market-cap').DataTable();
        $('#market-cap tbody').on('click', 'tr', function () {
            var data = market_cap.row( this ).data();
            $id_coin = data['id'];
            window.location.href = '/coin/' +$id_coin;
        });
        var presales1 = $('#presales1').DataTable();
        $('#presales1 tbody').on('click', 'tr', function () {
            var data = presales1.row( this ).data();
            $id_coin = data['id'];
            window.location.href = '/coin/' +$id_coin;
        });
    </script>
@endsection