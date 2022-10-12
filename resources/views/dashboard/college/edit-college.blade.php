@extends('dashboard.layouts.master')
@section('title','ویرایش دانشکده')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('edit-college-error'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('edit-college-error') }}</span>
                            </div>
                            <br>
                        @endif

                        <h4 class="card-title text-info">ویرایش دانشکده </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('college.update',$college->id)  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام دانشکده :</label>
                                        <input type="text" name="name" class="form-control"  value="{{ $college->value }}" >
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
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
