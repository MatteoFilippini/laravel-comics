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
            jumbotron
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
        <nav>

        </nav>
    </main>
    <footer>
        footer
    </footer>
</body>

</html>