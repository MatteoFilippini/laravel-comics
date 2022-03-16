<?php
$header_navbar = config('header_navbar');
// $cards = config('comics');

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
        @yield('content')
    </main>
    <footer>
        <div class="footer-list">
            <div class="fotter-list-cont">
                <div class="ft-h">
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
            <div class="fotter-list-cont"></div>
        </div>
        <div class="footer-icons">
            <div class="container">
                <nav>
                    <div class="btn-sign">
                        <p>SIGN IN</p>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <a href="#">FOLLOW US</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/footer-facebook.png') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/footer-twitter.png') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/footer-youtube.png') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/footer-pinterest.png') }}" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('images/footer-periscope.png') }}" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>