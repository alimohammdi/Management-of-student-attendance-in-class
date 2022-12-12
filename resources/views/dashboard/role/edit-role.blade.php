@extends('dashboard.layouts.master')
@section('title','ویرایش نقش')
@section('content')

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-6 box-margin height-card">
                    <div class="card card-body">
                        @if(session('edit-role-error'))
                            <br>
                            <div class="mb-3">
                                <span class="alert alert-danger  " > {{  session('edit-role-error') }}</span>
                            </div>
                            <br>
                        @endif

                        <h4 class="card-title text-info">ویرایش نقش </h4>

                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('role.update',$role->id)  }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> نام دسترسی :</label>
                                        <input type="text" name="name" class="form-control"  value="{{ $role->name }}" >
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="exampleInputEmail111"> توضیحات :</label>
                                        <input type="text" name="description" class="form-control"  value="{{ $role->description }}" >
                                    </div>
                                    @error('description')
                                    <div class="alert alert-danger">
                                        <span > {{ $message  }}</span>
                                    </div>
                                    @enderror


                                    <div class="form-group">
                                        <label> دسترسی (مجوز) :</label>
                                        <select name="permission[]" multiple="multiple" class="form-control" id="">
                                            @foreach($permissions as $permission )
                                                <option value="{{ $permission->id }}" {{ in_array($permission->id,$role->permissions()->pluck('id')->toArray()) ? 'selected' : '' }} >{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">ویرایش</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
