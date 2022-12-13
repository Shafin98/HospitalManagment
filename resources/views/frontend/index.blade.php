@extends('layouts.front')

@section('title')
    Online Hospital Service Center
@endsection

@section('content')
    @include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Popular Doctors</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_doctor as $doc)
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/img/uploads/'.$doc->image) }}" alt="Doctor image">
                                <div class="card-body">
                                    <h5>{{ $doc->name }}</h5>
                                    <span class="float-start">{{ $doc->category->name }},</span><br>
                                    <span class="float-end">{{ $doc->degree }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Popular Fields</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_field as $tcate)
                        <div class="item">
                            <a href="{{ asset('assets/img/category'.$tcate->image) }}">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>{{ $tcate->name }}</h5>
                                        <p>
                                            {{ $tcate->description }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection



@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
</script>
@endsection
