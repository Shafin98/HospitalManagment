@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Edit/Update Labs</h4>
        </div>
        <dev class="card-body">
            <form action="{{ url('update-lab/'.$lab->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 md-3">
                        <label for="">Name</label>
                        <input type="text" style="color:black;" class="form-control" value="{{ $lab->lab_name }}" name="lab_name" placeholder="Write the name">
                    </div>

                    <div class="col-md-6 md-3" style="padding-top: 20px;">
                        <label for="appt">Set Lab Time</label>
                        <input type="time" id="appt" value="{{ $lab->lab_schedule }}" name="lab_schedule">
                    </div>

                    <div class="col-md-6 md-3" style="padding-top: 20px;">
                        <label for="">Room</label>
                        <input type="number" class="form-control" value="{{ $lab->lab_Room }}" name="lab_Room" placeholder="Enter room no.">
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">Hide Lab</label>
                        <input type="checkbox" {{ $lab->status == '1' ? 'checked' : '' }} name="status">
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">Trending</label>
                        <input type="checkbox" {{ $lab->trending == '1' ? 'checked' : '' }} name="trending">
                    </div>

                    @if ($lab->image)
                         <img src="{{ asset('assets/img/uploads/'.$lab->image) }}" alt="Lab image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12" style="padding-top: 20px;">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </dev>
    </dev>
@endsection
