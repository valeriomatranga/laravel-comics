@extends('layout.app')

@section('title', 'comics')

@section('content')
    <div class="singol"></div>

    <div class="container_show">

        <div class="comic_show">
            <img src="{{$comic['thumb']}}" alt="">
            <span id="book">{{$comic['type']}}</span>
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

        </div>

        <div id="cont_bott">
            <div id="cont_left">
                <h2>Talent</h2>
                <div>
                    <div>
                        <span>Art By:</span>
                    </div>
                    <div>
                        @foreach ($comic['artists'] as $artist)
                        <span>{{$artist}}</span>
                        @endforeach
                    </div>
                </div>
                
                <div>
                    <div>
                        <span>Written by:</span>
                    </div>
                    <div>
                        @foreach ($comic['writers'] as $writer)
                        <span>{{$writer}}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="cont_right">
                <h2>Specs</h2>
                <div>
                    <div>
                        <span>Series:</span> 
                    </div>
                    <div>
                        <a href="#">{{$comic['series']}}</a> 
                    </div>
                </div>
                <div>
                    <div>
                        <span>U.S. Price:</span>
                    </div>
                    <div>
                        {{$comic['price']}}
                    </div>
                </div>
                <div>
                    <div>
                        <span>On Sale Date:</span>
                    </div>
                    <div>
                        {{$comic['sale_date']}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


