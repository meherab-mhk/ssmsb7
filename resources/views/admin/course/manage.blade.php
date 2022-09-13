@extends('admin.home.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Course info</h4>
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">

                                    <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Course Title</th>
                                        <th>Fee</th>
                                        <th>Teacher Info</th>
                                        <th>Starting Date</th>
                                        <th >Duration</th>
                                        <th >Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($course as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->fee}}</td>
                                            <td>{{$data->teacher->name.'('.$data->teacher->mobile.')'}}</td>
                                            <td>{{$data->starting_date}}</td>
                                            <td>{{$data->duration}}</td>
                                            <td>{{$data->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                            <td>
                                                <a href="{{route('admin.course-detail', ['id'=>$data->id])}}" class="btn btn-sm btn-primary" title="View Course Detail">
                                                    <i class="fa fa-book-open"></i>
                                                </a>
                                                <a href="{{route('admin.update-course-status', ['id'=>$data->id])}}" class="btn btn-sm {{ $data->status == 0 ? 'btn-warning' : 'btn-success' }}" title="Update Course Status">
                                                    <i class="fa fa-arrow-up"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

