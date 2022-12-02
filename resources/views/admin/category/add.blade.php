@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <dev class="card-body">
            <form action="{{ url('insert-category') }}" method="POST">
                @csrf
                <div class="row">

                   <div class="col-md-12 md-3">
                        <label for="">Field Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Write the name">
                    </div>

                    <div class="col-md-6 md-3">
                        <label for="">Cordinator Name</label>
                        <input type="text" style="color:black;" class="form-control" name="meta_title" placeholder="Write the name">
                    </div>

                    <div class="col-md-12 md-3">
                        <label for="">Telated Tests</label>
                        <textarea name="description" rows="3" style="color:black;" class="form-control" placeholder="Add discription"></textarea>
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular">
                    </div>


                    <div class="col-md-12" style="padding-top: 20px;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </dev>
    </dev>
@endsection
