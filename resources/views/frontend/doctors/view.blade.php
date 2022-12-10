@extends('layouts.front')

@section('title', $doctor->name)


@section('content')

<div class="py-3 mb-4 shadow-sm bg-success border-top">
    <div class="container">
        <h6 class="mb-0">Collections / Category Name / Product Name </h6>
    </div>
</div>

<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{ asset('assets/img/'.$doctor->image) }}" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{ $doctor->name }}
                        <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag"> {{ $doctor->trending == '1'? 'Popular':'' }} </label>
                    </h2>

                    <hr>
                    <label class="me-3 fw-bold">Phone number : {{ $doctor->phone }}</label>
                    <label class="fw-bold">Room number : {{ $doctor->Room }}</label>
                    <p class="mt-3 fw-bold">
                        {{ $doctor->institution }}
                    </p>
                    <hr>
                    @if ($doctor->trending > 0)
                        <label class="badge bg-success">Available</label>
                    @else
                        <label for="badge bg-danger">Not Available</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-10">
                            <br/>
                            <button type="button" class="btn btn-success me-3 float-start">View schedule</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
