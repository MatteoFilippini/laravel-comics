<?php
$header_navbar = config('header_navbar');
$cards = config('comics');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Comics</title>
</head>



<body>
    <header>
        <nav>
            <div class="container">
                <ul>
                    <li><img src="{{ asset('images/dc-logo.png') }}" alt=""></li>
                    @foreach ($header_navbar as $link)
                    <li>{{ $link }}</li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <section id="jumbotron">
        </section>
    </header>
    <main>
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
    </main>
    <footer>
        footer
    </footer>
</body>

</html>