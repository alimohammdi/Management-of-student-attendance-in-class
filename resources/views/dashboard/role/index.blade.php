@extends('dashboard.layouts.master')
@section('title','مدیریت نقش ها')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('add.role.success'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('add.role.success') }}</span>
                            </div>
                            <br>
                        @endif
                        @if(session('add.role.error'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('add.role.error') }}</span>
                            </div>
                            <br>
                        @endif
                        @if(session('delete-role'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('delete-role') }}</span>
                            </div>
                            <br>
                        @endif
                        @if(session('update-role-success'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-success  " > {{  session('update-role-success') }}</span>
                            </div>
                            <br>
                        @endif
                        @if(session('update-role-error'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('update-role-error') }}</span>
                            </div>
                            <br>
                        @endif

                        <h4 class="card-title text-info">اضافه کردن نقش  </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('role.store') }} "  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام نقش :</label>
                                        <input type="text" name="name" class="form-control"  value="{{ old('name') }}" id="exampleInputEmail111"   >
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label> توضیحات نقش :</label>
                                        <input type="text" name="description" class="form-control"  value="{{ old('description') }}" id="exampleInputEmail111"   >
                                    </div>
                                    @error('description')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label> دسترسی (مجوز) :</label>
                                        <select name="permission[]" multiple="multiple" class="form-control"id="">
                                            @foreach($permissions as $permission )
                                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                     </div>

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
                            <th>نقش</th>
                            <th>توضیحات</th>
                            <th>مجوز ها</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)

                            <tr>

                                <th>{{ $role->name }}</th>
                                <th>{{ $role->description }} </th>
                                <th>
                                    @foreach($role->permissions as $permission)
                                        {{ $permission->description }} -
                                    @endforeach
                                </th>
                                {{--                                            <td>{{ $user->created_at->format('Y/m/d') }}</td>--}}
                                <td class="row-cols-2  ">
                                    {!! Form::open(['route'=>['role.destroy','id'=>$role->id],'method'=>'delete']) !!}
                                    {!! Form::submit('حذف',['class'=>'btn btn-danger btn-sm mb-1 ','onclick' => 'return confirm("آیا از حذف نقش اطمینان دارید ؟؟")']); !!}
                                    {!! Form::close() !!}
                                    {!! Form::open(['route'=>['role.edit','id'=>$role->id],'method'=>'get']) !!}
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
