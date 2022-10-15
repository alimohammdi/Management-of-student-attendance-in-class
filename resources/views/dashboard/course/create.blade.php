@extends('dashboard.layouts.master')
@section('title','افزودن درس')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info ">افزودن درس</h3>
                        <br>
                        @if(session('add.course.error'))
                            <br>
                            <div class="mt-2 mb-3">
                                <span class="alert alert-danger"> {{ session('add.course.error') }} </span>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('course.store') }}"  method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label >نام کامل درس</label>
                                        <input type="text" name="name" class="form-control"  value="{{ old('name') }}"   placeholder="مثال : ریاضی 1">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label> کد درس</label>
                                        <input type="number"  name="code" class="form-control" value="{{ old('code') }}"    >
                                    </div>
                                    @error('code')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label> دانشکده :</label>
                                        <select name="college"  class="form-control">
                                            @forelse($colleges as $col)
                                                <option value="{{ $col->id }}">{{ $col->value }}</option>
                                            @empty
                                                <span class="alert alert-danger">دانشکده ای موجود نیست </span>
                                            @endforelse
                                        </select>
                                    </div>
                                    @error('college')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label> استاد مربوط :</label>
                                        <select name="teacher"  class="form-control">
                                            @foreach($teachers as $teach)
                                                <option value="{{ $teach->id }}">{{ $teach->full_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('teacher')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mr-2">افزودن</button>
                                </form>

                                <a href="{{ route('course.index') }}" class="btn btn-danger mt-2">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
