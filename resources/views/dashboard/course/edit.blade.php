@extends('dashboard.layouts.master')
@section('title','ویرایش درس')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info">ویرایش درس</h3>
                        <br>
                        @if(session('update.course.error'))
                            <br>
                            <div class="mt-2 mb-3">
                                <span class="alert alert-danger"> {{ session('update.course.error') }} </span>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('course.update',$course->id) }}"  method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label >نام کامل درس</label>
                                        <input type="text" name="name" class="form-control"  value="{{ $course->name }}"  >
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> کد درس</label>
                                        <input type="text"  name="code" class="form-control" value="{{ $course->code }}"    >
                                    </div>
                                    @error('code')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> استاد مربوطه :</label>
                                        <select name="teacher"  class="form-control">
                                            @forelse($teachers as $teach)
                                                <option value="{{ $teach->id }}" @if($teach->id === $course->teacher_id){{'selected'}}@endif>{{ $teach->full_name }}</option>
                                            @empty
                                                <span class="alert alert-danger">استادی موجود نیست </span>
                                            @endforelse
                                        </select>
                                    </div>
                                    @error('teacher')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> دانشکده :</label>
                                        <select name="college"  class="form-control">
                                            @forelse($colleges as $col)
                                                <option value="{{ $col->id }}" @if($col->id === $course->college_id){{'selected'}}@endif>{{ $col->value }}</option>
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


                                    <button type="submit" class="btn btn-primary mr-2">ویرایش</button>
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
