@extends('dashboard.layouts.master')
@section('title','ویرایش دسترسی')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('edit-permission-error'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('edit-permission-error') }}</span>
                            </div>
                            <br>
                        @endif

                        <h4 class="card-title text-info">ویرایش دسترسی </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('permission.update',$permission->id)  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام دسترسی :</label>
                                        <input type="text" name="name" class="form-control"  value="{{ $permission->name }}" >
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> توضیحات :</label>
                                        <input type="text" name="description" class="form-control"  value="{{ $permission->description }}" >
                                    </div>
                                    @error('description')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mr-2">ویرایش</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
