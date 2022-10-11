@extends('dashboard.layouts.master')
@section('title',' مدیریت اساتید-داشبورد')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش استاید</h4>
                                @if(session('add.teacher.success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('add.teacher.success') }} </span>
                                    </div>
                                @endif
                                @if(session('update.teacher.success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('update.teacher.success') }} </span>
                                    </div>
                                @endif
                                @if(session('delete.teacher.success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-danger text-dark"> {{ session('delete.teacher.success') }} </span>
                                    </div>
                                @endif
                                <a href="{{ route('teacher.create') }}" class="btn btn-primary mt-2 mb-2 col align-self-start"> افزودن استاد جدید</a>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>نام و نام خانواگی</th>
                                        <th>شماره ملی</th>
                                        <th> تحصیلات </th>
                                        <th>دانشکده</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $num = 1;
                                    ?>
                                    @foreach ($teachers as $teach)

                                        <tr>
                                            <td>{{ $num ++  }}</td>
                                            <td>{{ $teach->full_name }}</td>
                                            <td>{{ $teach->code_meli }}</td>
                                            <td>{{ $teach->degree }} </td>
                                            <td>{{ $teach->college }}</td>
                                            {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                            <td class="row-cols-2  ">
                                                {!! Form::open(['route'=>['teacher.destroy','id'=>$teach->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف استاد اطمینان دارید ؟؟")']); !!}
                                                {!! Form::close() !!}
                                                {!! Form::open(['route'=>['teacher.edit','id'=>$teach->id],'method'=>'get']) !!}
                                                {!! Form::submit('ویرایش',['class'=>'btn btn-info btn-sm mb-1 ']); !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $teachers->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
