@extends('teacher.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Course List</h4>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">

                                    <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Course Title</th>
                                        <th>Fee</th>
                                        <th>Starting Date</th>
                                        <th >Duration</th>
                                        <th >Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($course as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->fee}}</td>
                                            <td>{{$data->starting_date}}</td>
                                            <td>{{$data->duration}}</td>
                                            <td>{{$data->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                            <td>
                                                <img src="{{asset($data->image)}}" alt="" width="80" height="80" class="rounded-5">
                                            </td>
                                            <td>
                                                <a href="{{route('course.detail', ['id'=>$data->id])}}" class="btn btn-sm btn-primary" title="View Course Detail">
                                                    <i class="fa fa-book-open"></i>
                                                </a>
                                                <a href="{{route('course.edit', ['id'=>$data->id])}}" class="btn btn-sm btn-success" title="Edit Course">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <a href="{{route('course.delete', ['id'=>$data->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this.?')" title="Delete Course">
                                                    <i class="fa fa-trash"></i>
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

