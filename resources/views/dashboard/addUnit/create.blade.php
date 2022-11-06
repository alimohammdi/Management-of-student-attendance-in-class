@extends('dashboard.layouts.master')
@section('title','تکمیل واحد')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info ">افزودن واحد درسی</h3>
                        <br>
                        @if(session('add.student.error'))
                            <br>
                            <div class="mt-2 mb-3">
                                <span class="alert alert-danger"> {{ session('add.student.error') }} </span>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('addUnit.store') }}"  method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <input type="hidden" name="college_id" value="{{ $college }}">
                                        <label >انتخاب رشته * </label>
                                        <select name="major" class="form-control">
                                            <option value="">رشته تحصیلی مورد نظر خود را انتخاب کنید </option>
                                            @foreach($majors as $major)
                                                <option value="{{ $major->id }}"> {{ $major->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('major')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label >انتخاب استاد * </label>
                                        <select name="teacher" class="form-control">
                                            <option value="">استاد مورد نظر خود را انتخاب کنید </option>
                                            @foreach($teachers as $teach)
                                                <option value="{{ $teach->id }}"> {{ $teach->full_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('teacher')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label >انتخاب درس *</label>
                                        <select name="course" class="form-control">
                                            <option value="">درس مورد نظر خود را انتخاب کنید </option>
                                            @foreach($courses as $course)
                                                <option value="{{ $course->id }}"> {{ $course->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('course')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label >انتخاب روز کلاس ثابت هفتگی *</label>
                                        <select name="day" class="form-control">
                                            <option value="">روز هفتگی را انتخاب کنید </option>
                                            <option value="شنبه">شنبه</option>
                                            <option value="یک شنبه">یک شنبه</option>
                                            <option value="دو شنبه">دو شنبه</option>
                                            <option value="سه شنبه">سه شنبه</option>
                                            <option value="چهار شنبه">چهار شنبه</option>
                                        </select>
                                    </div>
                                    @error('day')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label >انتخاب زمان کلاس ثابت هفتگی *</label>
                                        <select name="time" class="form-control">
                                            <option value="">ساعت کلاسی مورد نظر خود را انتخاب کنید </option>
                                            <option value="8">8-10</option>
                                            <option value="10">10-12</option>
                                            <option value="12">12-14</option>
                                            <option value="14">14-16</option>
                                            <option value="16">16-18</option>
                                            <option value="18">18-20</option>
                                        </select>
                                    </div>
                                    @error('time')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label >انتخاب شماره کلاس * </label>
                                        <select name="class" class="form-control">
                                            <option value="">کلاس مورد نظر خود را انتخاب کنید </option>
                                            @foreach($classes as $class)
                                                <option value="{{ $class->id }}"> {{ $class->classNumber }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('class')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror


{{--     --------------------------------------------------------------------------------------------------------------}}
                                    <br /><br /> <br>
                                    <div class="form-group">
                                        <label >انتخاب روز کلاس متغیر هفتگی </label>
                                        <select name="day2" class="form-control">
                                            <option value="">روز هفتگی را انتخاب کنید </option>
                                            <option value="شنبه">شنبه</option>
                                            <option value="یک شنبه">یک شنبه</option>
                                            <option value="دو شنبه">دو شنبه</option>
                                            <option value="سه شنبه">سه شنبه</option>
                                            <option value="چهار شنبه">چهار شنبه</option>
                                        </select>
                                    </div>
                                    @error('day2')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label >انتخاب زمان کلاس ثابت هفتگی  </label>
                                        <select name="time2" class="form-control">
                                            <option value="">ساعت کلاسی مورد نظر خود را انتخاب کنید </option>
                                            <option value="8">8-10</option>
                                            <option value="10">10-12</option>
                                            <option value="12">12-14</option>
                                            <option value="14">14-16</option>
                                            <option value="16">16-18</option>
                                            <option value="18">18-20</option>
                                        </select>
                                    </div>
                                    @error('time2')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label >انتخاب وظعیت هفتگی  </label>
                                        <select name="status" class="form-control">
                                            <option value="">زوج یا فرد بودن را انتخاب نمایید</option>
                                            <option value="2">زوج</option>
                                            <option value="1">فرد</option>
                                        </select>
                                    </div>
                                    @error('status')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label >انتخاب شماره کلاس ثابت هفتگی </label>
                                        <select name="class2" class="form-control">
                                            <option value="">کلاس مورد نظر خود را انتخاب کنید </option>
                                            @foreach($classes as $class)
                                                <option value="{{ $class->id }}"> {{ $class->classNumber }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('class2')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mr-2">افزودن</button>
                                </form>
                                <a href="{{ route('addUnit.index') }}" class="btn btn-danger mt-2">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
