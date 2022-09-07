@extends('layouts.main')

@section('main-content')
<!-- @php
var_dump($comics);
@endphp -->
<div class="wrapper"> 
    <div class="container py-3 d-flex flex-wrap position-relative">
        <span class="current-series-title"> CURRENT SERIES </span>
        @forelse ($comics as  $comic)
        <div class="series-card">
            <div href="#" class="container-card-image position-relative" >
                <img class="card-image" src="{{$comic->image}}" alt="seriesName">
            </div>
            <div>
                <span class="card-title">{{$comic->title}}</span>
            </div>
        </div>
        @empty
        <p>Non sono presenti fumetti</p>
        @endforelse

    </div>
    <div class="text-center"> 
            <button class="load-more-btn"> LOAD MORE </button>
    </div>
</div>

<div class="buy-comics">
    <div class="container d-flex justify-content-between align-items-center px-5">
        @forelse ($buy_comics as $icon)
        <div>
            <img class="logos-buy-comics" src="{{$icon['urlImg']}}" alt="icona">
            <a href="#" class="text-white text-decoration-none">{{ $icon['text']}}</a>
        </div> 
        @empty
        <p>Non sono presenti fumetti</p>
        @endforelse  
    </div>           
</div>

@endsection