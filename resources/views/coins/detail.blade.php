@extends('layouts.default')

@section('title', $coin->name)

@section('content')

<section class="listing">
    <div class="container">

        <div class="columns">
            <div class="column is-6">
                <div class="bread">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/">Top Coins</a></li>
                        <li>{{ $coin->name }}</li>
                    </ul>
                </div>
            </div>
            <div class="column is-6">
                <div class="pro">
                    <a href="/out/260" class="pro-image" target="_blank">
                        <img src="https://coinsniper.net/storage/images/8ded6398-b0ad-4657-9fe5-6d6303e3278d.gif" alt=""
                            class="is-hidden-mobile">
                        <img src="https://coinsniper.net/storage/images/5a36ced6-cca5-45bc-bf57-593b39f22583.gif" alt=""
                            class="is-hidden-tablet">
                    </a>
                    <p class="has-text-right">
                        <a href="/contact">Advertise with us!</a>
                    </p>
                </div>
            </div>
        </div>


        <div class="listing">
            <div class="columns">
                <div class="column is-8">
                    <div class="listing-header">
                        <img src="/storage/{{ $coin->image }}" alt="">
                        <div>
                            <h1>
                                {{ $coin->name }}
                                <br class="is-hidden-tablet">
                                <span>$PUPPY</span>
                                <div class="wishlist-button has-tooltip-arrow" data-tooltip="Add to Watchlist">
                                    <div class="wishlist-add"><i class="far fa-star"></i></div>
                                </div>
                            </h1>
                            <div class="contract can-copy is-hidden-mobile"
                                data-copy="0x19983df692be8FA81c60fd27D6fc91E8928fA97a">
                                BSC Contract Address:
                                <span>0x19983df692be8FA81c60fd27D6fc91E8928fA97a</span>
                                <div class="copy">
                                    <img src="/assets/img/copy.png" alt=""> <span
                                        class="copied is-hidden">copied!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contract can-copy is-hidden-tablet"
                        data-copy="0x19983df692be8FA81c60fd27D6fc91E8928fA97a">
                        BSC Contract Address:
                        <span>0x19983df692be8FA81c60fd27D6fc91E8928fA97a</span>
                        <div class="copy">
                            <img src="/assets/img/copy.png" alt=""> <span class="copied is-hidden">copied!</span>
                        </div>
                    </div>

                    <div class="status is-hidden-mobile">
                        <h2>Status: <span class="listed">listed</span></h2>
                        <h2>Votes for listing: <span class="listing-votes green">500/500</span>
                        </h2>
                        <h2>Votes: <span class="votes">{{ count($vote) }}</span></h2>
                        <h2>Votes Today: <span class="votes">{{ count($voteday) }}</span></h2>
                        <h2>Network: <span class="votes">{{ $coin->network }}</span></h2>
                    </div>

                    <div class="status is-hidden-tablet">
                        <table class="table is-fullwidth">
                            <tbody>
                                <tr class="is-hidden-tablet">
                                    <th>Watchlists</th>
                                    <td>
                                        <span class="watchlist-counter">700</span> x <i class="fa fa-star"
                                            style="color: gold;"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span class="listed">listed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Votes for listing</th>
                                    <td><span class="listing-votes green">500/500</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>All time votes</th>
                                    <td><span class="votes">29493</span></td>
                                </tr>
                                <tr>
                                    <th>Votes today:</th>
                                    <td><span class="votes">63</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="description">
                        ${{ $coin->description }}
                    </div>

                    <div class="listing-vote">
                        <h2>Vote for <span>{{ $coin->name }}</span></h2>
                        <p>Vote for {{ $coin->name }} to increase its rank!</p>

                        @if (auth()->check())
                        <form action="/vote/{{ $coin->id }}" method="GET">

                            <div class="columns">
                                <div class="column">
                                    <button type="submit" class="button is-success" 
                                        data-text="VOTE NOW FOR {{ $coin->name }}">
                                        Vote for {{ $coin->name }}
                                    </button>
                                </div>
                            </div>

                        </form>
                        @else
                        <a href="/login" class="button is-primary">
                            PLEASE LOGIN TO VOTE
                        </a>
                        
                        @endif

                    </div>

                    <div class="note">Information incorrect? Please report it to <a
                            href="mailto:info@coinsniper.net">info@coinsniper.net</a></div>
                </div>

                <div class="column is-4">
                    <table class="table">
                        <tbody>
                            <tr class="is-hidden-mobile">
                                <th colspan="2">Popularity</th>
                            </tr>
                            <tr class="is-hidden-mobile">
                                <td>Watchlists</td>
                                <td>
                                    <i class="fa fa-star" style="color: gold;"></i> On
                                    <span class="watchlist-counter">700</span>
                                    watchlists
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">Links</th>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>
                                    <i class="fa fa-globe"></i>&nbsp;
                                    <a href="{{ $coin->website_link }}" target="_blank">Visit Website</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Telegram</td>
                                <td>
                                    <i class="fab fa-telegram"></i>&nbsp;
                                    <a href="{{ $coin->telegram_link }}" target="_blank">Join Telegram</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Twitter</td>
                                <td>
                                    <i class="fab fa-twitter"></i>&nbsp;
                                    <a href="{{ $coin->twitter_link }}" target="_blank">Follow Twitter</a>
                                </td>
                            </tr>

                            <tr>
                                <th colspan="2">Price</th>
                            </tr>
                            <tr>
                                <td>Marketcap</td>
                                <td class="price">$ 999,055</td>
                            </tr>
                            <tr>
                                <td>Price (USD)</td>
                                <td class="price is-hidden-tablet">$ 0.000000000999</td>
                                <td class="price is-hidden-mobile">$ 0.0000000009990558</td>
                            </tr>
                            <tr>
                                <td>Price (BNB)</td>
                                <td class="price">0.000000000003 BNB</td>
                            </tr>
                            <tr>
                                <th colspan="2">Charts / Swap</th>
                            </tr>
                            <tr>
                                <td>Charts</td>
                                <td>
                                    <a href="https://poocoin.app/tokens/0x19983df692be8fa81c60fd27d6fc91e8928fa97a"
                                        target="_blank">
                                        View Charts
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Buy Now</td>
                                <td>
                                    <a href="https://exchange.pancakeswap.finance/#/swap?outputCurrency=0x19983df692be8FA81c60fd27D6fc91E8928fA97a"
                                        target="_blank">
                                        Buy Now
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">Information</th>
                            </tr>
                            <tr>
                                <td>Added</td>
                                <td>{{$coin->created_at}}</td>
                            </tr>
                            <tr>
                                <td>Launch</td>
                                <td>{{$coin->lauch_date}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home">
    <div class="container">
        <div class="listings promoted">
            <div class="columns promoted-header">
                <div class="column is-4">
                    <h2>Promoted</h2>
                </div>
                <div class="column has-text-right is-8">
                    <a href="/contact">Your coin here?<span class="is-hidden-mobile"> Contact us!</span></a>
                </div>
            </div>
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

                    <tr data-listingid="8615">
                        <td class="has-wishlist ignore">
                            <span>
                                1
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/4245dbf4-9551-4dcb-9d47-876995d429e1.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>PuppyDoge</b>
                            <div class="is-hidden-tablet">
                                $PUPPY <span class="network">BSC</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            PUPPY
                        </td>
                        <td class="is-hidden-mobile price">$ 999,055</td>
                        <td class="is-hidden-mobile price">$ 0.0000000009990558</td>
                        <td class="is-hidden-mobile">2 days</td>
                        <td class="is-hidden-mobile"><span class="votes">29493</span></td>
                        <td>
                            <a href="/coin/8615" class="button is-success">
                                <span class="votes is-hidden-tablet">29493</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="9922">
                        <td class="has-wishlist ignore">
                            <span>
                                2
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/12e4e9cd-02b2-49f7-9e19-3c33bc2483a9.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>BnbRain</b>
                            <div class="is-hidden-tablet">
                                $BRAIN <span class="network">BSC</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            BRAIN
                        </td>
                        <td class="is-hidden-mobile price">$ 287,632</td>
                        <td class="is-hidden-mobile price">$ 0.0000007190808295</td>
                        <td class="is-hidden-mobile">5 days</td>
                        <td class="is-hidden-mobile"><span class="votes">26526</span></td>
                        <td>
                            <a href="/coin/9922" class="button is-success">
                                <span class="votes is-hidden-tablet">26526</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="10329">
                        <td class="has-wishlist ignore">
                            <span>
                                3
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/bb444592-6743-462f-b8d9-d434976844f3.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>Able Finance</b>
                            <div class="is-hidden-tablet">
                                $ABLE <span class="network">BSC</span>
                                <br>
                                <span class="presale">(Presale)</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            ABLE
                        </td>
                        <td class="is-hidden-mobile"><span class="presale">Presale</span></td>
                        <td class="is-hidden-mobile"></td>
                        <td class="is-hidden-mobile">Tomorrow</td>
                        <td class="is-hidden-mobile"><span class="votes">23887</span></td>
                        <td>
                            <a href="/coin/10329" class="button is-success">
                                <span class="votes is-hidden-tablet">23887</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="9652">
                        <td class="has-wishlist ignore">
                            <span>
                                4
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/47323683-86eb-448a-9d44-5f4bee797efa.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>1Doge Finance</b>
                            <div class="is-hidden-tablet">
                                $1DOGE <span class="network">BSC</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            1DOGE
                        </td>
                        <td class="is-hidden-mobile price">-</td>
                        <td class="is-hidden-mobile price">-</td>
                        <td class="is-hidden-mobile">In 5 days</td>
                        <td class="is-hidden-mobile"><span class="votes">17978</span></td>
                        <td>
                            <a href="/coin/9652" class="button is-success">
                                <span class="votes is-hidden-tablet">17978</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="10330">
                        <td class="has-wishlist ignore">
                            <span>
                                5
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/7d1ff9cb-00cf-4280-b1b8-a9332f70864e.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>Alien Doge</b>
                            <div class="is-hidden-tablet">
                                $ALIEN <span class="network">BSC</span>
                                <br>
                                <span class="presale">(Presale)</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            ALIEN
                        </td>
                        <td class="is-hidden-mobile"><span class="presale">Presale</span></td>
                        <td class="is-hidden-mobile"></td>
                        <td class="is-hidden-mobile">In 1 day</td>
                        <td class="is-hidden-mobile"><span class="votes">6368</span></td>
                        <td>
                            <a href="/coin/10330" class="button is-success">
                                <span class="votes is-hidden-tablet">6368</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="10425">
                        <td class="has-wishlist ignore">
                            <span>
                                6
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/bf693498-85a7-4be9-93f5-6420426e0ba9.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>Moon Boost Token</b>
                            <div class="is-hidden-tablet">
                                $MOONB <span class="network">BSC</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            MOONB
                        </td>
                        <td class="is-hidden-mobile price">$ 33,239</td>
                        <td class="is-hidden-mobile price">$ 0.0000000000614931</td>
                        <td class="is-hidden-mobile">3 days</td>
                        <td class="is-hidden-mobile"><span class="votes">4570</span></td>
                        <td>
                            <a href="/coin/10425" class="button is-success">
                                <span class="votes is-hidden-tablet">4570</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="9533">
                        <td class="has-wishlist ignore">
                            <span>
                                7
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/61739729-b380-4752-bfa3-93c53d5a8578.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>MegaDOGE</b>
                            <div class="is-hidden-tablet">
                                $MEGADOGE <span class="network">BSC</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            MEGADOGE
                        </td>
                        <td class="is-hidden-mobile price">-</td>
                        <td class="is-hidden-mobile price">-</td>
                        <td class="is-hidden-mobile">Just Launched</td>
                        <td class="is-hidden-mobile"><span class="votes">3581</span></td>
                        <td>
                            <a href="/coin/9533" class="button is-success">
                                <span class="votes is-hidden-tablet">3581</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="10564">
                        <td class="has-wishlist ignore">
                            <span>
                                8
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/4fb274a4-c0d0-4d0b-8903-984c823f9544.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>BABY AKITA INU</b>
                            <div class="is-hidden-tablet">
                                $BAKITA <span class="network">BSC</span>
                                <br>
                                <span class="presale">(Presale)</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            BAKITA
                        </td>
                        <td class="is-hidden-mobile"><span class="presale">Presale</span></td>
                        <td class="is-hidden-mobile"></td>
                        <td class="is-hidden-mobile">Tomorrow</td>
                        <td class="is-hidden-mobile"><span class="votes">2487</span></td>
                        <td>
                            <a href="/coin/10564" class="button is-success">
                                <span class="votes is-hidden-tablet">2487</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="9557">
                        <td class="has-wishlist ignore">
                            <span>
                                9
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/fd719f32-218f-4ae3-90c7-a1a1b04146f0.png"
                                    alt="" height="24">
                                <div class="cmccg">
                                    <a href="https://www.coingecko.com/en/coins/anon-inu" target="_blank"
                                        data-tooltip="CoinGecko" class="cg">
                                        <img class="cg" src="/assets/img/cg.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <b>ANON INU</b>
                            <div class="is-hidden-tablet">
                                $AINU <span class="network">BSC</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            AINU
                        </td>
                        <td class="is-hidden-mobile price">$ 6,129,414</td>
                        <td class="is-hidden-mobile price">$ 0.0000000122504220</td>
                        <td class="is-hidden-mobile">11 days</td>
                        <td class="is-hidden-mobile"><span class="votes">995</span></td>
                        <td>
                            <a href="/coin/9557" class="button is-success">
                                <span class="votes is-hidden-tablet">995</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="8930">
                        <td class="has-wishlist ignore">
                            <span>
                                10
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/3703bf1c-6e23-4a0f-9288-bc962fb23f0d.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>Wizard Doge</b>
                            <div class="is-hidden-tablet">
                                $WDOGE <span class="network">BSC</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            WDOGE
                        </td>
                        <td class="is-hidden-mobile price">$ 19,080</td>
                        <td class="is-hidden-mobile price">$ 0.0000001908055608</td>
                        <td class="is-hidden-mobile">16 days</td>
                        <td class="is-hidden-mobile"><span class="votes">526</span></td>
                        <td>
                            <a href="/coin/8930" class="button is-success">
                                <span class="votes is-hidden-tablet">526</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                    <tr data-listingid="10680">
                        <td class="has-wishlist ignore">
                            <span>
                                11
                            </span>

                            <div class="wishlist-button">
                                <div class="wishlist-add"><i class="far fa-star"></i></div>
                            </div>
                        </td>
                        <td class="ignore">
                            <div class="flex">
                                <img src="https://coinsniper.net/storage/images/0c05f951-ac95-4466-b0a0-cbda202e4491.png"
                                    alt="" height="24">
                            </div>
                        </td>
                        <td>
                            <b>CakeX</b>
                            <div class="is-hidden-tablet">
                                $CAKEX <span class="network">BSC</span>
                            </div>
                        </td>
                        <td class="is-hidden-mobile"><span class="network">BSC</span></td>
                        <td class="is-hidden-mobile">
                            CAKEX
                        </td>
                        <td class="is-hidden-mobile price">-</td>
                        <td class="is-hidden-mobile price">-</td>
                        <td class="is-hidden-mobile">Tomorrow</td>
                        <td class="is-hidden-mobile"><span class="votes">5</span></td>
                        <td>
                            <a href="/coin/10680" class="button is-success">
                                <span class="votes is-hidden-tablet">5</span>
                                <span>Vote</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
