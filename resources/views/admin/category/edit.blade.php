@extends('layouts.admin')

@section('content')
    <dev class="card">
        <div class="card-header">
            <h4>Edit/Update Category</h4>
        </div>
        <dev class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/from-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 md-3">
                        <label for="">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Title</label>
                        <input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta title">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{ $category->status == "1" ? 'checked':'' }} name="status">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Popular</label>
                        <input type="checkbox" {{ $category->popular == "1" ? 'checked':'' }} name="popular">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </dev>
    </dev>
@endsection
