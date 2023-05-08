@extends('dashboard.layouts.master')
@section('title','لیست')
@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                    @foreach($courses as $course)
                        <div class="col-md-6 col-xl-4 height-card box-margin">
                            <div class="card">
                                <img src="{{ asset('admin/img/course-image.png') }}" class="card-img-center"  width="250" height="250" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title text-primary">{{ $course->course->name }}</h5>
                                    <br>
                                    <p class="card-text">کد درس : {{ $course->course->code  }}</p>

                                    <p class="card-text">دانشکده : {{ $course->college->value }}</p>
                                    <a href="{{ route('rollcall.show',$course->id) }}" class="btn btn-primary">نمایش</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

            </div>
        </div>
    </div>

@endsection
