@extends('dashboard.layouts.master')
@section('title','مدیریت دانشکده ها')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('add-college'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('add-college') }}</span>
                            </div>
                            <br>
                        @endif
                        @if(session('delete-college'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('delete-college') }}</span>
                            </div>
                            <br>
                        @endif
                            @if(session('update-college-success'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-success  " > {{  session('update-college-success') }}</span>
                                </div>
                                <br>
                            @endif
                        <h4 class="card-title text-info">اضافه کردن دانشکده </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('college.store')  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام دانشکده :</label>
                                        <input type="text" name="name" class="form-control"  value="{{ old('value') }}" id="exampleInputEmail111"   >
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
                <div class="col-xl-6 box-margin height-card">
                     <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>نام دانشکده</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($colleges as $col)

                            <tr>

                                <th>{{ $col->value }}</th>
                                {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                <td class="row-cols-2  ">
                                    {!! Form::open(['route'=>['college.destroy','id'=>$col->id],'method'=>'delete']) !!}
                                    {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف دانشکده اطمینان دارید ؟؟")']); !!}
                                    {!! Form::close() !!}
                                    {!! Form::open(['route'=>['college.edit','id'=>$col->id],'method'=>'get']) !!}
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
