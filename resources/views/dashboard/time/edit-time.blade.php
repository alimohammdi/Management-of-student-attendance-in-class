@extends('dashboard.layouts.master')
@section('title','ویرایش زمانبندی')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('edit-time-error'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('edit-time-error') }}</span>
                            </div>
                            <br>
                        @endif

                        <h4 class="card-title text-info">ویرایش زمانبندی </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('time.update',$time->id)  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="exampleInputEmail111">  روز هفته :</label>
                                        <select name="weekDay" class="form-control">
                                            <option value="شنبه" @if($time->weekDay == 'شنبه') {{ 'selected' }} @endif>شنبه</option>
                                            <option value="یک شنبه" @if($time->weekDay == 'یک شنبه') {{ 'selected' }} @endif>یک شنبه</option>
                                            <option value="دو شنبه" @if($time->weekDay == 'دو شنبه') {{ 'selected' }} @endif>دو شنبه</option>
                                            <option value="سه شنبه" @if($time->weekDay == 'سه شنبه') {{ 'selected' }} @endif>سه شنبه</option>
                                            <option value="چهار شنبه" @if($time->weekDay == 'چهار شنبه') {{ 'selected' }} @endif>چهار شنبه</option>
                                        </select>
                                    </div>
                                    @error('weekDay')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label> دانشکده :</label>
                                        <select name="time" class="form-control">
                                            <option value="8" @if($time->time == '8') {{ 'selected' }} @endif>8-10</option>
                                            <option value="10" @if($time->time == '10') {{ 'selected' }} @endif>10-12</option>
                                            <option value="12" @if($time->time == '12') {{ 'selected' }} @endif>12-14</option>
                                            <option value="14" @if($time->time == '14') {{ 'selected' }} @endif>14-16</option>
                                            <option value="16" @if($time->time == '16') {{ 'selected' }} @endif>16-18</option>
                                            <option value="18" @if($time->time == '18') {{ 'selected' }} @endif>18-20</option>
                                        </select>
                                    </div>
                                    @error('time')
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
