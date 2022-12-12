@extends('layouts.app')
@section('title','ورود')
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
                                        <h4 class="font-22 mb-30">ورود به پنل کاربری</h4>
                                        @if(session('login.user.error'))
                                            <br>
                                            <div class="mt-2 mb-3">
                                                <span class="alert alert-danger"> {{ session('login.user.error') }} </span>
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('user.login') }}">
                                            @csrf
                                            @method('POST')
                                            <div class="form-group">
                                                <label class="float-left"  > نام کاربری</label>
                                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" >

                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                               </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <a href="forget-password.html" class="text-dark float-right"></a>
                                                <label class="float-left" for="password">رمز عبور</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group d-flex justify-content-between align-items-center mb-3">
                                                <div class="checkbox d-inline mb-0">
                                                    <input type="checkbox" name="checkbox-1" id="checkbox-8">
{{--                                                    <label for="checkbox-8" class="cr mb-0">مرا به یاد آور</label>--}}
                                                </div>
                                                <span class="font-13 text-primary"><a href="forget-password.html">رمز عبور خود را فراموش کرده اید؟</a></span>
                                            </div>

                                            <div class="form-group mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">ورود </button>
                                            </div>



                                            <div class="text-center mt-15"><span class="mr-2 font-13 font-weight-bold">اگر ثبت نام نکرده اید؟ </span><a class="font-13 font-weight-bold" href="{{ route('register') }}">ثبت نا م کنید</a></div>

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
