@extends('dashboard.layouts.master')
@section('title','افزودن دانشجو')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info ">افزودن دانشجو</h3>
                        <br>
                        @if(session('add.student.error'))
                            <br>
                            <div class="mt-2 mb-3">
                                <span class="alert alert-danger"> {{ session('add.student.error') }} </span>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('student.store') }}"  method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label >نام کامل دانشجو</label>
                                        <input type="text" name="full_name" class="form-control"  value="{{ old('full_name') }}"   placeholder="مثال : علی محمدی">
                                    </div>
                                    @error('full_name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> شماره دانشجویی</label>
                                        <input type="number"  name="stu_number" class="form-control" value="{{ old('stu_number') }}"    >
                                    </div>
                                    @error('stu_number')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> کد ملی</label>
                                        <input type="number"  name="code_meli" class="form-control" value="{{ old('code_meli') }}"    >
                                    </div>
                                    @error('code_meli')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> رشته تحصیلی</label>
                                        <select name="major" id="">
                                            <option value="مهندسی برق">مهندسی برق</option>
                                            <option value="مهندسی کامپیوتر">مهندسی کامپیوتر</option>
                                            <option value="مهندسی مکانیک">مهندسی مکانیک</option>
                                            <option value="مهندسی صنایع">مهندسی صنایع</option>
                                        </select>

                                    </div>
                                    @error('major')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> سال ورود به دانشگاه</label>
                                        <input type="number"  name="stu_year" class="form-control" value="{{ old('stu_year') }}"    >
                                    </div>
                                    @error('stu_year')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> متولد</label>
                                        <input type="number"  name="age" class="form-control" value="{{ old('age') }}"    >
                                    </div>
                                    @error('age')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail111">نام کاربری</label>
                                        <input type="text" name="user_name" class="form-control"  value="{{ old('user_name') }}" id="exampleInputEmail111" placeholder="نام">
                                    </div>
                                    @error('user_name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword11">کلمه عبور</label>
                                        <input type="password"  name="password" class="form-control" id="exampleInputPassword11" placeholder="رمز عبور">
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword12">تکرار کلمه عبور</label>
                                        <input type="password"  class="form-control" name="password_confirmation"  id="exampleInputPassword12" placeholder="تکرار رمز عبور">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">افزودن</button>
                                </form>
                                <a href="{{ route('student.index') }}" class="btn btn-danger mt-2">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
