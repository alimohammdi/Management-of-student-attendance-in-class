@extends('layouts.app')
@section('title','ثبت نام')
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
                                    <h4 class="font-22 mb-30 text-primary">ثبت نام دانشجویان</h4>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="float-left">نام کامل </label>
                                            <input id="name"  type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  >
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label class="float-left">کد ملی</label>
                                            <input id="code_meli"  type="text"  class="form-control @error('code_meli') is-invalid @enderror" name="code_meli" value="{{ old('code_meli') }}"  >
                                            @error('code_meli')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <label class="float-left">نام کاربری(شماره دانشجویی)</label>
                                            <input id="username"  type="text"  class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  >
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <label for="password">رمز عبور </label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <lable for="password-confirm">تکرار رمز عبور</lable>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                        </div>

                                        <div class="form-group mb-0 mt-15">
                                            <button class="btn btn-primary btn-block" type="submit">ثبت نام</button>
                                        </div>

                                        <div class="text-center mt-15"><span class="mr-2 font-13 font-weight-bold">قبلا ثبت نام کرده اید؟</span><a class="font-13 font-weight-bold" href="{{ route('login') }}">ورود</a></div>

                                    </form>
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
