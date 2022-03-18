@extends('layout.home')



@section('content')
<div class="wrapper">
    <div class="container">
        <div class="btn">CURRENT SERIES</div>
        <div class="cards">
            @foreach($cards as $index => $card)
            <div class="card">
                <a href="{{ route('single',['id' => $index]) }}"><img src="{{ $card['thumb'] }}" alt=""></a>
                <h4>{{ $card['series'] }}</h4>
            </div>
            @endforeach
        </div>
        <a href="#" id="btn">LOAD MORE</a>
    </div>
    <div class="menu">
        <div class="container">
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
</div>

@endsection