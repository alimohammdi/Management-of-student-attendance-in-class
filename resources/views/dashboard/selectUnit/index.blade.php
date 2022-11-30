@extends('dashboard.layouts.master')
@section('title','انتخاب دانشکده')
@section('content')
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        <h3 class="card-title text-info ">انتخاب واحد</h3>
                        @if(session('select.unit.error'))
                            <br>
                            <div class="mt-2 mb-3">
                                <span class="alert alert-danger"> {{ session('select.unit.error') }} </span>
                            </div>
                        @endif
                        @if(session('select.unit.success'))
                            <br>
                            <div class="mt-2 mb-3">
                                <span class="alert alert-success"> {{ session('select.unit.success') }} </span>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('selectUnit.store') }} "  method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>کد درس</label>
                                            <input type="number" name="code_course" class="form-control"  value="{{ old('code_course') }}" >
                                        </div>
                                        @error('code_course')
                                        <div class="alert alert-danger">
                                            <span > {{ $message  }}</span>
                                        </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">انتخاب</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">نمایش واحد ها</h4>

                             <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>

                                <tr>
                                    <th>#</th>
                                    <th>کد درس</th>
                                    <th>عنوان درس</th>
                                    <th>دانشکده</th>
                                    <th>استاد مربوطه</th>
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
                                        <td>{{ $unit->teacher->full_name }}</td>
                                        {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                        <td class="row-cols-2  ">
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
        </div>
    </div>
@endsection
