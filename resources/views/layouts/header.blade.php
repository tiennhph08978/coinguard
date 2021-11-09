<section class="menu">
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="overlay is-hidden-tablet is-hidden"></div>
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="{{ asset('images/img-logo.png') }}">
                </a>

                <a href="#" class="navbar-item mobile-search is-hidden-tablet">
                    <i class="fas fa-search"></i>
                </a>

                
            </div>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample" href="/">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            <div class="navbar-menu mobile-search-menu is-hidden-tablet">
                <div class="field has-search has-addons">
                    <div class="control has-icons-left">
                        <input class="input" type="text" placeholder="Search coins...">
                        <span class="icon is-small is-left"><i class="fas fa-search"></i></span>
                    </div>
                    <div class="results is-hidden">
                    </div>
                </div>
            </div>

            <div class="navbar-menu main-menu">
                <div class="navbar-start">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="/" class="navbar-link is-hidden-mobile">
                            Coins
                        </a>
                        <div class="navbar-dropdown">
                            <a href="/portfolio" class="navbar-item is-hidden-tablet border-bottom ">
                                <strong><i class="fas fa-wallet"></i> Portfolio</strong>
                            </a>
                            <a href="/watchlist" class="navbar-item is-hidden-tablet ">
                                <strong><i class="fas fa-star"></i> Watchlist</strong>
                            </a>
                            <hr class="navbar-divider is-hidden-tablet">
                            <a href="/" class="navbar-item is-full is-active">
                                <strong><i class="far fa-clock"></i> Today's Best</strong>
                            </a>
                            <a href="/alltime" class="navbar-item ">
                                <strong><i class="fas fa-fire"></i> All Time Best</strong>
                            </a>
                            <a href="/new" class="navbar-item ">
                                <strong><i class="fas fa-plus"></i> New Listings</strong>
                            </a>
                            <a href="/marketcap" class="navbar-item ">
                                <strong><i class="fas fa-coins"></i> By Marketcap</strong>
                            </a>
                            <a href="/presales" class="navbar-item ">
                                <strong><i class="fas fa-stopwatch"></i> Presales</strong>
                            </a>
                            <hr class="navbar-divider is-hidden-tablet">

                            <a href="/submit" class="navbar-item is-hidden-tablet ">
                                <strong><i class="fas fa-upload"></i> Submit Coin</strong>
                            </a>
                            <a href="/contact" class="navbar-item is-hidden-tablet ">
                                <strong><i class="fa fa-envelope"></i> Contact Us</strong>
                            </a>
                            <a href="#" class="button is-primary twitter is-hidden-tablet">
                                Follow us on twitter! <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="button is-primary telegram is-hidden-tablet">
                                Join our Telegram group! <i class="fab fa-telegram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="field has-search is-hidden-mobile">
                        <form autocomplete="off" method="POST">
                            {{ csrf_field() }}
                            <div class="control has-icons-left">
                                <input class="input" type="text" id="searchCoin1" placeholder="Search coins...">
                                <span class="icon is-small is-left"><i class="fas fa-search"></i></span>
                                <div id="search_coin"></div>
                            </div>
                            
                        </form>
                    </div>
                </div>

                <div class="navbar-end is-hidden-mobile">

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a href="/" class="navbar-link is-hidden-mobile">
                            Account
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="/portfolio">
                                <strong><i class="fas fa-wallet"></i> Portfolio</strong>
                            </a>
                            <a class="navbar-item" href="/watchlist">
                                <strong><i class="fas fa-star"></i> Watchlist</strong>
                            </a>
                            @if (auth()->check())
                                <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <strong><i class="fas fa-sign-in-alt"></i> Logout</strong>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                    @csrf
                                </form>

                            @else
                                <a class="navbar-item" href="/login">
                                    <strong><i class="fas fa-sign-in-alt"></i> Login</strong>
                                </a>
                                <a class="navbar-item" href="/register">
                                    <strong><i class="fas fa-user-plus"></i> Register</strong>
                                </a>
                            @endif

                        </div>
                    </div>

                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="#" class="button is-primary telegram is-hidden-mobile">
                                <i class="fab fa-telegram"></i>
                            </a>
                            <a href="#" class="button is-primary twitter is-hidden-mobile">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a class="button is-success" href="/submit">
                                <strong><i class="fas fa-upload"></i> Submit Coin</strong>
                            </a>

                            <a class="button is-primary is-hidden-tablet" href="/contact">
                                <strong><i class="fa fa-envelope"></i> Contact Us</strong>
                            </a>

                            <a href="#" class="button is-primary twitter is-hidden-tablet">
                                Follow us on twitter! <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>
<script>
    var path = "{{ url('search') }}";
    $('#searchCoin1').typeahead({
        source: function (query, process) {
            return $.get(path, {
                query: query
            }, function (data) {
                return process(data);
            });
        },
        highlighter: function (item, data) {
        var parts = item.split('#'),
        html = '<div class="d-flex" style="white-space: pre-line">';
        html += '<div class="tx-center">';
        html += '<img src="/storage/'+data.image+'" alt="" width=80px>';
        html += '</div>';
        html += '<div class="mg-l-10 align-self-center">';
        html += '<div><strong>'+data.name+'</strong></div>';
        html += '<div><p>'+data.symbol+'</p></div>';
        html += '</div>';
        html += '</div>';
        return html;
        },
    });

</script>