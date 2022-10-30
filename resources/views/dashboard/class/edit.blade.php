@extends('dashboard.layouts.master')
@section('title','ویرایش کلاس')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('edit-class-error'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('edit-class-error') }}</span>
                            </div>
                            <br>
                        @endif

                        <h4 class="card-title text-info">ویرایش کلاس </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('class.update',$class->id)  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام دانشکده :</label>
                                        <select name="college" id="" class="form-control">
                                            @foreach($colleges as $college)
                                                <option value="{{ $college->id }}" @if($class->college_id == $college->id) {{ 'selected' }} @endif>{{ $college->value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('college')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">شماره کلاس :</label>
                                        <input type="number" name="classNumber" class="form-control"  value="{{ $class->classNumber }}" >
                                    </div>
                                    @error('classNumber')
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
