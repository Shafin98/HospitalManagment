@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Category Page</h4>
            <hr>
        </div>
        <dev class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Doctor/Lab Name</th>
                        <th>Field</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->meta_title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ url('edit-prod/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </dev>
    </dev>
@endsection
