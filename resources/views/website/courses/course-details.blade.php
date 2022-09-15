@extends('website.master')

@section('title')
 {{$course->title}}
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="card shadow h-100 rounded-0">
                        <div class="card-body">
                            <img src="{{asset($course->image)}}" alt="" class="w-100" style="height: 300px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card shadow h-100 rounded-0">
                        <div class="card-body">
                            <h3>{{$course->title}}</h3>
                            <h4>{{$course->teacher->name}}</h4>
                            <p>{{$course->staring_date}}</p>
                            @if($course->offer_fee > 0)
                            <p>Course Regular Fee: TK. {{$course->fee}}</p>
                            <p>Course Offer Fee: TK. {{$course->offer_fee}}</p>
                            @else
                                <p>Course Fee: TK. {{$course->fee}}</p>
                            @endif
                            <a href="{{route('enroll-now',['id'=>$course->id])}}" class="btn btn-outline-success">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="card shadow h-100 rounded-0">
                        <div class="card-header">
                            <h3>Course Description</h3>
                        </div>
                        <div class="card-body">
                            <p>{{$course->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
