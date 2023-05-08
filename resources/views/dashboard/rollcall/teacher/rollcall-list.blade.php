@extends('dashboard.layouts.master')
@section('title','لیست')
@section('content')
    <div class="main-content">
        <div class="dashboard-area">
            <div class="container-fluid">
                <div class="col-12 box-margin">
                    <div class="card code-table">
                        <div class="card-body pb-0">
                            <h5 class="card-title">لیست دانشجویان</h5>
                           @php $n = 1;
                           $d = count($date)-1 ;
                           @endphp

                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>عدد</th>
                                        <th>نام دانشجو</th>
                                        <th>شماره دانشجویی</th>
                                        @foreach($date as $date1)
                                            <th> {{ $date1->date }}</th>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>علی محمدی</td>
                                        <td>9613038806</td>
                                        <td>

                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
