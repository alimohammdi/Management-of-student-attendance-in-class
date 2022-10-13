@extends('dashboard.layouts.master')
@section('title','ویرایش رشته')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('edit-major-error'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('edit-major-error') }}</span>
                            </div>
                            <br>
                        @endif

                        <h4 class="card-title text-info">ویرایش رشته </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('major.update',$major->id)  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام رشته :</label>
                                        <input type="text" name="name" class="form-control"  value="{{ $major->name }}" >
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label> دانشکده :</label>
                                        <select name="college"  class="form-control">
                                            @foreach($colleges as $col)
                                                <option value="{{ $col->id }}" @if($col->id === $major->college_id){{'selected'}}@endif>{{ $col->value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('college')
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
