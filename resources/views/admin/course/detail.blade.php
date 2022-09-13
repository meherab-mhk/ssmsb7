@extends('admin.home.master')
@section('title')
    Course Detail
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered">
                        <tr>
                            <th>Course ID</th>
                            <td>{{$course->id}}</td>
                        </tr>
                        <tr>
                            <th>Course Fee</th>
                            <td>{{$course->fee}}</td>
                        </tr>
                        <tr>
                            <th>Course Starting Date</th>
                            <td>{{$course->starting_date}}</td>
                        </tr>
                        <tr>
                            <th>Course Duration</th>
                            <td>{{$course->duration}}</td>
                        </tr>
                        <tr>
                            <th>Course Image</th>
                            <td><img src="{{asset($course->image)}}" alt="" width="150" height="150"></td>
                        </tr>
                        <tr>
                            <th>Course Description</th>
                            <td>{!! $course->description !!}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

