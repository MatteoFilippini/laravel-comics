@extends('layout.home')

@section('content')
<div class="single">
    <div class="bg-blue"></div>
    <div class="bg-white">
        <div class="container">
            <div class="info">
                <div class="desc">
                    <h2>{{ $cards['title'] }}</h2>
                    <div class="banner">
                        <div class="price">
                            <p>U.S. Price {{ $cards['price'] }}</p>
                            <span>AVAIBLE</span>
                        </div>
                        <div class="check">
                            <span>Check Availability</span>
                        </div>
                    </div>
                    <p>
                        {{ $cards['description'] }}
                    </p>
                </div>
                <figure>
                    <img src="{{ $cards['thumb'] }}" alt="">
                </figure>
            </div>
            <div class="spec">
                <div class="talent">
                    <h3>Talent</h3>
                    <!-- dobbiamo fare un iclio sugli artisti -->
                    <div class="people">
                        <div class="name">Art by</div>
                        <div class="names">
                            @foreach($cards['artists'] as $artist)
                            <span>{{ $artist }}</span>
                            @endforeach
                        </div>
                    </div>
                    <!-- dobbiamo fare un iclio sugli scrittori -->
                    <div class="people">
                        <div class="name">Written by</div>
                        <div class="names">
                            @foreach($cards['writers'] as $writer)
                            <span>{{ $writer }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="talent">
                    <h3>Specs</h3>
                    <div class="people">
                        <div class="name">Series</div>
                        <div class="names">{{ $cards['series']  }}</div>
                    </div>
                    <div class="people">
                        <div class="name">U.S. Price</div>
                        <div class="names" style="color:black">{{ $cards['price']  }}</div>
                    </div>
                    <div class="people">
                        <div class="name">On Sale Date:</div>
                        <div class="names" style="color:black">{{ $cards['sale_date']  }}</div>
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