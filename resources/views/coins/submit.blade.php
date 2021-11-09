@extends('layouts.default')

@section('title', 'Submit Coin')

@section('content')
    <section class="listing-form">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <div class="message info">
                        Want a free Crypto Price Bot in your telegram group?<br>
                        1. Submit your coin with the form below<br>
                        2. Join <a target="_blank" href="https://t.me/coinsnipernet">https://t.me/coinsnipernet</a><br>
                        3. Ask the admins there for more info!
                    </div>

                    <div class="listing-form">
                        <h1>Submit new coin to CoinSniper</h1>
                        <p>Please fill out this form carefully to add a new coin to <a href="/">CoinSniper</a>. After
                            submission,
                            your
                            coin will be visible on the <a href="/listings/new" target="_blank">New Listings</a> page.
                            Get 500 votes to be
                            officially listed on <a href="/">CoinSniper</a>.</p>



                        <form action="/submit" method="POST" enctype="multipart/form-data">
                            {{-- <input type="hidden" name="_token" value="NHIrzLS5wNpbwF3Ee9fhn7DDSjNBEfdXzFtNMihV"> --}}
                            @csrf
                            <div class="columns">
                                <div class="column is-4">
                                    <div class="image-upload has-text-centered">
                                        {{-- <input type="hidden" name="_token" value="NHIrzLS5wNpbwF3Ee9fhn7DDSjNBEfdXzFtNMihV"> --}}
                                        {{-- <input type="hidden" name="image_url" value=""> --}}
                                        {{-- <div class="has-hidden-input">
                                            <input name="photo" type="file" class="is-hidden">
                                        </div> --}}
                                        <div class="field has-text-centered">
                                            <label class="label">Logo Upload*</label>
                                        </div>
                                        <div class="">
                                            {{-- <img src="https://coinsniper.net/assets/img/placeholder.jpg" alt=""> --}}
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        {{-- <div class="save is-hidden">Save</div>
                                        <div class="remove is-hidden">Delete</div> --}}

                                        {{-- <p class="error"></p>
                                        <p class="message"></p> --}}
                                    </div>
                                </div>
                                <div class="column is-8">
                                    <div class="field">
                                        <label class="label">Name*</label>
                                        <div class="control">
                                            <input name="name" class="input " type="text" placeholder="Bitcoin" required=""
                                                value="">
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label">Symbol*</label>
                                        <div class="control">
                                            <input name="symbol" class="input " type="text" placeholder="BTC" required=""
                                                value="">
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label">Network/Chain</label>
                                        <div class="select">
                                            <select name="network">
                                                <option value="BSC" selected="">Binance Smart Chain (BSC)</option>
                                                <option value="ETH">Ethereum (ETH)</option>
                                                <option value="MATIC">Polygon (MATIC)</option>
                                                <option value="TRX">Tron (TRX)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Project in presale phase?*</label>
                                <div class="control">
                                    <label class="radio">
                                        <input type="radio" name="presale" value="" checked="">
                                        No
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="presale" value="Presale">
                                        Yes
                                    </label>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label contract-address-label">Contract Address*</label>
                                <label class="label contract-address-label is-hidden">Contract Address (optional for
                                    presales)</label>
                                <div class="control">
                                    <input name="contract_address" class="input " type="text"
                                        placeholder="0xB8c77482e45F1F44dE1745F52C74426C631bDD52" value=""
                                        required="required">
                                </div>

                                <p class="help presale is-hidden">Your contract address will be hidden until your presale is
                                    finished.</p>
                            </div>

                            <div class="field presale-link is-hidden">
                                <label class="label">Presale link (optional)</label>
                                <div class="control">
                                    <input name="presale_link" class="input " type="text"
                                        placeholder="https://dxsale.com/your-presale-link-here" value=""
                                        disabled="disabled">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Description*</label>
                                <div class="control">
                                    <textarea name="description" maxlength="1048" class="textarea "
                                        placeholder="Describe your coin here. What is the goal, plans, why is this coin unique?"
                                        required=""></textarea>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Custom chart link (optional)</label>
                                <div class="control">
                                    <input name="custom_chart_link" class="input " type="text"
                                        placeholder="https://dex.guru/token/0x...." value="">
                                </div>
                                <p class="help">By default, Poocoin (BSC) and Dextools (ETH) is used. Enter custom chart
                                    link here if you want to use it.</p>
                            </div>

                            <div class="field">
                                <label class="label">Custom swap link (optional)</label>
                                <div class="control">
                                    <input name="custom_swap_link" class="input " type="text"
                                        placeholder="https://apeswap.finance/..." value="">
                                </div>
                                <p class="help">By default, PancakeSwap v2 (BSC) and UniSwap (ETH) is used. Enter custom
                                    swap link here if you want to use it, like Apeswap.</p>
                            </div>

                            <div class="field">
                                <label class="label">Website link*</label>
                                <div class="control">
                                    <input name="website_link" class="input " type="text"
                                        placeholder="https://coinsniper.net" required="" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Launch Date*</label>
                                <div class="control">
                                    <input type="date" name="lauch_date" class="input">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Telegram link*</label>
                                <div class="control">
                                    <input name="telegram_link" class="input " type="text"
                                        placeholder="https://t.me/coinsniper" required="" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Twitter link</label>
                                <div class="control">
                                    <input name="twitter_link" class="input " type="text"
                                        placeholder="https://twitter.com/coinsniper" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Discord link</label>
                                <div class="control">
                                    <input name="discord_link" class="input " type="text"
                                        placeholder="https://discord.gg/coinsniper" value="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox" name="terms" required="">
                                        I agree to the <a href="/terms-and-conditions" target="_blank">Terms and
                                            Conditions*</a>
                                    </label>
                                </div>
                            </div>

                            {{-- <div class="field">
                                <div id="recaptcha_submit" class="g-recaptcha">
                                    <div style="width: 304px; height: 78px;">
                                        <div><iframe title="reCAPTCHA"
                                                src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6Ldd2doaAAAAAFhvJxqgQ0OKnYEld82b9FKDBnRE&amp;co=aHR0cHM6Ly9jb2luc25pcGVyLm5ldDo0NDM.&amp;hl=en&amp;v=RDRwZ7RcROX_wCxEJ01WeqEX&amp;theme=light&amp;size=normal&amp;badge=inline&amp;cb=mxbj0bxkrmop"
                                                width="304" height="78" role="presentation" name="a-notj131np9kv"
                                                frameborder="0" scrolling="no"
                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                        </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                            class="g-recaptcha-response"
                                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div><iframe style="display: none;"></iframe>
                                </div>
                            </div> --}}

                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-success" type="submit">SUBMIT COIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
