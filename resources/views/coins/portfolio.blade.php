@extends('layouts.default')

@section('title', 'portfolio')

@section('content')
<section class="portfolio">
    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <h1>Portfolio</h1>
                <h2>Track the value of your BEP-20 tokens!</h2>
            </div>
            <div class="column is-6">
                <div class="pro">
                    <a href="/out/291" class="pro-image" target="_blank">
                        <img src="https://coinsniper.net/storage/images/9ac6c944-616a-4220-a356-8e7b2b07acb8.gif" alt=""
                            class="is-hidden-mobile">
                        <img src="https://coinsniper.net/storage/images/5771a21a-180a-4878-a2f3-1e6a35ae45de.gif" alt=""
                            class="is-hidden-tablet">
                    </a>
                    <p class="has-text-right">
                        <a href="/contact">Advertise with us!</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="user-info">
            <p>Welcome <b>{{ Auth::user()->name }}</b></p>

            <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <strong> Logout</strong>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                @csrf
            </form>
        </div>



        <div class="columns">
            <div class="column is-4">
                <div class="has-balance">
                    <h3>Portfolio Value</h3>
                    <div class="balance">$ -- <span class="bnb">-- BNB</span></div>
                </div>
            </div>
            <div class="column is-8">
                <div class="has-assets">
                    <div class="assets-title">
                        <h2>Your Assets</h2>
                        <form action="/portfolio/setAddress" method="POST">
                            <input type="hidden" name="_token" value="TM1KpyWB5YBstloYpdcowmgHq8sPMsZdi25IZZHb">
                            <div class="field has-addons">
                                <div class="control">
                                    <input class="input" type="text"
                                        placeholder="0xbb4CdB9CBd36B01bD1cBaEBF2De08d9173bc095c" name="address"
                                        required="">
                                </div>
                                <div class="control">
                                    <input type="submit" value="Save" class="button is-success">
                                </div>
                            </div>
                        </form>
                    </div>

                    <p>Please enter your BSC address to start tracking your assets.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
