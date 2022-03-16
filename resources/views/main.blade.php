@extends('layout.home')



@section('content')
<div class="wrapper">
    <div class="container">
        <div class="cards">
            @foreach($cards as $card)
            <div class="card">
                <img src="{{ $card['thumb'] }}" alt="">
                <h4>{{ $card['series'] }}</h4>
            </div>
            @endforeach
        </div>
        <a href="#">LOAD MORE</a>
    </div>
    <div class="menu">
        <div class="menu-card">
            <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="" />
            <h4>DIGITAL COMICS</h4>
        </div>
        <div class="menu-card">
            <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" />
            <h4>DC MERCHANDISE</h4>
        </div>
        <div class="menu-card">
            <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" />
            <h4>SUBSCRIPTION</h4>
        </div>
        <div class="menu-card">
            <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" />
            <h4>COMICS SHOP LOCATOR</h4>
        </div>
        <div class="menu-card">
            <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" />
            <h4>DC POWER VISA</h4>
        </div>
    </div>
</div>

@endsection