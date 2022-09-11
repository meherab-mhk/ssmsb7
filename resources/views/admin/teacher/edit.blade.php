@extends('admin.home.master')

@section('title')
    Edit Teacher
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Teacher Form</h4>
                    <h3 class="text-center text-success">{{Session::get('message')? Session::get('message') : ''}}</h3>
                    <form action="{{route('teacher.update', ['id'=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" value="{{$teacher->name}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" value="{{$teacher->email}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" name="mobile" class="form-control" value="{{$teacher->mobile}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file mb-4">
                                <img src="{{asset($teacher->image)}}" alt="" width="80" height="80">
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Teacher</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
