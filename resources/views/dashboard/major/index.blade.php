@extends('dashboard.layouts.master')
@section('title','مدیریت رشته ها')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('add-major'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('add-major') }}</span>
                            </div>
                            <br>
                        @endif
                        @if(session('delete-major'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('delete-major') }}</span>
                            </div>
                            <br>
                        @endif
                        @if(session('update-major-success'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('update-major-success') }}</span>
                            </div>
                            <br>
                        @endif
                        <h4 class="card-title text-info">اضافه کردن رشته تحصیلی </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('major.store')  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام رشته :</label>
                                        <input type="text" name="name" class="form-control"  value="{{ old('name') }}" id="exampleInputEmail111"   >
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label> دانشکده :</label>
                                        <select name="college"  class="form-control">
                                            @forelse($colleges as $col)
                                                <option value="{{ $col->id }}">{{ $col->value }}</option>
                                            @empty
                                                <span class="alert alert-danger">دانشکده ای موجود نیست </span>
                                            @endforelse
                                        </select>
                                    </div>
                                    @error('college')
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
                            <th>نام رشته</th>
                            <th>دانشکده</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($majors as $maj)

                            <tr>

                                <th>{{ $maj->name }}</th>
                                <th>
                                    @foreach($colleges as $col)
                                        @if ($col->id === $maj->college_id)
                                            {{ $col->value }}
                                        @endif
                                    @endforeach
                                </th>
                                {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                <td class="row-cols-2  ">
                                    {!! Form::open(['route'=>['major.destroy','id'=>$maj->id],'method'=>'delete']) !!}
                                    {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف رشته اطمینان دارید ؟؟")']); !!}
                                    {!! Form::close() !!}
                                    {!! Form::open(['route'=>['major.edit','id'=>$maj->id],'method'=>'get']) !!}
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
