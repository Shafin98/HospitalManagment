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
                        <th>Id</th>
                        <th>Name</th>
                        <th>Specialist</th>
                        <th>Description</th>
                        <th>Degree</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->meta_keywords }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->meta_title }}</td>
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
