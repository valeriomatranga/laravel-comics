<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '')</title>
    <!-- CDN fontawesom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
    {{-- link css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('layout/partials.header')

    @include('layout/partials.main')

    @include('layout/partials.footer')

    <div class="social">
        <button>sign-up-now!</button>
        <div class="icon_social">
            <span>follow us</span>
            <a href="#">
                <img src="{{asset('img/footer-facebook.png')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('img/footer-twitter.png')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('img/footer-youtube.png')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('img/footer-pinterest.png')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('img/footer-periscope.png')}}" alt="">
            </a>
        </div>
    </div>

</body>
</html>