@extends('dashboard.layouts.master')
@section('title','مدیریت دسترسی ها')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('add.permission.success'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('add.permission.success') }}</span>
                            </div>
                            <br>
                        @endif
                            @if(session('add.permission.error'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-danger  " > {{  session('add.permission.error') }}</span>
                                </div>
                                <br>
                            @endif
                            @if(session('delete-permission'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-success  " > {{  session('delete-permission') }}</span>
                                </div>
                                <br>
                            @endif
                            @if(session('update-permission-success'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-success  " > {{  session('update-permission-success') }}</span>
                                </div>
                                <br>
                            @endif
                            @if(session('update-permission-error'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-danger  " > {{  session('update-permission-error') }}</span>
                                </div>
                                <br>
                            @endif

                        <h4 class="card-title text-info">اضافه کردن دسترسی  </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action=" "  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام دسترسی :</label>
                                        <input type="text" name="name" class="form-control"  value="{{ old('name') }}" id="exampleInputEmail111"   >
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label> توضیحات دسترسی :</label>
                                        <input type="text" name="description" class="form-control"  value="{{ old('description') }}" id="exampleInputEmail111"   >

                                    </div>
                                    @error('description')
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
                            <th>دسترسی</th>
                            <th>توضیحات</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($permissions as $permission)

                            <tr>

                                <th>{{ $permission->name }}</th>
                                <th>{{ $permission->description }} </th>
                                {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                <td class="row-cols-2  ">
                                    {!! Form::open(['route'=>['permission.destroy','id'=>$permission->id],'method'=>'delete']) !!}
                                    {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف دسترسی اطمینان دارید ؟؟")']); !!}
                                    {!! Form::close() !!}
                                    {!! Form::open(['route'=>['permission.edit','id'=>$permission->id],'method'=>'get']) !!}
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
