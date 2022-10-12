@extends('dashboard.layouts.master')
@section('title','افزودن اساتید')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info ">افزودن استاد</h3>
                        <br>
                        @if(session('add.teacher.error'))
                            <br>
                            <div class="mt-2 mb-3">
                                <span class="alert alert-danger"> {{ session('add.teacher.error') }} </span>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('teacher.store') }}"  method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label >نام کامل استاد</label>
                                        <input type="text" name="full_name" class="form-control"  value="{{ old('full_name') }}"   placeholder="مثال : علی محمدی">
                                    </div>
                                    @error('full_name')
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
                                        <label>رشته و اخرین مقطع تحصیلی</label>
                                        <input type="text"  name="degree" class="form-control" value="{{ old('degree') }}"  placeholder="مثال : کارشناسی ارشد هوش مصنوعی"   >
                                    </div>
                                    @error('degree')
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
                                <a href="{{ route('teacher.index') }}" class="btn btn-danger mt-2">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
