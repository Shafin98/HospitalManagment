@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Add Doctor</h4>
        </div>
        <dev class="card-body">
            <form action="{{ url('update-doctor/'.$doctor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select">
                            <option value="">{{ $doctor->category->name }}</option>
                           
                        </select>
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Name</label>
                        <input type="text" style="color:black;" class="form-control" value="{{ $doctor->name }}" name="name" placeholder="Write the name">
                    </div>


                    <div class="col-md-3 md-3" style="padding-top: 20px;">
                        <label for="">phone</label>
                        <input type="number" class="form-control" value="{{ $doctor->phone }}" name="phone" placeholder="Enter Phone no.">
                    </div>

                    <div class="col-md-3 md-3" style="padding-top: 20px;">
                        <label for="">Hour's to Work</label>
                        <input type="number" class="form-control" value="{{ $doctor->hour}}" name="hour" placeholder="Enter A Number">
                    </div>

                    <div class="col-md-6 md-3" style="padding-top: 20px;">
                        <label for="appt">Set Doctors Appointment Time</label>
                        <input type="time" id="appt" value="{{ $doctor->schedule }}" name="schedule">
                    </div>

                    <div class="col-md-6 md-3" style="padding-top: 20px;">
                        <label for="">Room</label>
                        <input type="number" class="form-control" value="{{ $doctor->Room }}" name="Room" placeholder="Enter room no.">
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">degree</label>
                        <textarea name="degree" rows="3" style="color:black;" class="form-control" placeholder="Add degrees">{{ $doctor->degree }}</textarea>
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">institution</label>
                        <textarea name="institution" rows="3" style="color:black;" class="form-control" placeholder="Enter institution name and detailes">{{ $doctor->institution }}</textarea>
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">Hide Doctor</label>
                        <input type="checkbox" {{ $doctor->status == '1' ? 'checked' : '' }} name="status">
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">Trending</label>
                        <input type="checkbox" {{ $doctor->trending == '1' ? 'checked' : '' }} name="trending">
                    </div>


                    <div class="col-md-12" style="padding-top: 20px;">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </dev>
    </dev>
@endsection
