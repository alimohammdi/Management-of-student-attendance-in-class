@extends('dashboard.layouts.master')
@section('title','داشبورد')
@section('content')
<!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش دانشجویان</h4>
                                @if(session('add.student.success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('add.student.success') }} </span>
                                    </div>
                                @endif
                                @if(session('update.student.success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('update.student.success') }} </span>
                                    </div>
                                @endif
                                @if(session('delete.student.success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-danger text-dark"> {{ session('delete.student.success') }} </span>
                                    </div>
                                @endif
                                <a href="{{ route('student.create') }}" class="btn btn-primary mt-2 mb-2 col align-self-start"> افزودن دانشجوی جدید</a>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>نام و نام خانواگی</th>
                                        <th>شماره دانشجویی</th>
                                        <th>رشته تحصیلی </th>
                                        <th> دانشکده</th>
                                        <th>سال ورودی</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                        $num = 1;
                                        ?>
                                    @foreach ($students as $stu)

                                        <tr>
                                            <td>{{ $num ++  }}</td>
                                            <td>{{ $stu->full_name }}</td>
                                            <td>{{ $stu->stu_number }}</td>
                                            <td>{{ $stu->major }} </td>
                                            <td>{{ $stu->college->value }}</td>
                                            <td>{{ $stu->stu_year }}</td>
                                            {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                            <td class="row-cols-2  ">
                                                {!! Form::open(['route'=>['student.destroy','id'=>$stu->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف دانشجو اطمینان دارید ؟؟")']); !!}
                                                {!! Form::close() !!}
                                                {!! Form::open(['route'=>['student.edit','id'=>$stu->id],'method'=>'get']) !!}
                                                {!! Form::submit('ویرایش',['class'=>'btn btn-info btn-sm mb-1 ']); !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $students->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
