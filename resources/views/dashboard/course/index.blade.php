@extends('dashboard.layouts.master')
@section('title',' مدیریت درس ها -داشبورد')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش درس ها</h4>
                                @if(session('add-major-success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('add-major-success') }} </span>
                                    </div>
                                @endif
                                @if(session('add-major-error'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-danger"> {{ session('add-major-error') }} </span>
                                    </div>
                                @endif
                                @if(session('delete-major'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-danger"> {{ session('delete-major') }} </span>
                                    </div>
                                @endif
                                @if(session('update-course'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('update-course') }} </span>
                                    </div>
                                @endif

                                <a href="{{ route('course.create') }}" class="btn btn-primary mt-2 mb-2 col align-self-start"> افزودن درس جدید</a>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>کد درس</th>
                                        <th>نام درس</th>
                                        <th> دانشکده </th>
                                        <th>استاد</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $num = 1;
                                    ?>
                                    @foreach ($courses as $course)

                                        <tr>
                                            <td>{{ $num ++  }}</td>
                                            <td>{{ $course->code }}</td>
                                            <td>{{ $course->name }}</td>
                                            <td>{{ $course->college->value }}</td>
                                            <td>{{ $course->teacher->full_name }} </td>

                                            {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                            <td class="row-cols-2  ">
                                                {!! Form::open(['route'=>['course.destroy','id'=>$course->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف درس اطمینان دارید ؟؟")']); !!}
                                                {!! Form::close() !!}
                                                {!! Form::open(['route'=>['course.edit','id'=>$course->id],'method'=>'get']) !!}
                                                {!! Form::submit('ویرایش',['class'=>'btn btn-info btn-sm mb-1 ']); !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $courses->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div>
        </div>
    </div>
@endsection
