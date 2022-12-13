@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
    <div class="py-5">
            <div class="container">
                <div class="row">
                    <h2>{{ $category->name }}</h2>
                    @foreach ($doctor as $doc)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <a href="{{ url('category/'.$category->name.'/'.$doc->name) }}">
                                    <img src="{{ asset('assets/img/uploads/'.$doc->image) }}" class="w-50" alt="">
                                    <div class="card-body">
                                        <h5>{{ $doc->name }}</h5>
                                        <span class="float-start">{{ $doc->category->name }},</span><br>
                                        <span class="float-end">{{ $doc->degree }}</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </div>

@endsection
