@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Doctors List</h4>
            <hr>
        </div>
        <dev class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Lab Name</th>
                        <th>Lab Schedule</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lab as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <img src="{{ asset('assets/img/uploads/'.$item->image) }}" class="cate-image" alt="Image here">
                            </td>
                            <td>{{ $item->lab_name }}</td>
                            <td>{{ $item->lab_schedule }}</td>
                            <td>
                                <a href="{{ url('edit-lab/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ url('delete-lab/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </dev>
    </dev>
@endsection
