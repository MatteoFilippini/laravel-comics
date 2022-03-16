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
        </div>
    </div>
</div>
@endsection