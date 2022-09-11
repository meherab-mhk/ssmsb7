@extends('admin.home.master')

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Teacher List</h4>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">

                                    <thead>
                                    <tr>
                                        <th>Teacher Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Mobile</th>
                                        <th>Avatar</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($teacher as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->mobile}}</td>
                                        <td>
                                            <img src="{{asset($data->image)}}" alt="" width="80" height="80" class="rounded-5">
                                        </td>
                                        <td>
                                            <a href="{{route('teacher.edit', ['id'=>$data->id])}}" class="btn btn-sm btn-success">Edit</a>
                                            <a href="{{route('teacher.delete', ['id'=>$data->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this.?')">Delete</a>
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
