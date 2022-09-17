@extends('website.master')

@section('title')
    Enroll Now Form
@endsection

@section('body')
    <section class="">
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Enroll Now of {{$course->title}}</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 mx-auto" >
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <div class="card rounded-0 shadow h-100">
                        <div class="card-body">
                            <h1>Enroll Form</h1>
                            <hr>
                            <form action="{{route('new-enroll', ['id'=>$course->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="name" name="name" placeholder="Name" id="">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="email" name="email" placeholder="Email" id="">
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="number" name="mobile" placeholder="Mobile" id="">
                                        <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Payment Option</label>
                                    <div class="col-md-9">
                                        <label for=""><input  type="radio" name="payment_type" value="cash" id="" checked/> Cash</label>
                                        <label for=""><input  type="radio" name="payment_type" value="online" id=""/> Online</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-secondary" name="registrationBtn">Enroll Now</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
