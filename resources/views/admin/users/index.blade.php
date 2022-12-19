@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Registered users</h4>
            <hr>
        </div>
        <dev class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                <a href="{{ url('view-user/'.$item->id) }}" class="btn btn-primary btn-sm">View</a>

                                @if ($item->status == 1)
                                 <a href="{{ route('users.status.update', ['user_id' => $item->id, 'status_code' => 0]) }}" class="btn btn-danger btn-sm">Ban
                                    <i class="fa fa-ban"></i>
                                 </a>
                                @else
                                 <a href="{{ route('users.status.update', ['user_id' => $item->id, 'status_code' => 1]) }}" class="btn btn-success btn-sm">Unban
                                    <i class="fa fa-check"></i>
                                 </a>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </dev>
    </dev>
@endsection
