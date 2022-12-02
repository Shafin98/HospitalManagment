@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Add Doctor</h4>
        </div>
        <dev class="card-body">
            <form action="{{ url('insert-doctor') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="doc_id" >
                            <option value="">Select Speciality</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Name</label>
                        <input type="text" style="color:black;" class="form-control" name="name" placeholder="Write the name">
                    </div>


                    <div class="col-md-3 md-3" style="padding-top: 20px;">
                        <label for="">phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter Phone no.">
                    </div>

                    <div class="col-md-3 md-3" style="padding-top: 20px;">
                        <label for="">Hour's to Work</label>
                        <input type="number" class="form-control" name="hour" placeholder="Enter A Number">
                    </div>

                    <div class="col-md-6 md-3" style="padding-top: 20px;">
                        <label for="appt">Set Doctors Appointment Time</label>
                        <input type="time" id="appt" name="schedule">
                    </div>

                    <div class="col-md-6 md-3" style="padding-top: 20px;">
                        <label for="">Room</label>
                        <input type="number" class="form-control" name="Room" placeholder="Enter room no.">
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">degree</label>
                        <textarea name="degree" rows="3" style="color:black;" class="form-control" placeholder="Add degrees"></textarea>
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">institution</label>
                        <textarea name="institution" rows="3" style="color:black;" class="form-control" placeholder="Enter institution name and detailes"></textarea>
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">Hide Doctor</label>
                        <input type="checkbox" name="status">
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending">
                    </div>


                    <div class="col-md-12" style="padding-top: 20px;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </dev>
    </dev>
@endsection
