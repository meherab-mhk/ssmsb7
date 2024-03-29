@extends('admin.home.master')

@section('title')
    Admin| Offer Courses
@endsection
@section('profileName')
    Admin
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Offer Course</h4>
                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                    <form action="{{route('admin.edit-offer-update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label class="col-md-3 col-form-label">Select Course</label>
                            <div class="col-md-9">
                                <select class="custom-select" name="course_id">
                                    <option selected>Select offer list</option>
                                    @foreach($course as $data)
                                        <option value="{{$data->id}}"{{$data->id == $offerCourse->id ? 'selected' : ''}} name="option">{{$data->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Offer Fee</label>
                            <div class="col-sm-9">
                                <input type="number" name="offer_fee" class="form-control" value="{{$offerCourse->offer_fee}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Course Banner</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" >
                                <img src="{{asset($offerCourse->banner_image)}}" alt="" width="80" height="80">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

