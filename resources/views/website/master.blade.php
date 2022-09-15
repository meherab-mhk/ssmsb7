<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSMS-@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/helper.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
    <style>
        .my-caption{
            background: rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">SSMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('courses')}}">All Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login-register')}}">Login/Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('body')
<footer>
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body shadow rounded-0">
                        <h4 class="text-uppercase fw-bold">SSMS B7</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Ab, ad assumenda enim fugiat labore molestiae. Alias amet
                            blanditiis distinctio dolor dolore, et ex illum nemo possimus ,
                            quisquam reiciendis repellat veniam!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body shadow rounded-0">
                        <h4 class="text-uppercase fw-bold">Popular Link</h4>
                        <hr>
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('about')}}" class="nav-link">About Us</a></li>
                            <li><a href="{{route('courses')}}" class="nav-link">Our Courses</a></li>
                            <li><a href="{{route('contact')}}" class="nav-link">Contact Us</a></li>
                            <li><a href="{{route('login-register')}}" class="nav-link">Login/Registration</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body shadow rounded-0">
                        <h4 class="text-uppercase fw-bold">Contact Us</h4>
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
        </div>
    </section>
    <section class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-center text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, doloribus. <b>@copyright by PHP and LARAVEL</b></p>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="{{asset('/')}}website/js/jquery-3.6.1.min.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
</body>
</html>
