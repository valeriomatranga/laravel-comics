<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('partials.header');

    <main>
        <div id="jumbotron"></div>
        <div class="content">
            @yield('content')
            <div>
                <button>load more</button>
            </div>
        </div>
        <div id="sponsor">
            <div>
                <img src="../img/buy-comics-digital-comics.png" alt="">
                <span>digital comics</span>
            </div>
            <div>
                <img src="../img/buy-comics-merchandise.png" alt="">
                <span>dc merchandise</span>
            </div>
            <div>
                <img src="../img/buy-comics-subscriptions.png" alt="">
                <span>subscription</span>
            </div>
            <div>
                <img src="../img/buy-comics-shop-locator.png" alt="">
                <span>comic shop locator</span>
            </div>
            <div>
                <img src="../img/buy-dc-power-visa.svg" alt="">
                <span>dc power visa</span>
            </div>
        </div>
    </main>

    <footer>
        <div id="footer_left">
            <div class="colon_left">
                <h2>dc comics</h2>
                <a href="{{route('characters')}}">Characters</a>
                <a href="{{route('comics')}}">Comics</a>
                <a href="{{route('movies')}}">Movies</a>
                <a href="{{route('tv')}}">Tv</a>
                <a href="{{route('games')}}">Games</a>
                <a href="{{route('collectibles')}}">Collectibles</a>
                <a href="{{route('videos')}}">Videos</a>
                <a href="{{route('fans')}}">Fans</a>
                <a href="{{route('news')}}">News</a>  
                
                <h2>shop</h2>
                <a href="{{route('shop')}}">Shop DC</a>
                <a href="{{route('shop')}}">Shop DC Collectibles</a>
            </div>
            <div class="colon_center">
                <h2>dc</h2>
                <a href="#">Terms Of Use</a>
                <a href="#">Privacy policy (New)</a>
                <a href="#">Ad Choices</a>
                <a href="#">Advertsing</a>
                <a href="#">Jobs</a>
                <a href="#">Subscrptions</a>
                <a href="#">Talent Workshops</a>
                <a href="#">CPSC Certificates</a>
                <a href="#">Ratings</a>
                <a href="#">Shop Help</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="colon_right">
                <h2>sites</h2>
                <a href="#">DC</a>
                <a href="#">MAD Magazine</a>
                <a href="#">DC Kids</a>
                <a href="#">DC Universe</a>
                <a href="#">DC Power Visa</a>
                
            </div>
        </div>
        <div id="footer_right"></div>
        <div class="footer_left_bottom">
            <p>All Site Content TM And 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.</p>
            <a href="#">Cookies Settings</a>
        </div>
        
    </footer>
    <div class="social">
        <div class="social_left">
            <button>sign-up-now!</button>
        </div>
        <div class="social_right"></div>
    </div>

</body>
</html>