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
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <a href="" type="button" class="btn btn-success">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/slide2.jpg" alt="" class="w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <a href="" type="button" class="btn btn-success">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}website/img/slide3.jpg" alt="" class="w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <a href="" type="button" class="btn btn-success">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <section class="">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row ">
                <div class="col">
                    <h1 class="text-center text-white">OUR POPULAR COURSES</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="{{asset('/')}}website/img/service2.jpg" alt="" class="card-img-top" style=" height: 200px">
                        <div class="card-body">
                            <h3>App Development</h3>
                            <h5>Meherab Hossain</h5>
                            <p>TK. 12000</p>
                            <p>Starting Date: 12.08.2022</p>
                            <hr>
                            <a href="" class="btn btn-outline-secondary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="{{asset('/')}}website/img/service3.jpg" alt="" class="card-img-top" style=" height: 200px">
                        <div class="card-body">
                            <h3>PHP with Laravel</h3>
                            <h5>Meherab Hossain</h5>
                            <p>TK. 12000</p>
                            <p>Starting Date: 12.08.2022</p>
                            <hr>
                            <a href="" class="btn btn-outline-secondary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="{{asset('/')}}website/img/slide.jpg" alt="" class="card-img-top" style=" height: 200px">
                        <div class="card-body">
                            <h3>Responsive Web Design</h3>
                            <h5>Meherab Hossain</h5>
                            <p>TK. 12000</p>
                            <p>Starting Date: 12.08.2022</p>
                            <hr>
                            <a href="" class="btn btn-outline-secondary">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row ">
                <div class="col">
                    <h1 class="text-center text-white">OUR RECENT COURSES</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="{{asset('/')}}website/img/service2.jpg" alt="" class="card-img-top" style=" height: 200px">
                        <div class="card-body">
                            <h3>App Development</h3>
                            <h5>Meherab Hossain</h5>
                            <p>TK. 12000</p>
                            <p>Starting Date: 12.08.2022</p>
                            <hr>
                            <a href="" class="btn btn-outline-secondary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="{{asset('/')}}website/img/service3.jpg" alt="" class="card-img-top" style=" height: 200px">
                        <div class="card-body">
                            <h3>PHP with Laravel</h3>
                            <h5>Meherab Hossain</h5>
                            <p>TK. 12000</p>
                            <p>Starting Date: 12.08.2022</p>
                            <hr>
                            <a href="" class="btn btn-outline-secondary">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="{{asset('/')}}website/img/slide.jpg" alt="" class="card-img-top" style=" height: 200px">
                        <div class="card-body">
                            <h3>Responsive Web Design</h3>
                            <h5>Meherab Hossain</h5>
                            <p>TK. 12000</p>
                            <p>Starting Date: 12.08.2022</p>
                            <hr>
                            <a href="" class="btn btn-outline-secondary">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
