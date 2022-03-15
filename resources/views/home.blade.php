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
    <title>Comics</title>
</head>



<body>
    <header>
        <nav>
            <div class="container">

                <ul>
                    <li><img src="{{asset('images/dc-logo.png') }}" alt=""></li>
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
                carte
            </div>
            <nav>
                nav
            </nav>
        </div>
    </main>
    <footer>
        footer
    </footer>
</body>

</html>