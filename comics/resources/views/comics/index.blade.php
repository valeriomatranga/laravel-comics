@extends('layout.app')

@section('title', 'comics')

@section('content')
    <div class="content">
        <div class="container">
            <h1>Current Serie</h1>

            @foreach ($comics as $index => $comic)
                <div class="comic">
                    <a href="{{route('comic', ['id' => $index])}}">
                        <img src="{{$comic['thumb']}}" alt="">
                        <span>{{$comic['series']}}</span>
                    </a>
                </div>
            @endforeach

        </div>

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

@endsection

