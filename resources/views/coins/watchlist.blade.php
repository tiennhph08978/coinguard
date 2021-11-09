@extends('layouts.default')

@section('title', 'Watch List')

@section('content')
<section class="watchlist">
    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <h1>Watchlist</h1>
                <h2>Follow your favorite coins and tokens!</h2>
            </div>
            <div class="column is-6">
                <div class="pro">
                    <a href="/out/312" class="pro-image" target="_blank">
                        <img src="https://coinsniper.net/storage/images/877fe182-cf94-4825-a099-1950fa80e36e.gif" alt=""
                            class="is-hidden-mobile">
                        <img src="https://coinsniper.net/storage/images/6c1641db-7e13-45c7-81c7-55bad7d2680d.gif" alt=""
                            class="is-hidden-tablet">
                    </a>
                    <p class="has-text-right">
                        <a href="/contact">Advertise with us!</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column is-6">
                <div class="has-share">
                    <div class="share has-tooltip-arrow can-copy" data-tooltip="Click to Copy"
                        data-copy="https://coinsniper.net/watchlist/c5793002">
                        <i class="fas fa-external-link-alt"></i>
                        <p>
                            Share your watchlist<span class="is-hidden-tablet">!</span> <span
                                class="is-hidden-mobile">with this public link</span><br>
                            <b>
                                <a href="/watchlist/c5793002">
                                    <span class="is-hidden-mobile">https://coinsniper.net</span>/watchlist/c5793002
                                </a>
                            </b>
                        </p>
                    </div>
                </div>
            </div>

            <div class="column is-6 has-text-right is-hidden-mobile">
                <p>Add projects to your watchlist by clicking on the golden star <i class="far fa-star"
                        style="color:gold; margin-left:0.25rem;"></i></p>
                <p>Watchlisted projects are directly visible <i class="fas fa-star"
                        style="color:gold; margin-left:0.25rem;"></i></p>
                <p>Remove from your watchlist by clicking on the red X <i class="fas fa-times"
                        style="color:red; margin-left:0.45rem; margin-right:0.1rem; font-size: 1.1rem"></i></p>
            </div>
            <div class="column is-6 is-hidden-tablet">
                <p><i class="far fa-star" style="color:gray; margin-left:0.25rem;"></i> Click to add to watch list</p>
                <p><i class="fas fa-star" style="color:gold; margin-left:0.25rem;"></i> Watchlisted are visible</p>
                <p><i class="fas fa-star" style="color:gold; margin-left:0.25rem;"></i> Click to remove from watchlist
                </p>
            </div>
        </div>

        <section class="home">
            <div class="listings">
                <table class="table is-fullwidth is-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th></th>
                            <th>Name</th>
                            <th class="is-hidden-mobile">Chain</th>
                            <th class="is-hidden-mobile">Symbol</th>
                            <th class="is-hidden-mobile ">Market Cap</th>
                            <th class="is-hidden-mobile">Price</th>
                            <th class="is-hidden-mobile">Launched</th>
                            <th class="is-hidden-mobile">Votes</th>

                            <th>Vote<span class="is-hidden-tablet">s</span></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr data-listingid="5591">
                            <td class="has-wishlist ignore">
                                <span>
                                    1
                                </span>

                                <div class="wishlist-button">
                                    <div class="wishlist-remove">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                            </td>
                            <td class="ignore">
                                <div class="flex">
                                    <img src="https://coinsniper.net/storage/images/26287682-3729-4994-b771-83d894c49415.png"
                                        alt="" height="24">
                                </div>
                            </td>
                            <td class="name">
                                <div class="name">
                                    <b>Live NFT Token</b>
                                    <div class="is-hidden-tablet">
                                        $LIVENFT <span class="network">BSC</span>
                                    </div>
                                </div>
                            </td>
                            <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                            <td class="is-hidden-mobile">
                                $LIVENFT
                            </td>
                            <td class="is-hidden-mobile price">$ 587,440</td>
                            <td class="is-hidden-mobile price">
                                <span class="is-16">$ 0.0063122116900000</span>
                                <span class="is-12">$ 0.006312211690</span>
                            </td>
                            <td class="is-hidden-mobile age">4 days</td>
                            <td class="is-hidden-mobile">
                                <span class="votes">
                                    48471
                                </span>
                                <a href="/coin/5591" class="button is-success is-hidden">
                                    <span class="votes is-hidden-tablet">
                                        48471
                                    </span>
                                    <span>Vote</span>
                                </a>
                            </td>
                            <td>
                                <a href="/coin/5591" class="button is-success">
                                    <span class="votes is-hidden-tablet">
                                        48471
                                    </span>
                                    <span>Vote</span>
                                </a>
                            </td>
                        </tr>
                        <tr data-listingid="8615">
                            <td class="has-wishlist ignore">
                                <span>
                                    2
                                </span>

                                <div class="wishlist-button">
                                    <div class="wishlist-remove">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                            </td>
                            <td class="ignore">
                                <div class="flex">
                                    <img src="https://coinsniper.net/storage/images/4245dbf4-9551-4dcb-9d47-876995d429e1.png"
                                        alt="" height="24">
                                    <div class="cmccg">
                                        <a href="https://www.coingecko.com/en/coins/puppy-doge" target="_blank"
                                            data-tooltip="coingecko" class="cg">
                                            <img class="cg" src="/assets/img/cg.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="name">
                                <div class="name">
                                    <b>PuppyDoge</b>
                                    <div class="is-hidden-tablet">
                                        $PUPPY <span class="network">BSC</span>
                                    </div>
                                </div>
                            </td>
                            <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                            <td class="is-hidden-mobile">
                                $PUPPY
                            </td>
                            <td class="is-hidden-mobile price">$ 460,216</td>
                            <td class="is-hidden-mobile price">
                                <span class="is-16">$ 0.0000000004602164</span>
                                <span class="is-12">$ 0.000000000460</span>
                            </td>
                            <td class="is-hidden-mobile age">7 days</td>
                            <td class="is-hidden-mobile">
                                <span class="votes">
                                    30047
                                </span>
                                <a href="/coin/8615" class="button is-success is-hidden">
                                    <span class="votes is-hidden-tablet">
                                        30047
                                    </span>
                                    <span>Vote</span>
                                </a>
                            </td>
                            <td>
                                <a href="/coin/8615" class="button is-success">
                                    <span class="votes is-hidden-tablet">
                                        30047
                                    </span>
                                    <span>Vote</span>
                                </a>
                            </td>
                        </tr>
                        <tr data-listingid="9652">
                            <td class="has-wishlist ignore">
                                <span>
                                    3
                                </span>

                                <div class="wishlist-button">
                                    <div class="wishlist-remove">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                            </td>
                            <td class="ignore">
                                <div class="flex">
                                    <img src="https://coinsniper.net/storage/images/47323683-86eb-448a-9d44-5f4bee797efa.png"
                                        alt="" height="24">
                                </div>
                            </td>
                            <td class="name">
                                <div class="name">
                                    <b>1Doge Finance</b>
                                    <div class="is-hidden-tablet">
                                        $1DOGE <span class="network">BSC</span>
                                        <br>
                                        <span class="presale">(Presale)</span>
                                    </div>
                                </div>
                            </td>
                            <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                            <td class="is-hidden-mobile">
                                $1DOGE
                            </td>
                            <td class="is-hidden-mobile"><span class="presale">Presale</span></td>
                            <td class="is-hidden-mobile"></td>
                            <td class="is-hidden-mobile age">Tomorrow</td>
                            <td class="is-hidden-mobile">
                                <span class="votes">
                                    30966
                                </span>
                                <a href="/coin/9652" class="button is-success is-hidden">
                                    <span class="votes is-hidden-tablet">
                                        30966
                                    </span>
                                    <span>Vote</span>
                                </a>
                            </td>
                            <td>
                                <a href="/coin/9652" class="button is-success">
                                    <span class="votes is-hidden-tablet">
                                        30966
                                    </span>
                                    <span>Vote</span>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
    </div>
</section>
@endsection
