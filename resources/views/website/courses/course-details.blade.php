@extends('website.master')

@section('title')
    Course Details
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="card shadow h-100 rounded-0">
                        <div class="card-body">
                            <img src="{{asset('/')}}website/img/slide.jpg" alt="" class="w-100" style="height: 300px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card shadow h-100 rounded-0">
                        <div class="card-body">
                            <h3>Course title</h3>
                            <h4>Trainer name</h4>
                            <p>tk 12000</p>
                            <p>starting date</p>
                            <p>venue</p>
                            <a href="" class="btn btn-outline-success">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="card shadow h-100 rounded-0">
                        <div class="card-header">
                            <h3>Course Description</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Aliquam aperiam commodi doloribus ducimus facilis
                                Ab aperiam aspernatur consequuntur deserunt dicta eius eum
                                incidunt, inventore laboriosam, magni optio repellendus unde!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
