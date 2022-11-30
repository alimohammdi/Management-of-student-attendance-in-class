@extends('dashboard.layouts.master')
@section('title','نمایش واحد ها')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش واحد ها</h4>
                                @if(session('create-unit-success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('create-unit-success') }} </span>
                                    </div>
                                @endif
                                @if(session('create-unit-error'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('create-unit-error') }} </span>
                                    </div>
                                @endif
                                @if(session('delete-AddUnit-success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('delete-AddUnit-success') }} </span>
                                    </div>
                                @endif
                                @if(session('delete-AddUnit-error'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-error"> {{ session('delete-AddUnit-error') }} </span>
                                    </div>
                                @endif

                                @if(session('update-unit-error'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-error"> {{ session('update-unit-error') }} </span>
                                    </div>
                                @endif
                                @if(session('update-unit-success'))
                                    <br>
                                    <div class="mt-2 mb-3">
                                        <span class="alert alert-success"> {{ session('update-unit-success') }} </span>
                                    </div>
                                @endif
                                <a href="{{ route('select.college.unit') }}" class="btn btn-primary mt-2 mb-2 col align-self-start">  افزودن واحد درسی</a>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>کد درس</th>
                                        <th>عنوان درس</th>
                                        <th>دانشکده</th>
                                        <th>عملیات</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $num = 1;
                                    ?>
                                    @foreach ($units as $unit)

                                        <tr>
                                            <td>{{ $num ++  }}</td>
                                            <td>{{ $unit->course->code }}</td>
                                            <td>{{ $unit->course->name }}</td>
                                            <td>{{ $unit->college->value }} </td>
                                            {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                            <td class="row-cols-2  ">
                                                {!! Form::open(['route'=>['addUnit.destroy','id'=>$unit->id],'method'=>'delete']) !!}
                                                {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف دانشجو اطمینان دارید ؟؟")']); !!}
                                                {!! Form::close() !!}

                                            </td>
                                            <td>
                                                {!! Form::open(['route'=>['addUnit.edit','id'=>$unit->id],'method'=>'get']) !!}
                                                {!! Form::submit('ویرایش',['class'=>'btn btn-info btn-sm mb-1 ']); !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $units->links() }}
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>
@endsection
