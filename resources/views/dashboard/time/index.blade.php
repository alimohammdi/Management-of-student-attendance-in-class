@extends('dashboard.layouts.master')
@section('title','مدیریت زمان بندی ها')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('add-time'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('add-time') }}</span>
                            </div>
                            <br>
                        @endif
                        @if(session('delete-time'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('delete-time') }}</span>
                            </div>
                            <br>
                        @endif
                            @if(session('exist-time'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-danger  " > {{  session('exist-time') }}</span>
                                </div>
                                <br>
                            @endif
                        @if(session('update-time-success'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success" > {{  session('update-time-success') }}</span>
                            </div>
                            <br>
                        @endif
                        <h4 class="card-title text-info">اضافه کردن تایم کلاسی در هفته </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('time.store')  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> روز هفته :</label>
                                        <select name="weekDay" class="form-control">
                                            <option value="شنبه">شنبه</option>
                                            <option value="یک شنبه">یک شنبه</option>
                                            <option value="دو شنبه">دو شنبه</option>
                                            <option value="سه شنبه">سه شنبه</option>
                                            <option value="چهار شنبه">چهار شنبه</option>
                                        </select>
                                    </div>
                                    @error('weekDay')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label> ساعت در روز :</label>
                                        <select name="time"  class="form-control">
                                            <option value="8">8-10</option>
                                            <option value="10">10-12</option>
                                            <option value="12">12-14</option>
                                            <option value="14">14-16</option>
                                            <option value="16">16-18</option>
                                            <option value="18">18-20</option>
                                        </select>
                                    </div>
                                    @error('time')
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
                <div class="col-xl-6 box-margin height-card">
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>روز هفته</th>
                            <th>زمان</th>
                            <th>عملیات</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($times as $time)

                            <tr>

                                <th>{{ $time->weekDay }}</th>
                                <th>
                                   {{ $time->time }}
                                </th>
                                {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                <td class="row-cols-2  ">
                                    {!! Form::open(['route'=>['time.destroy','id'=>$time->id],'method'=>'delete']) !!}
                                    {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف زمان بندی اطمینان دارید ؟؟")']); !!}
                                    {!! Form::close() !!}

                                </td>
                                <td>
                                    {!! Form::open(['route'=>['time.edit','id'=>$time->id],'method'=>'get']) !!}
                                    {!! Form::submit('ویرایش',['class'=>'btn btn-info   btn-sm ']); !!}
                                    {!! Form::close() !!}
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
