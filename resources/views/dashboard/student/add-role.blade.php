@extends('dashboard.layouts.master')
@section('title','انتخاب نقش ')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('add.role.error'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('add.role.error') }}</span>
                            </div>
                            <br>
                        @endif
                        <h4 class="card-title text-info">انتخاب نقش برای کاربر </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('add.role.store',$student->user_id) }} "  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام کاربر :</label>
                                        <label for="exampleInputEmail111"> {{ $student->full_name }}</label>
                                     </div>

                                    <div class="form-group">
                                        <label> دسترسی (مجوز) :</label>
                                        <select name="role[]" multiple="multiple" class="form-control" >
                                            @foreach($roles as $role )
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">افزودن</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
