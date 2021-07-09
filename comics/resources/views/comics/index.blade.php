@extends('layout.app')

@section('title', 'comics')

@section('content')
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
@endsection