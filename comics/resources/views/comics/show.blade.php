@extends('layout.app')

@section('title', 'comics')

@section('content')
    <div class="container">
        <h1>Current Serie</h1>

        <div class="comic">
            <img src="{{$comic['thumb']}}" alt="">
            {{$comic['series']}}
        </div>
        
    </div>
@endsection