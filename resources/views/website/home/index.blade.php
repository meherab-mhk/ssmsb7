@extends('website.master')

@section('title')
    Home
@endsection

@section('body')
    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <ol class="carousel-indicators">
            @foreach($offerCourse as $key => $data)
            <li data-bs-target="#slider" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner slider-img">
            @foreach($offerCourse as $key1 => $data)
            <div class="carousel-item {{$key1 == 0 ? 'active' : ''}}">
                <img src="{{asset($data->banner_image)}}" alt="" class="w-100">
                <div class="carousel-caption d-none d-md-block my-caption">
                    <h5>{{$data->title}}</h5>
                    <p>{{$data->description}}</p>
                    <a href="{{route('course-details',['id'=>$data->id])}}" type="button" class="btn btn-success">Read More</a>
                </div>
            </div>
            @endforeach
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
                        <img src="{{asset('/')}}website/img/service1.jpg" alt="" class="card-img-top" style=" height: 200px">
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
                        <img src="{{asset('/')}}website/img/service2.jpg" alt="" class="card-img-top" style=" height: 200px">
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
                        <img src="{{asset('/')}}website/img/service3.jpg" alt="" class="card-img-top" style=" height: 200px">
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
                @foreach($course as $data)
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="{{asset($data->image)}}" alt="" class="card-img-top" style=" height: 200px">
                        <div class="card-body">
                            <h3>{{$data->title}}</h3>
                            <h5>{{$data->teacher->name}}</h5>
                            <p>tk{{$data->fee}}</p>
                            <p>{{$data->starting_date}}</p>
                            <hr>
                            <a href="{{route('course-details',['id'=>$data->id])}}" class="btn btn-outline-secondary">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
