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
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="email" name="email" placeholder="Email" id="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="number" name="mobile" placeholder="Mobile" id="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Payment Option</label>
                                    <div class="col-md-9">
                                        <label for=""><input  type="radio" name="payment_method" value="cash" id="" checked/> Cash</label>
                                        <label for=""><input  type="radio" name="payment_method" value="online" id=""/> Online</label>
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
