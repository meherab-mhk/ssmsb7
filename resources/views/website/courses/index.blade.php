@extends('website.master')
@section('title')
    All Courses
@endsection

@section('body')
<section class="">
    <div class="container-fluid py-5 bg-secondary">
        <div class="row ">
            <div class="col">
                <h1 class="text-center text-white">OUR TRAINING COURSES</h1>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card shadow rounded-0 border-0">
                    <img src="{{asset('/')}}website/img/service2.jpg" alt="" class="card-img-top rounded-0" style=" height: 200px">
                    <div class="card-body">
                        <h3>App Development</h3>
                        <h5>Meherab Hossain</h5>
                        <p>TK. 12000</p>
                        <p>Starting Date: 12.08.2022</p>
                        <hr>
                        <a href="{{route('course-details')}}" class="btn btn-outline-secondary">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow rounded-0 border-0">
                    <img src="{{asset('/')}}website/img/service3.jpg" alt="" class="card-img-top rounded-0" style=" height: 200px">
                    <div class="card-body">
                        <h3>PHP with Laravel</h3>
                        <h5>Meherab Hossain</h5>
                        <p>TK. 12000</p>
                        <p>Starting Date: 12.08.2022</p>
                        <hr>
                        <a href="{{route('course-details')}}" class="btn btn-outline-secondary">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow rounded-0 border-0">
                    <img src="{{asset('/')}}website/img/slide.jpg" alt="" class="card-img-top rounded-0" style=" height: 200px">
                    <div class="card-body">
                        <h3>Responsive Web Design</h3>
                        <h5>Meherab Hossain</h5>
                        <p>TK. 12000</p>
                        <p>Starting Date: 12.08.2022</p>
                        <hr>
                        <a href="{{route('course-details')}}" class="btn btn-outline-secondary">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow rounded-0 border-0">
                    <img src="{{asset('/')}}website/img/service2.jpg" alt="" class="card-img-top rounded-0" style=" height: 200px">
                    <div class="card-body">
                        <h3>App Development</h3>
                        <h5>Meherab Hossain</h5>
                        <p>TK. 12000</p>
                        <p>Starting Date: 12.08.2022</p>
                        <hr>
                        <a href="{{route('course-details')}}" class="btn btn-outline-secondary">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow rounded-0 border-0">
                    <img src="{{asset('/')}}website/img/service3.jpg" alt="" class="card-img-top rounded-0" style=" height: 200px">
                    <div class="card-body">
                        <h3>PHP with Laravel</h3>
                        <h5>Meherab Hossain</h5>
                        <p>TK. 12000</p>
                        <p>Starting Date: 12.08.2022</p>
                        <hr>
                        <a href="{{route('course-details')}}" class="btn btn-outline-secondary">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow rounded-0 border-0">
                    <img src="{{asset('/')}}website/img/slide.jpg" alt="" class="card-img-top rounded-0" style=" height: 200px">
                    <div class="card-body">
                        <h3>Responsive Web Design</h3>
                        <h5>Meherab Hossain</h5>
                        <p>TK. 12000</p>
                        <p>Starting Date: 12.08.2022</p>
                        <hr>
                        <a href="{{route('course-details')}}" class="btn btn-outline-secondary">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
