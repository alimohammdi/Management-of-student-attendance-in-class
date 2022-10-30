@extends('dashboard.layouts.master')
@section('title','مدیریت کلاس های دانشکده')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('add-class-success'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('add-class-success') }}</span>
                            </div>
                            <br>
                        @endif
                            @if(session('add-class-error'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-success  " > {{  session('add-class-error') }}</span>
                                </div>
                                <br>
                            @endif
                            @if(session('delete-class'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-error  " > {{  session('delete-class') }}</span>
                                </div>
                                <br>
                            @endif
                            @if(session('update-class-success'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-success  " > {{  session('update-class-success') }}</span>
                                </div>
                                <br>
                            @endif
                            @if(session('update-class-error'))
                                <br>
                                <div class="mb-3">
                                    <span class="alert alert-error  " > {{  session('update-class-error') }}</span>
                                </div>
                                <br>
                            @endif

                            <h4 class="card-title text-info">اضافه کردن کلاس به دانشکده </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('class.store')  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام دانشکده :</label>
                                        <select name="college" class="form-control">
                                            @foreach($colleges as $college)
                                                <option value="{{ $college->id }}">{{ $college->value }}</option>
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
                                        <input type="number" name="classNumber" class="form-control"  value="{{ old('classNumber') }}" id="exampleInputEmail111"   >
                                    </div>
                                    @error('classNumber')
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
                            <th>شماره کلاس</th>
                            <th>نام دانشکده</th>
                            <th>عملیات</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($classes as $class)
                            <tr>


                                <th>{{ $class->classNumber }}</th>
                                <th>{{ $class->college->value }}</th>
                                {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                <td class="row-cols-2  ">
                                    {!! Form::open(['route'=>['class.destroy','id'=>$class->id],'method'=>'delete']) !!}
                                    {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف کلاس اطمینان دارید ؟؟")']); !!}
                                    {!! Form::close() !!}
                                </td>
                                <td>
                                    {!! Form::open(['route'=>['class.edit','id'=>$class->id],'method'=>'get']) !!}
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
