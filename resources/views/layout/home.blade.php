<?php
$header_navbar = config('header_navbar');
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
        <div class="additional">
            <div class="container">
                <div>
                    <span>DC POWER VISA@</span>
                    <span style="margin-left:40px">ADDITIONAL DC SERIES</span>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <div class="row">
                    <ul>
                        <li><a href="{{ route('home') }}"><img src="{{ asset('images/dc-logo.png') }}" alt=""></a></li>
                        @foreach ($header_navbar as $link)
                        <li>{{ $link }}</li>
                        @endforeach
                    </ul>
                    <div class="searchbar">
                        <input type="text" placeholder="Search">
                    </div>
                </div>
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
            <div class="container">
                <div class="fotter-list-cont ls">
                    <div class="t-list">
                        <div class="list">
                            <ul>
                                <li>dc comics</li>
                                <li>Characters</li>
                                <li>Comics</li>
                                <li>Movies</li>
                                <li>TV</li>
                                <li>Games</li>
                                <li>Videos</li>
                                <li>News</li>
                            </ul>
                            <ul>
                                <li>dc comics</li>
                                <li>Characters</li>
                            </ul>
                        </div>
                        <div class="list">
                            <ul>
                                <li>dc</li>
                                <li>Terms Of Use</li>
                                <li>privacy policy(New)</li>
                                <li>Ad Choise</li>
                                <li>TV</li>
                                <li>Games</li>
                                <li>Videos</li>
                                <li>News</li>
                                <li>Terms Of Use</li>
                                <li>privacy policy(New)</li>
                                <li>Ad Choise</li>
                            </ul>
                        </div>
                        <div class="list">
                            <ul>
                                <li>dc</li>
                                <li>Terms Of Use</li>
                                <li>privacy policy(New)</li>
                                <li>Ad Choise</li>
                                <li>TV</li>
                            </ul>
                        </div>
                    </div>
                    <div class="b-list">
                        <div>All site Content TM and 2020 DC Entertainment, unless otherwise <span>noted here</span>.All rights reserved.<br><span>Cookies Setting</span></div>
                    </div>
                </div>
                <div class="fotter-list-cont image">
                </div>
            </div>
        </div>
        <div class="footer-icons">
            <div class="container">
                <div class="btn-sign">
                    <p>SIGN-UP NOW!</p>
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

            </div>
        </div>
    </footer>
</body>

</html>