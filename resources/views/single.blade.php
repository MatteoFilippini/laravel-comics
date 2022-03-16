@extends('layout.home');

@section('content')
<div class="single">
    <div class="bg-blue"></div>
    <div class="bg-white">
        <div class="container">
            <div class="info">
                <div class="desc">
                    <h2>{{ $cards[0]['title'] }}</h2>
                    <div class="banner">
                        <div class="price">
                            <p>U.S. Price {{ $cards[0]['price'] }}</p>
                            <span>AVAIBLE</span>
                        </div>
                        <div class="check">
                            <span>Check Availability</span>
                        </div>
                    </div>
                    <p>
                        {{ $cards[0]['description'] }}
                    </p>
                </div>
                <figure>
                    <img src="{{ $cards[0]['thumb'] }}" alt="">
                </figure>
            </div>
            <div class="spec">
                <div class="talent">
                    <h3>Talent</h3>
                    <div class="people">
                        <div class="name">Art by</div>
                        <div class="names">{{ $cards[0]['artists'][0] }} {{ $cards[0]['artists'][1] }}</div>
                    </div>
                    <div class="people">
                        <div class="name">Written by</div>
                        <div class="names">{{ $cards[0]['writers'][0] }} {{ $cards[0]['writers'][1] }}</div>
                    </div>
                </div>
                <div class="talent">
                    <h3>Specs</h3>
                    <div class="people">
                        <div class="name">Series</div>
                        <div class="names">{{ $cards[0]['series']  }}</div>
                    </div>
                    <div class="people">
                        <div class="name">U.S. Price</div>
                        <div class="names" style="color:black">{{ $cards[0]['price']  }}</div>
                    </div>
                    <div class="people">
                        <div class="name">On Sale Date:</div>
                        <div class="names" style="color:black">{{ $cards[0]['sale_date']  }}</div>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="menu-card">
                    <h4>DIGITAL COMICS</h4>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="" />
                </div>
                <div class="menu-card">
                    <h4>DC MERCHANDISE</h4>
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" />
                </div>
                <div class="menu-card">
                    <h4>SUBSCRIPTION</h4>
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" />
                </div>
                <div class="menu-card">
                    <h4>COMICS SHOP LOCATOR</h4>
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" />
                </div>
                <div class="menu-card">
                    <h4>DC POWER VISA</h4>
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection