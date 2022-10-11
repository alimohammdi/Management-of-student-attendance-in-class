@extends('dashboard.layouts.master')
@section('title','ویرایش استاد')
@section('content')
    <!-- Main Content Area -->

    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info">ویرایش استاد</h3>
                        <br>
                        @if(session('update.teacher.error'))
                            <br>
                            <div class="mt-2 mb-3">
                                <span class="alert alert-danger"> {{ session('update.teacher.error') }} </span>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('teacher.update',$teacher->user->id) }}"  method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label >نام کامل استاد</label>
                                        <input type="text" name="full_name" class="form-control"  value="{{ $teacher->full_name }}"  >
                                    </div>
                                    @error('full_name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> کد ملی</label>
                                        <input type="text"  name="code_meli" class="form-control" value="{{ $teacher->code_meli }}"    >
                                    </div>
                                    @error('code_meli')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">تحصیلات</label>
                                        <input type="text" name="degree" class="form-control"  value="{{ $teacher->degree }}" id="exampleInputEmail111"  >
                                    </div>
                                    @error('degree')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label>دانشکده</label>
                                        <select name="college" id="hall"   class="form-control">
                                            <option  value="صنایع و کامپیوتر" {{ $teacher->college == 'صنایع و کامپیوتر' ?"selected" : '' }} >  صنایع و کامپیوتر </option>
                                            <option  value="برق و مکانیک" {{ $teacher->college == 'برق و مکانیک' ?"selected" : '' }}>برق و مکانیک </option>
                                            <option value="مهندسی مواد و شیمی" {{ $teacher->college == 'مهندسی مواد و شیمی' ?"selected" : 'مهندسی مواد و شیمی' }}>مهندسی مواد و شیمی</option>

                                        </select>

                                    </div>
                                    @error('college')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label>سن</label>
                                        <input type="number"  name="age" class="form-control" value="{{ $teacher->age }}"    >
                                    </div>
                                    @error('age')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail111">نام کاربری</label>
                                        <input type="text" name="user_name" class="form-control"  value="{{ $teacher->user->user_name }}" id="exampleInputEmail111"  >
                                    </div>
                                    @error('user_name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mr-2">ویرایش</button>
                                </form>
                                <a href="{{ route('teacher.index') }}" class="btn btn-danger mt-2">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
