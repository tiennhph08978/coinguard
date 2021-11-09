@extends('layout-fontend.default')
@section('title', 'Submit Coin')
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
                        <h2 class="content-header-title float-left mb-0" data-i18n="Submit Coin">Submit Coin</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('font-ends.index')}}" data-i18n="Coin">Coin</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('font-ends.submit-coin')}}" data-i18n="Submit Coin">Submit Coin</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section class="bs-validation">
                <div class="row justify-content-center">
                    <!-- jQuery Validation -->
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold mt-1">Submit new coin to CoinSniper</h4>
                                <form action="{{ route('font-ends.submit-coin') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label data-i18n="Logo Upload">Logo Upload</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image" required="" />
                                            <label class="custom-file-label" for="image" data-i18n="Choose image">Choose image</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="basic-default-name" data-i18n="Name*">Name*</label>
                                        <input type="text" class="form-control" id="basic-default-name" name="name" placeholder="Bitcoin" required=""/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" data-i18n="Symbol*">Symbol*</label>
                                        <input type="text" name="symbol" class="form-control" placeholder="BTC" required=""/>
                                    </div>
                                    <div class="form-group">
                                        <label data-i18n="Network/Chain">Network/Chain</label>
                                        <select class="form-control select2" id="select-chain" name="network" required="">
                                            <option value="" data-i18n="Select Coin">Select Coin</option>
                                            <option value="BSC">Binance Smart Chain(BSC)</option>
                                            <option value="ETH">Ethereum(ETH)</option>
                                            <option value="MATIC">Polygon(MATIC)</option>
                                            <option value="TRX">Tron(TRX)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block" data-i18n="Project in presale phase">Project in presale phase?*</label>
                                        <div class="custom-control custom-radio my-50">
                                            <input type="radio" id="validationRadiojq1" name="presale" value="Presale" class="custom-control-input" required=""/>
                                            <label class="custom-control-label" for="validationRadiojq1" data-i18n="Yes">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="validationRadiojq2" name="presale" value="" class="custom-control-input" />
                                            <label class="custom-control-label" for="validationRadiojq2" data-i18n="No">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" data-i18n="Contract Address">Contract Address*</label>
                                        <input type="text" name="contract_address" class="form-control" placeholder="0xB8c77482e45F1F44dE1745F52C74426C631bDD52" required=""/>
                                    </div>
                                        <div class="form-group">
                                        <label class="d-block" for="Description" data-i18n="Description">Description*</label>
                                        <textarea class="form-control" id="description" name="description" required=""
                                        placeholder="Describe your coin here. What is the goal, plans, why is this coin unique?" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" data-i18n="Custom chart link (optional)">Custom chart link (optional)</label>
                                        <input type="text" class="form-control" name="custom_chart_link" id="chart_link" placeholder="https://dex.guru/token/0x...." />
                                        <p class="help" data-i18n="by default chart">By default, Poocoin (BSC) and Dextools (ETH) is used. Enter custom chart
                                        link here if you want to use it.</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" data-i18n="Custom swap link (optional)">Custom swap link (optional)</label>
                                        <input type="text" class="form-control" name="custom_swap_link" id="swaplink" placeholder="https://apeswap.finance/..." />
                                        <p class="help" data-i18n="by default swap">By default, PancakeSwap v2 (BSC) and UniSwap (ETH) is used. Enter custom swap link here if you want to use it, like Apeswap.</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" data-i18n="Website link*">Website link*</label>
                                        <input type="text" class="form-control" name="website_link" id="website_link" required="" placeholder="https://crytogem.net" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" data-i18n="Launch Date*">Launch Date*</label>
                                        <input type="date" class="form-control" name="lauch_date" id="date" required=""/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" data-i18n="Telegram link*">Telegram link*</label>
                                        <input type="text" class="form-control" name="telegram_link" id="telegram_link" 
                                        placeholder="https://t.me/crytogem" required=""/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" data-i18n="Twitter link">Twitter link</label>
                                        <input type="text" class="form-control" name="twitter_link" id="twitter_link" placeholder="https://twitter.com/coinsniper" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" data-i18n="Discord link">Discord link</label>
                                        <input type="text" class="form-control" name="discord_link" id="discord_link" placeholder="https://discord.gg/coinsniper" />
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="validationCheck" name="validationCheck" required=""/>
                                            <label class="custom-control-label" for="validationCheck" data-i18n="Agree to our terms and conditions">
                                                Agree to our terms and conditions</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary" name="submit" value="Submit" data-i18n="Submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /jQuery Validation -->
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection