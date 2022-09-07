@extends('layouts.main')

@section('main-content')
@php
var_dump($data);
@endphp
<div class="wrapper"> 
    <div class="container py-3 d-flex flex-wrap position-relative">
        <span class="current-series-title"> CURRENT SERIES </span>
        <div class="series-card">
            <div href="#" class="container-card-image position-relative" >
                <span class="price-container">  </span>
                <img class="card-image" src="urlImage" alt="seriesName">
            </div>
            <div>
                <span class="card-title"> Nome </span>
            </div>
        </div>
        <div class="text-center"> 
            <button class="load-more-btn"> LOAD MORE </button>
         </div>
    </div>
</div>

<div class="buy-comics">
    <div class="container d-flex justify-content-between align-items-center px-5">
        <div>
            <img class="logos-buy-comics" src="dsad" alt="">
            <a href="#" class="text-white text-decoration-none"> dsad</a>
        </div>
    </div>           
</div>

@endsection