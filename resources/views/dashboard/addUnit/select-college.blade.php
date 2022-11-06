@extends('dashboard.layouts.master')
@section('title','انتخاب دانشکده')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info ">انتخاب دانشکده</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('addUnit.create') }}"  method="get">
                                    @csrf
                                    <div class="form-group">
                                        <label>دانشکده ها</label>
                                            <select name="college" class="form-control">
                                                @foreach($colleges as $col)
                                                    <option value="{{ $col->id }}">{{ $col->value }}</option>
                                                @endforeach
                                            </select>
                                     </div>
                                    @error('college')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <button type="submit" class="btn btn-primary mr-2">افزودن</button>
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
