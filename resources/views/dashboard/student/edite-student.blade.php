@extends('dashboard.layouts.master')
@section('title','ویرایش دانشجو')
@section('content')
    <!-- Main Content Area -->

    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info">ویرایش دانشجو</h3>
                        <br>
                        @if(session('update.student.error'))
                            <br>
                            <div class="mt-2 mb-3">
                                <span class="alert alert-danger"> {{ session('update.student.error') }} </span>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('student.update',$student->user->id) }}"  method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label >نام کامل دانشجو</label>
                                        <input type="text" name="full_name" class="form-control"  value="{{ $student->full_name }}"  placeholder="مثال : علی محمدی">
                                    </div>
                                    @error('full_name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> شماره دانشجویی</label>
                                        <input type="text"  name="stu_number" class="form-control" value="{{ $student->stu_number  }}"    >
                                    </div>
                                    @error('stu_number')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> کد ملی</label>
                                        <input type="text"  name="code_meli" class="form-control" value="{{ $student->code_meli }}"    >
                                    </div>
                                    @error('code_meli')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> رشته تحصیلی</label>
                                        <select name="major" id="hall"  class="form-control">
                                            <option  value="مهندسی برق" {{ $student->major == 'مهندسی برق' ?"selected" : '' }} > مهندسی برق </option>
                                            <option  value="مهندسی کامپیوتر" {{ $student->major == 'مهندسی کامپیوتر' ?"selected" : '' }}>مهندسی کامپیوتر</option>
                                            <option value="مهندسی مکانیک" {{ $student->major == 'مهندسی مکانیک' ?"selected" : '' }}>مهندسی مکانیک</option>
                                            <option value="مهندسی صنایع" {{ $student->major == 'مهندسی صنایع' ?"selected" : '' }}>مهندسی صنایع</option>
                                        </select>

                                    </div>
                                    @error('major')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> دانشکده :</label>
                                        <select name="college"  class="form-control">
                                            @forelse($colleges as $col)
                                                <option value="{{ $col->id }}" @if($col->id === $student->college_id){{'selected'}}@endif>{{ $col->value }}</option>
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
                                        <label> سال ورود به دانشگاه</label>
                                        <input type="number"  name="stu_year" class="form-control" value="{{ $student->stu_year }}"    >
                                    </div>
                                    @error('stu_year')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> متولد</label>
                                        <input type="number"  name="age" class="form-control" value="{{ $student->age }}"    >
                                    </div>
                                    @error('age')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail111">نام کاربری</label>
                                        <input type="text" name="user_name" class="form-control"  value="{{ $student->user->user_name }}" id="exampleInputEmail111" placeholder="نام">
                                    </div>
                                    @error('user_name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mr-2">ویرایش</button>
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
