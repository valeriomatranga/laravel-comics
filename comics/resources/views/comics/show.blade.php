@extends('layout.app')

@section('title', 'comics')

@section('content')
    <div class="container">

        <div class="comic_show">
            <img src="{{$comic['thumb']}}" alt="">
            <span id="book">comic book</span>
            <span id="gallery">view gallery</span>
        </div>
        
        <div class="description">
            <div class="description_left">
                <span id="title">{{$comic['title']}}</span>
                <div id="date">
                    <div id="price">
                        <span>U.S. Price: <a href="">{{$comic['price']}}</a></span> 
                        <span>AVAILABLE</span> 
                    </div>
                    <div id="check">Check Availability</div>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="description_right">
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>

            <div>{{}}</div>
        </div>

    </div>
@endsection


