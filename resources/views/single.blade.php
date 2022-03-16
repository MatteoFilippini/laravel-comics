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
        </div>
    </div>
</div>
@endsection