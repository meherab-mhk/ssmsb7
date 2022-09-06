@extends('website.master')

@section('title')
    Home
@endsection

@section('body')
    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <ol class="carousel-indicators">
            <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#slider" data-bs-slide-to="1" class=""></li>
            <li data-bs-target="#slider" data-bs-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner slider-img">
            <div class="carousel-item active">
                <img src="{{asset('/')}}website/img/slide1.jpg" alt="" class="w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/slide2.jpg" alt="" class="w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/slide3.jpg" alt="" class="w-100">
            </div>
        </div>
    </div>
@endsection
