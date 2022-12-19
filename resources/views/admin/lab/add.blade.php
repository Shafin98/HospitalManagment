@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Add Lab</h4>
        </div>
        <dev class="card-body">
            <form action="{{ url('insert-lab') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 md-3">
                        <label for="">Name</label>
                        <input type="text" style="color:black;" class="form-control" name="lab_name" placeholder="Write the name">
                    </div>

                    <div class="col-md-6 md-3" style="padding-top: 20px;">
                        <label for="appt">Set Lab Time</label>
                        <input type="time" id="appt" name="lab_schedule">
                    </div>

                    <div class="col-md-6 md-3" style="padding-top: 20px;">
                        <label for="">Room</label>
                        <input type="number" class="form-control" name="lab_Room" placeholder="Enter room no.">
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">Hide Lab</label>
                        <input type="checkbox" name="status">
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending">
                    </div>

                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12" style="padding-top: 20px;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </dev>
    </dev>
@endsection
