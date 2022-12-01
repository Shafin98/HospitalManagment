@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <dev class="card-body">
            <form action="{{ url('insert-category') }}" method="POST">
                <div class="row">
                    <div class="col-md-6 md-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta title">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </dev>
    </dev>
@endsection
