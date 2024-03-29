@extends('website.master')

@section('title')
    Contact
@endsection

@section('body')
    <section>
        <div class="container-fluid py-5 bg-secondary">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white">Contact With Us</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body  h-100 shadow rounded-0">
                        <h1 class="text-center">Send Us a Message!</h1>
                        <hr>
                        <form action="" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="name" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Message</label>
                                <div class="col-md-9">
                                    <textarea name="message" id="" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success"  value="Send">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100 shadow rounded-0">
                        <h1 class="text-center">Contact Info</h1>
                        <hr>
                        <address>
                            House #420, Road # 40,Adabor, Mohammadpur, Dhaka</br>
                            <b>Phone:</b> 0123456789</br>
                            <b>Email:</b> hello@mail.com
                        </address>
                        <ul class="nav">
                            <li><a href="" class="nav-link f-s-12 fw-bold text-info">FEBU</a></li>
                            <li><a href="" class="nav-link f-s-12 fw-bold text-info">TWIT</a></li>
                            <li><a href="" class="nav-link f-s-12 fw-bold text-info">LINK-IN</a></li>
                            <li><a href="" class="nav-link f-s-12 fw-bold text-info">INSTA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14607.610760834354!2d90.40275355!3d23.750849249999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1662529742012!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="shadow"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
