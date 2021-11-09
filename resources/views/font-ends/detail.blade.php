@extends('layout-fontend.default')
@section('title', $coin->name)
@section('style')
<style>
    html .content.app-content {
        padding: calc(4.45rem + 1.3rem) 2rem 0 !important;
    }
</style>
@endsection
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
                        <h2 class="content-header-title float-left mb-0" data-i18n="Detail">Detail</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('font-ends.index')}}"
                                        data-i18n="Coin">Coin</a>
                                </li>
                                <li class="breadcrumb-item active">{{ $coin->name }}
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
                <!-- detail -->
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-sm-12">
                                        <div class="row">
                                            <div class="col-xl-2 col-md-2 col-6">
                                                <img src="/storage/{{ $coin->image }}" alt="" width="100px">
                                                {{-- <img
                                                    src="https://coinsniper.net/storage/images/2b781337-cb92-478d-aabf-5c94dc7a8e98.png">
                                                --}}
                                            </div>
                                            <div class="col-xl-10 col-md-10 col-6">
                                                <h1>{{ $coin->name }}
                                                    <span class="btn btn-info">${{ $coin->symbol }}</span>
                                                    <span data-toggle="tooltip" data-placement="top"
                                                        title="Add Watchlists">
                                                        <a href="{{ route('font-ends.add-watchlist', $coin->id) }}">
                                                            @if ($check == null)
                                                            <i class="far fa-star" style="color: yellow;"></i>
                                                            @else
                                                            <i class="fa fa-star" style="color: gold;"></i>
                                                            @endif

                                                        </a>
                                                    </span>
                                                </h1>
                                                <div class="contract can-copy"
                                                    data-copy="0x000000000000000010000000000000000000">
                                                    <h4 data-i18n="BSC Contract Address">BSC Contract Address</h4>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <p id="sample">{{ $coin->contract_address }}</p>
                                                        </div>
                                                        <div class="col-3">
                                                            <span onclick="CopyToClipboard('sample');return false;"> <i
                                                                    class="far fa-copy" data-toggle="tooltip"
                                                                    data-placement="top"
                                                                    title="click copied!"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xl-2 col-md-4 col-6">
                                                <p data-i18n="Status">Status</p>
                                                <button class="btn btn-success">listed</button>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-6">
                                                <p data-i18n="Votes for listing">Votes for listing</p>
                                                <button class="btn btn-success">500/500</button>
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-6">
                                                <p data-i18n="Votes">Votes</p>
                                                <button class="btn btn-light">{{ count($vote) }}</button>
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-6">
                                                <p data-i18n="Votes Today">Votes Today</p>
                                                <button class="btn btn-light">{{ count($voteday) }}</button>
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-6">
                                                <p data-i18n="Network">Network</p>
                                                <button class="btn btn-light">{{ $coin->network }}</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="description mt-2 mb-2">
                                            {{ $coin->description }}
                                        </div>
                                        <hr>
                                        <div class="mb-2">
                                            <h2><strong> <span data-i18n="Vote for"> Vote for </span> <span>{{
                                                        $coin->name }}</span></strong></h2>
                                            <span data-i18n="Vote for">Vote for</span> {{ $coin->name }}<span
                                                data-i18n="increase its rank!">increase its rank!</span>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-6 col-12">
                                                    @if (auth()->check())
                                                    <form action="/vote/{{ $coin->id }}" method="GET">
                                                        @if ($errors->has('g-recaptcha-response'))
                                                            <span class="help-block text-danger">
                                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                            </span>
                                                        @endif
                                                        {!! NoCaptcha::renderJs() !!}
                                                        {!! NoCaptcha::display() !!}
                                                        <button class="btn btn-success"><strong> <span
                                                                    data-i18n="VOTE NOW FOR">VOTE NOW FOR</span> {{
                                                                $coin->name }}</strong> </button>
                                                    </form>
                                                    @else
                                                    <a href="{{ route('login') }}"
                                                        class="btn btn-primary font-weight-bold">
                                                        <span data-i18n="PLEASE LOGIN TO VOTE">PLEASE LOGIN TO
                                                            VOTE</span>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <p class="mt-2"><i data-i18n="You can vote once every 24 hours">You can vote
                                                    once every 24 hours.</i></p>
                                        </div>
                                        <hr>
                                        <div class="note"> <span
                                                data-i18n="Information incorrect? Please report it to">Information
                                                incorrect? Please report it to</span> <a
                                                href="mailto:#">info@crytogem.net</a></div>
                                    </div>
                                    <div class="col-xl-4 col-sm-12">
                                        <h3><strong data-i18n="Popularity">Popularity</strong></h3>
                                        <span class="mt-1" data-i18n="Watchlists">Watchlists</span>
                                        <span class="ml-2">
                                            <i class="fa fa-star" style="color: gold;"></i> <span
                                                data-i18n="On">On</span>
                                            <span class="watchlist-counter">{{ $watchlist->followers }} </span>
                                            <span data-i18n="watchlists">watchlists</span>
                                        </span>
                                        <h3 class="mt-2"><strong data-i18n="Links">Links</strong></h3>

                                        <div class="mt-1">
                                            <span data-i18n="Website">Website</span>
                                            <span class="ml-2">
                                                <i class="fa fa-globe"></i>&nbsp;
                                                <a href="{{ $coin->website_link }}" target="_blank"
                                                    data-i18n="Visit Website">Visit Website</a>
                                            </span>
                                        </div>
                                        <div class="mt-1">
                                            <span>Telegram</span>
                                            <span class="ml-2">
                                                <i class="fab fa-telegram"></i>&nbsp;
                                                <a href="{{ $coin->telegram_link }}" target="_blank"
                                                    data-i18n="Join Telegram">Join Telegram</a>
                                            </span>
                                        </div>

                                        @if ( $coin->twitter_link )                                                                                     
                                        <div class="mt-1">
                                            <span>Twitter</span>
                                            <span class="ml-2">
                                                <i class="fab fa-twitter"></i>&nbsp;
                                                <a href="{{ $coin->twitter_link }}" target="_blank"
                                                    data-i18n="Join Telegram">Join Telegram</a>
                                            </span>
                                        </div>
                                        @endif

                                        @if ( $coin->discord_link )
                                        <div class="mt-1">
                                            <span>Discord</span>
                                            <span class="ml-2">
                                                <i class="fab fa-discord"></i>&nbsp;
                                                <a href="{{ $coin->discord_link }}" target="_blank"
                                                    data-i18n="Join Telegram">Join Discord</a>
                                            </span>
                                        </div>
                                        @endif
                                        
                                        <h3 class="mt-2"><strong data-i18n="Price">Price</strong></h3>
                                        <div class="mt-1">
                                            <span data-i18n="Marketcap">Marketcap</span>
                                            <span class="ml-2">
                                                -
                                            </span>
                                        </div>
                                        <div class="mt-1">
                                            <span data-i18n="Price">Price</span> <span>(USD)</span>
                                            <span class="ml-2">
                                                -
                                            </span>
                                        </div>
                                        <div class="mt-1">
                                            <span data-i18n="Price">Price</span> <span>(BNB)</span>
                                            <span class="ml-2">
                                                -
                                            </span>
                                        </div>

                                        <h3 class="mt-2"><strong data-i18n="Charts/Swap">Charts/Swap</strong></h3>
                                        <div class="mt-1">
                                            <span>Poocoin</span>
                                            <span class="ml-2">
                                                <i class="fas fa-poo"></i>
                                                <span>
                                                    <a href="https://poocoin.app/tokens/0x000000000000000010000000000000000000"
                                                        target="_blank">
                                                        Poocoin.app
                                                    </a>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="mt-1">
                                            <span>Bogged</span>
                                            <span class="ml-2">
                                                <i class="fas fa-eye"></i>
                                                <span>
                                                    <a href="https://poocoin.app/tokens/0x000000000000000010000000000000000000"
                                                        target="_blank">
                                                        Bogged.Finance
                                                    </a>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="mt-1">
                                            <span data-i18n="Buy Now">Buy Now</span>
                                            <span class="ml-2">
                                                <span>
                                                    <a href="https://poocoin.app/tokens/0x000000000000000010000000000000000000"
                                                        target="_blank" data-i18n="Buy On PancakeSwap">
                                                        Buy On PancakeSwap
                                                    </a>
                                                </span>
                                            </span>
                                        </div>

                                        <h3 class="mt-2"><strong data-i18n="Information">Information</strong></h3>
                                        <div class="mt-1">
                                            <span data-i18n="Add">Add</span>
                                            <span class="ml-2">
                                                <td>{{$coin->created_at->format('Y-m-d')}}</td>
                                            </span>
                                        </div>
                                        <div class="mt-1">
                                            <span data-i18n="Launch">Launch</span>
                                            <span class="ml-2">
                                                {{$coin->lauch_date}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->
                </div>
                <!-- end detail -->
                <!-- //table -->
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title font-weight-bold" style="font-size: 1.5rem;" data-i18n="Promoted">
                                    Promoted</h4>
                                <div class="d-flex align-items-center">
                                    <p class="card-text font-small-2 mr-25 mb-0"
                                        data-i18n="Your coin here? Contact us!">Your coin here? Contact us!</p>
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
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    function CopyToClipboard(id) {
        var r = document.createRange();
        r.selectNode(document.getElementById(id));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(r);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
    }

    //aaaa
    $('#coin').DataTable({
        "processing": true,
        "serverSide": true,
        "lengthChange": false,
        "info": false,
        "searching": false,
        "order": [[1, "desc"]],
        "paging": false,
        "ajax": {
            url: '{{ route('coin') }}'
                },
        "columns": [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            {
                data: 'image',
                "render": function (data, type, row) {
                    return "<img src='/storage/" + data + "' height='24'>";
                }
            },
            { data: 'name' },
            { data: 'network' },
            { data: 'symbol' },
            { data: 'presale' },
            { data: null },
            {
                data: null,
                title: 'days',
                render: function (data, type, row) {
                    var update_script = moment(data.lauch_date, 'YYYY-MM-DD HH:mm:ss');
                    var now = moment();
                    return '<font color=' + row.cat_color + '>' + countDays(now.diff(update_script, 'days')) + '</font>';
                }
            },
            {
                data: 'vote',
                "render": function (data, type, row) {
                    return "<span class='badge badge-pill badge-light-primary mr-1'>" + data + "</span>"
                }
            },
            { data: 'action' },
        ]
    });

    var coin = $('#coin').DataTable();
    $('#coin tbody').on('click', 'tr', function () {
        var data = coin.row(this).data();
        $id_coin = data['id'];
        window.location.href = '/coin/' + $id_coin;
    });
</script>
@endsection