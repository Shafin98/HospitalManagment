@extends('layouts.front')

@section('title')
    Lab List
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Labs</h2>
                    <div class="row">
                        @foreach ($lab as $item)
                            <div class="col-md-3 mb-3">
                                <a href="{{ url('view-lab/'.$item->id) }}">
                                    <div class="card">
                                        <div class="card-body">
                                            <span class="float-start">{{ $item->lab_name }}</span><br>
                                            <span class="float-end">Room No: {{ $item->lab_Room }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

