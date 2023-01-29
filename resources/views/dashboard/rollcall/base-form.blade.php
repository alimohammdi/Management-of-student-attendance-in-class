@extends('layouts.app')
@section('title','حضور و غیاب')
@section('content')
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12">
                <!-- Middle Box -->
                <div class="middle-box">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="">
                                        <img class="align-items-center" src="{{ asset('admin/img/download.png') }}"  >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Logo -->
                                    <span class="text-info" > {{ $weekDay . " " . $date }}</span>
                                    <br>
                                    <br>

                                    <form method="POST" action="{{ route('rollcall.store')}}">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            <label class="float-left"  >شماره دانشجویی</label>
                                            <input type="hidden" name="class_number" class="form-control"  value="401" >
                                            <input   type="number" name="stu_number" class="form-control @error('stu_number') is-invalid @enderror" >
                                        </div>

                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">ثبت </button>
                                        </div>

                                    </form>

                                    <br>
                                    <h2  class="font-22 mb-30 text-info">  ** کلاس 401 پیش فرض برای تست در نظر گرفته شده </h2>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
