@extends('dashboard.layouts.master')
@section('title','ویرایش واحد')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info ">ویرایش واحد درسی</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('addUnit.update',['id'=>$unit->id]) }}"  method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label >انتخاب رشته * </label>
                                        <select name="major" class="form-control">
                                            @foreach($majors as $major)
                                                <option value="{{ $major->id }}" @if($major->id == $unit->major_id){{ 'selected'  }} @endif  > {{ $major->name }}</option>
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
                                            @foreach($teachers as $teach)
                                                <option value="{{ $teach->id }}" @if($teach->id == $unit->teacher_id){{ 'selected'  }} @endif  > {{ $teach->full_name }}</option>
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
                                            @foreach($courses as $course)
                                                <option value="{{ $course->id }}" @if($course->id == $unit->course_id){{ 'selected'  }} @endif > {{ $course->name }}</option>
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
                                            <option value="شنبه" @if($time1->weekDay == 'شنبه'){{ 'selected'  }} @endif >شنبه</option>
                                            <option value="یک شنبه" @if($time1->weekDay == 'یک شنبه'){{ 'selected'  }} @endif >یک شنبه</option>
                                            <option value="دو شنبه" @if($time1->weekDay == 'دو شنبه'){{ 'selected'  }} @endif >دو شنبه</option>
                                            <option value="سه شنبه" @if($time1->weekDay == 'سه شنبه'){{ 'selected'  }} @endif >سه شنبه</option>
                                            <option value="چهار شنبه" @if($time1->weekDay == 'چهار شنبه'){{ 'selected'  }} @endif >چهار شنبه</option>
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
                                            <option value="8" @if($time1->time == '8'){{ 'selected'  }} @endif >8-10</option>
                                            <option value="10" @if($time1->time == '10'){{ 'selected'  }} @endif >10-12</option>
                                            <option value="12" @if($time1->time == '12'){{ 'selected'  }} @endif >12-14</option>
                                            <option value="14" @if($time1->time == '14'){{ 'selected'  }} @endif >14-16</option>
                                            <option value="16" @if($time1->time == '16'){{ 'selected'  }} @endif >16-18</option>
                                            <option value="18" @if($time1->time == '18'){{ 'selected'  }} @endif >18-20</option>
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
                                                <option value="{{ $class->id }}" @if($time1->class_id == $class->id){{ 'selected'  }} @endif> {{ $class->classNumber }}</option>
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
                                            <option value="شنبه" @if($time2->weekDay == 'شنبه'){{ 'selected'  }} @endif >شنبه</option>
                                            <option value="یک شنبه" @if($time2->weekDay == 'یک شنبه'){{ 'selected'  }} @endif >یک شنبه</option>
                                            <option value="دو شنبه" @if($time2->weekDay == 'دو شنبه'){{ 'selected'  }} @endif >دو شنبه</option>
                                            <option value="سه شنبه" @if($time2->weekDay == 'سه شنبه'){{ 'selected'  }} @endif >سه شنبه</option>
                                            <option value="چهار شنبه" @if($time2->weekDay == 'چهار شنبه'){{ 'selected'  }} @endif >چهار شنبه</option>
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
                                            <option value="8" @if($time2->time == '8'){{ 'selected'  }} @endif >8-10</option>
                                            <option value="10" @if($time2->time == '10'){{ 'selected'  }} @endif >10-12</option>
                                            <option value="12" @if($time2->time == '12'){{ 'selected'  }} @endif >12-14</option>
                                            <option value="14" @if($time2->time == '14'){{ 'selected'  }} @endif >14-16</option>
                                            <option value="16" @if($time2->time == '16'){{ 'selected'  }} @endif >16-18</option>
                                            <option value="18" @if($time2->time == '18'){{ 'selected'  }} @endif >18-20</option>
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
                                            <option value="2" @if($time2->status == '2'){{ 'selected'  }} @endif>زوج</option>
                                            <option value="1" @if($time2->status == '1'){{ 'selected'  }} @endif>فرد</option>
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
                                                <option value="{{ $class->id }}" @if($time2->class_id == $class->id){{ 'selected'  }} @endif> {{ $class->classNumber }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('class2')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mr-2">ویرایش</button>
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
