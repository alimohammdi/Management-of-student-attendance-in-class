@extends('dashboard.layouts.master')
@section('title','داشبورد')
@section('content')
    <div class="main-content">
        <div class="dashboard-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="dashboard-header-title mb-3">
                            <h5 class="mb-0 font-weight-bold">داشبورد</h5>
                            <p class="mb-0 font-weight-bold">به پنل مدیریت خوش آمدید.</p>
                        </div>
                    </div>
                    <!-- Dashboard Info Area -->
                    <div class="col-6">
                        <div class="dashboard-infor-mation d-flex flex-wrap align-items-center mb-3">
                            <div class="dashboard-clock ltr">
                                <span>دوشنبه 15 آبان</span><br>
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li id="hours">12</li>
                                    <li>:</li>
                                    <li id="min">10</li>
                                    <li>:</li>
                                    <li id="sec">14</li>
                                </ul>
                            </div>
                            <div class="dashboard-btn-group d-flex align-items-center">
                                <a href="#" class="btn btn-primary ml-1"><i class="ti-settings"></i></a>
                                <a href="#" class="btn btn-primary ml-1"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Time Date Area -->
                    <div class="col-12 box-margin">
                        <div class="card bg-boxshadow">
                            <div class="card-body px-3 py-2">
                                <div class="user-important-data-info d-sm-flex align-items-center justify-content-between">
                                    <ul class="downloads--data-btn d-flex align-items-center justify-content-between mb-3 mb-sm-0">
                                        <li><a href="#" class="btn"><i class="ti-arrow-down"></i> بارگیری ها</a></li>
                                        <li><a href="#" class="btn"><i class="ti-reload"></i> به روزرسانی ها</a></li>
                                        <li><a href="#" class="btn"><i class="ti-import"></i> وارد كردن</a></li>
                                    </ul>
                                    <ul class="sales-reports d-flex align-items-center justify-content-between">
                                        <li><span>هفته گذشته </span> <span class="counter">500.68</span></li>
                                        <li><span>این هفته </span> <span class="counter">438.12</span></li>
                                        <li><span>تراز </span> <span class="counter">693.87</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Earning Area -->
                    <div class="col-md-6 box-margin height-card">
                        <div class="card bg-primary earning-date">
                            <div class="card-body">
                                <div class="dashboard-tab-area">
                                    <h5 class="text-white card-title">درآمد</h5>
                                    <div class="bd-example bd-example-tabs">
                                        <div class="tab-content" id="tabContent-pills">
                                            <div class="tab-pane fade" id="earnings-mon" role="tabpanel" aria-labelledby="pills-earnings-mon">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h2 class="text-white mb-3 font-30">359،234<i class="arrow_up"></i></h2>
                                                        <span class="text-white mb-3 d-block">درآمد کل</span>
                                                    </div>
                                                    <div class="dashboard-tab-thumb">
                                                        <img src="admin/img/bg-img/6.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="earnings-tue" role="tabpanel" aria-labelledby="pills-earnings-tue">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h2 class="text-white mb-3 font-30">22،234<i class="arrow_up"></i></h2>
                                                        <span class="text-white mb-3 d-block">درآمد کل</span>
                                                    </div>
                                                    <div class="dashboard-tab-thumb">
                                                        <img src="admin/img/bg-img/6.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="earnings-wed" role="tabpanel" aria-labelledby="pills-earnings-wed">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h2 class="text-white mb-3 font-30">198،234<i class="arrow_up"></i></h2>
                                                        <span class="text-white mb-3 d-block">درآمد کل</span>
                                                    </div>
                                                    <div class="dashboard-tab-thumb">
                                                        <img src="admin/img/bg-img/6.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="earnings-thu" role="tabpanel" aria-labelledby="pills-earnings-thu">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h2 class="text-white mb-3 font-30">256،234 <i class="arrow_up"></i></h2>
                                                        <span class="text-white mb-3 d-block">درآمد کل</span>
                                                    </div>
                                                    <div class="dashboard-tab-thumb">
                                                        <img src="admin/img/bg-img/6.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="earnings-fri" role="tabpanel" aria-labelledby="pills-earnings-fri">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h2 class="text-white mb-3 font-30">256،234<i class="arrow_up"></i></h2>
                                                        <span class="text-white mb-3 d-block">درآمد کل</span>
                                                    </div>
                                                    <div class="dashboard-tab-thumb">
                                                        <img src="admin/img/bg-img/6.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="earnings-sat" role="tabpanel" aria-labelledby="pills-earnings-sat">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h2 class="text-white mb-3 font-30">548،234<i class="arrow_up"></i></h2>
                                                        <span class="text-white mb-3 d-block">درآمد کل</span>
                                                    </div>
                                                    <div class="dashboard-tab-thumb">
                                                        <img src="admin/img/bg-img/6.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade active show" id="earnings-sun" role="tabpanel" aria-labelledby="pills-earnings-sun">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <h2 class="text-white mb-3 font-30">459،234<i class="arrow_up"></i></h2>
                                                        <span class="text-white mb-3 d-block">درآمد کل</span>
                                                    </div>
                                                    <div class="dashboard-tab-thumb">
                                                        <img src="admin/img/bg-img/6.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="pills-earnings-sat" data-toggle="pill" href="#earnings-sat" role="tab" aria-controls="earnings-sat" aria-selected="false">نشسته</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link show" id="pills-earnings-sun" data-toggle="pill" href="#earnings-sun" role="tab" aria-controls="earnings-sun" aria-selected="true">آفتاب</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-earnings-mon" data-toggle="pill" href="#earnings-mon" role="tab" aria-controls="earnings-mon" aria-selected="false">دوشنبه</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link show" id="pills-earnings-tue" data-toggle="pill" href="#earnings-tue" role="tab" aria-controls="earnings-tue" aria-selected="false">سه شنبه</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link show" id="pills-earnings-wed" data-toggle="pill" href="#earnings-wed" role="tab" aria-controls="earnings-wed" aria-selected="false">چهارشنبه</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link show" id="pills-earnings-thu" data-toggle="pill" href="#earnings-thu" role="tab" aria-controls="earnings-thu" aria-selected="false">پنجشنبه</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link show" id="pills-earnings-fri" data-toggle="pill" href="#earnings-fri" role="tab" aria-controls="earnings-fri" aria-selected="false">جمعه</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Best seller Area -->
                    <div class="col-md-6 height-card box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="font-20 mb-1">تبریک می گویم هیملا!</h5>
                                <p class="mb-20">پرفروش ترین ماه</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="dashboard-content-right">
                                        <h2 class="text-success font-36 font-weight-bold">59k تومان</h2>
                                        <p class="font-15 font-weight-bold">شما امروز 65.6٪ <br>فروش بیشتر انجام داده اید .</p>
                                        <button type="button" class="btn btn-primary mt-15">مشاهده فروش</button>
                                    </div>
                                    <div class="dashboard-content-left wow shake" data-wow-delay="0.6s">
                                        <img src="img/bg-img/5.jpg" class="img-fluid" alt="داشبورد" width="180" height="180">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">خلاصه سفارش</h5>
                                <div id="line-chart2" class="height-300"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 box-margin">
                        <div class="card  bg-c-blue">
                            <div class="card-body">
                                <h5 class="card-title">درآمد کل</h5>
                                <div class="earning-text mb-4">
                                    <h3 class="mb-3">295.36 تومان <i class="feather icon-arrow-up teal accent-3"></i></h3>
                                    <span class="text-uppercase d-block">درآمد</span>
                                </div>
                                <div id="Widget-line-chart1" class="height-200"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="col-12 col-sm-6 col-xl-4 height-card box-margin">
                        <div class="card">
                            <div class="card-body py-4">
                                <div class="media align-items-center">
                                    <div class="d-inline-block mr-3">
                                        <i class="icon_cart_alt font-30 text-success"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="mb-2 font-24">3562</h3>
                                        <div class="mb-0 font-14 font-weight-bold">فروش امروز</div>
                                    </div>
                                    <div class="pirty-chart"><span class="bar">5،3،9،6،5،9،7،3،5،2</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="col-12 col-sm-6 col-xl-4 height-card box-margin">
                        <div class="card">
                            <div class="card-body py-4">
                                <div class="media align-items-center">
                                    <div class="d-inline-block mr-3">
                                        <i class="icon_map_alt font-30 text-warning"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="mb-2 font-24">1،869</h3>
                                        <div class="mb-0 font-14 font-weight-bold">بازدید کنندگان امروز</div>
                                    </div>
                                    <div class="pity-chart">
                                        <span data-diameter="40" class="updating-chart">5،3،9،6،5،9،7،3،5،2،5،3،9،6،5،9،7،3،5،2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget -->
                    <div class="col-12 col-sm-6 col-lg-4 height-card box-margin break-992-none break-768-none break-576-none">
                        <div class="card">
                            <div class="card-body py-4">
                                <div class="media align-items-center">
                                    <div class="d-inline-block mr-3">
                                        <i class="icon_cart_alt font-30 text-info"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="mb-2 font-24">13،562</h3>
                                        <div class="mb-0 font-14 font-weight-bold">درآمد کل</div>
                                    </div>
                                    <div class="pity-chart">
                                        <span class="bar">5،3،2 ، -1 ، -3 ، -2،2،3،5،2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-5 col-lg-4 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">صرفه جویی در کل</h5>
                                <h5>359،234 تومان</h5>
                                <span class="d-block pt-1 pb-3">صرفه جویی در کل</span>
                                <div id="chart-percent1" class="chart-percent1" style="height:200px;"></div>
                                <div class="client-name">
                                    <div class="row">
                                        <div class="col-sm-12 pt-2 pb-2">
                                            <span class="mr-3"><i class="feather icon-circle text-c-green  mr-2"></i>کیف پول اصلی </span>
                                            <span class="float-right text-muted">194.42 تومان</span>
                                        </div>
                                        <div class="col-sm-12 pt-2 pb-2">
                                            <span class="mr-3"><i class="feather icon-circle text-c-blue  mr-2"></i>سفر </span>
                                            <span class="float-right text-muted">194.42 تومان</span>
                                        </div>
                                        <div class="col-sm-12 pt-2">
                                            <span class="mr-3"><i class="feather icon-circle text-c-purple  mr-2"></i>غذا و نوشیدنی </span>
                                            <span class="float-right text-muted">23.27 تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-lg-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">خلاصه سالانه</h5>
                                <div class="row pb-3">
                                    <div class="col-md-4 col-6 text-center">
                                        <h5 class="f-w-300">2569.4 تومان</h5>
                                        <span>صورتحساب</span>
                                    </div>
                                    <div class="col-md-4 col-6 text-center">
                                        <h5 class="f-w-300">3569.6 تومان</h5>
                                        <span>سود</span>
                                    </div>
                                    <div class="col-md-4 col-12 text-center">
                                        <h5 class="f-w-300">356.9 تومان</h5>
                                        <span>هزینه ها</span>
                                    </div>
                                </div>
                                <div id="bar-chart3" class="bar-chart3" style="height:300px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">جدول زمانی فعالیت</h4>
                                <ul class="dashboard-active-timeline list-unstyled" id="dashboardTimeline">
                                    <li class="d-flex align-items-center mb-15">
                                        <div class="timeline-icon bg-primary mr-3">
                                            <i class="icon_plus"></i>
                                        </div>
                                        <div class="timeline-info">
                                            <p class="font-weight-bold mb-0">جلسه مشتری</p>
                                            <span>لورم ایپسوم متن ساختگی
</span>
                                            <p class="mb-0">25 دقیقه پیش</p>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center mb-15">
                                        <div class="timeline-icon bg-warning mr-3">
                                            <i class="icon_mic_alt"></i>
                                        </div>
                                        <div class="timeline-info">
                                            <p class="font-weight-bold mb-0">خبرنامه ایمیل</p>
                                            <span>لورم ایپسوم متن ساختگی
</span>
                                            <p class="mb-0">29 دقیقه پیش</p>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center mb-15">
                                        <div class="timeline-icon bg-danger mr-3">
                                            <i class="icon_mail_alt"></i>
                                        </div>
                                        <div class="timeline-info">
                                            <p class="font-weight-bold mb-0">برنامه ریزی </p>
                                            <span>کیک بستنی آب نبات.</span>
                                            <p class="mb-0">28 دقیقه قبل</p>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center mb-15">
                                        <div class="timeline-icon bg-success mr-3">
                                            <i class="icon_check"></i>
                                        </div>
                                        <div class="timeline-info">
                                            <p class="font-weight-bold mb-0">راه اندازی وب سایت</p>
                                            <span>کیک بستنی آب نبات. </span>
                                            <p class="mb-0">45 دقیقه قبل</p>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center mb-15">
                                        <div class="timeline-icon bg-danger mr-3">
                                            <i class="icon_mail_alt"></i>
                                        </div>
                                        <div class="timeline-info">
                                            <p class="font-weight-bold mb-0">برنامه ریزی وبینار</p>
                                            <span>کیک بستنی آب نبات.</span>
                                            <p class="mb-0">50 دقیقه پیش</p>
                                        </div>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <div class="timeline-icon bg-primary mr-3">
                                            <i class="icon_check"></i>
                                        </div>
                                        <div class="timeline-info">
                                            <p class="font-weight-bold mb-0">بازار یابی</p>
                                            <span>لورم ایپسوم متن ساختگی
</span>
                                            <p class="mb-0">57 دقیقه قبل</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">محصول برتر</h5>
                                <div class="product-table-area">
                                    <div class="table-responsive" id="dashboardTable">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>تولید - محصول</th>
                                                <th>کد</th>
                                                <th>حراجی</th>
                                                <th>درآمد</th>
                                                <th style="max-width: 70px">موجودی</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-4.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>تلفن تلفن</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2864</td>
                                                <td>81</td>
                                                <td>1،912.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" style="width: 82%"></div>
                                                        </div>
                                                        <div>
                                                            824
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>ساعت مچی</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>3664</td>
                                                <td>26</td>
                                                <td>1،377.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" style="width: 61%"></div>
                                                        </div>
                                                        <div>
                                                            161
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-2.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>عينك آفتابي</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2364</td>
                                                <td>71</td>
                                                <td>9،212.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-danger" style="width: 23%"></div>
                                                        </div>
                                                        <div>
                                                            123
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>ساعت مچی</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>25664</td>
                                                <td>79</td>
                                                <td>1،298.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-warning" style="width: 54%"></div>
                                                        </div>
                                                        <div>
                                                            254
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-4.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>تلفن تلفن</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>9564</td>
                                                <td>26</td>
                                                <td>1،377.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" style="width: 61%"></div>
                                                        </div>
                                                        <div>
                                                            61
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-3.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>ساعت مچی</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>7864</td>
                                                <td>71</td>
                                                <td>9،212.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-danger" style="width: 23%"></div>
                                                        </div>
                                                        <div>
                                                            145
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="chat-img mr-2">
                                                            <img src="img/shop-img/best-2.png" alt="">
                                                        </div>
                                                        <div>
                                                            <span>عينك آفتابي</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1564</td>
                                                <td>60</td>
                                                <td>7،376.00 تومان</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" style="width: 76%"></div>
                                                        </div>
                                                        <div>
                                                            176
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-3">
                        <div class="card bg-boxshadow full-height">
                            <div class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                                <h5 class="card-title mb-0">کاربران جدید</h5>
                                <!-- Nav Tabs -->
                                <ul class="nav total-earnings nav-tabs mb-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link show" id="today-users-tab" data-toggle="tab" href="#today-users" role="tab" aria-controls="today-users" aria-selected="false">امروز</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mr-0 active" id="month-users-tab" data-toggle="tab" href="#month-users" role="tab" aria-controls="month-users" aria-selected="true">ماه</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="userList2">
                                    <div class="tab-pane fade" id="today-users" role="tabpanel" aria-labelledby="today-users-tab">
                                        <ul class="total-earnings-list">
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-2.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نام کاربر</h6>
                                                        <p class="mb-0">طراح محصول</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-3.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">دیسک نیلی</h6>
                                                        <p class="mb-0">توسعه دهنده وب</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-4.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">ویلتور دلتون</h6>
                                                        <p class="mb-0">مدیر پروژه</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-5.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نیک استون</h6>
                                                        <p class="mb-0">طراح ویژوال</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/team-7.jpg" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">ویلتور دلتون</h6>
                                                        <p class="mb-0">مدیر پروژه</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade active show" id="month-users" role="tabpanel" aria-labelledby="month-users-tab">
                                        <ul class="total-earnings-list">
                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/2.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">ویلتور دلتون</h6>
                                                        <p class="mb-0">مدیر پروژه</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/3.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نام کاربر</h6>
                                                        <p class="mb-0">طراح محصول</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/4.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">دیسک نیلی</h6>
                                                        <p class="mb-0">توسعه دهنده وب</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/1.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نظرالاسلام</h6>
                                                        <p class="mb-0">طراح ویژوال</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>

                                            <li>
                                                <div class="author-info d-flex align-items-center">
                                                    <div class="author-img mr-3">
                                                        <img src="img/member-img/5.png" alt="">
                                                    </div>
                                                    <div class="author-text">
                                                        <h6 class="mb-0">نیک استون</h6>
                                                        <p class="mb-0">طراح ویژوال</p>
                                                    </div>
                                                </div>
                                                <a href="#" class="badge badge-primary">دنبال کردن</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 col-md-6 height-card box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">اطلاعیه</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-widget-timeline mb-15">
                                            <div class="media">
                                                <div class="mr-3">
                                                    <i class="fa fa-circle text-success font-11 mr-2"></i>
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="img/member-img/1.png" alt="کاربر چت"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="d-inline-block">لورم ایپسوم متن ساختگی  </h6>
                                                    <p class="mb-0">لورم ایپسوم به سادگی…</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="single-widget-timeline mb-15">
                                            <div class="media">
                                                <div class="mr-3">
                                                    <i class="fa fa-circle text-success font-11 mr-2"></i>
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="img/member-img/team-1.jpg" alt="کاربر چت"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="d-inline-block">لورم ایپسوم متن ساختگی  </h6>
                                                    <p class="mb-0">لورم ایپسوم متن ساده ای است ...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="single-widget-timeline mb-15">
                                            <div class="media">
                                                <div class="mr-3">
                                                    <i class="fa fa-circle text-success font-11 mr-2"></i>
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="img/member-img/team-2.jpg" alt="کاربر چت"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="d-inline-block">لورم ایپسوم متن ساختگی  </h6>
                                                    <p class="mb-0">لورم ایپسوم متن ساده ای است ...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="single-widget-timeline mb-15">
                                            <div class="media">
                                                <div class="mr-3">
                                                    <i class="fa fa-circle text-success font-11 mr-2"></i>
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="img/member-img/team-1.jpg" alt="کاربر چت"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="d-inline-block">لورم ایپسوم متن ساختگی  </h6>
                                                    <p class="mb-0">لورم ایپسوم متن ساده ای است ...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="single-widget-timeline">
                                            <div class="media">
                                                <div class="mr-3">
                                                    <i class="fa fa-circle text-success font-11 mr-2"></i>
                                                    <a href="#!"><img class="rounded-circle" style="width:40px;" src="img/member-img/team-4.jpg" alt="کاربر چت"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="d-inline-block">لورم ایپسوم متن ساختگی  </h6>
                                                    <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 box-margin">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body chat-application">
                                    <h4 class="card-title">گپ</h4>
                                    <div class="chats" id="chatBox">
                                        <div class="chats">
                                            <div class="chat">
                                                <div class="chat-avatar">
                                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                        <img src="img/member-img/1.png" alt="آواتار">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-content">
                                                        <p class="text-white">چطور میتوانیم کمک کنیم؟ ما برای شما اینجا هستیم</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-left">
                                                <div class="chat-avatar">
                                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                        <img src="img/member-img/2.png" alt="آواتار">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-content">
                                                        <p>سلام جیکوب ، می توانید به من کمک کنید تا آن را دریابم؟</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat">
                                                <div class="chat-avatar">
                                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                        <img src="img/member-img/3.png" alt="آواتار">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-content">
                                                        <p class="text-white">کاملا!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-left">
                                                <div class="chat-avatar">
                                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                        <img src="img/member-img/4.png" alt="آواتار">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-content">
                                                        <p>من به دنبال بهترین الگوی سرپرست هستم.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat">
                                                <div class="chat-avatar">
                                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                        <img src="img/member-img/5.png" alt="آواتار">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-content">
                                                        <p class="text-white">Crest admin الگوی مدیریت پاسخگو bootstrap 4 است.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-left">
                                                <div class="chat-avatar">
                                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                        <img src="img/member-img/6.png" alt="آواتار">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-content">
                                                        <p>به نظر می رسد UI تمیز و تازه.</p>
                                                    </div>
                                                    <div class="chat-content">
                                                        <p>این مناسب برای پروژه بعدی من است.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="chat-app-input mt-1 row">
                                        <div class="col-12">
                                            <fieldset>
                                                <div class="input-group position-relative has-icon-left">
                                                    <input type="text" class="form-control" placeholder="پیام" aria-describedby="button-addon3">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="button">ارسال</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 height-card box-margin">
                        <!-- Project status -->
                        <div class="card">
                            <div class="card-body pb-0">
                                <h6 class="card-title">وضعیت پروژه</h6>
                                <div class="row mb-3">
                                    <div class="col-9">
                                        <div class="progress-wrapper">
                                            <span class="progress-label text-dark font-weight-bold">طراحی وب سایت</span>
                                            <div class="progress mt-2 mb-2" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end text-right">
                                        <span class="text-dark mb-0">80٪</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-9">
                                        <div class="progress-wrapper">
                                            <span class="progress-label text-dark font-weight-bold">نشانه گذاری وب سایت</span>
                                            <div class="progress mt-2 mb-2" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end text-right">
                                        <span class="text-dark mb-0">72٪</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-9">
                                        <div class="progress-wrapper">
                                            <span class="progress-label text-dark font-weight-bold">یک صفحه</span>
                                            <div class="progress mt-2 mb-2" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end text-right">
                                        <span class="text-dark mb-0">89٪</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-9">
                                        <div class="progress-wrapper">
                                            <span class="progress-label text-dark font-weight-bold">الگوی پاسخگو</span>
                                            <div class="progress mt-2 mb-2" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 570%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end text-right">
                                        <span class="text-dark mb-0">70٪</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-9">
                                        <div class="progress-wrapper">
                                            <span class="progress-label text-dark font-weight-bold">الگوی موبایل</span>
                                            <div class="progress mt-2 mb-2" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end text-right">
                                        <span class="text-dark mb-0">55٪</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 height-card box-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="bg-transparent d-flex align-items-center justify-content-between mb-20">
                                    <div class="widgets-card-title">
                                        <h5 class="card-title mb-0">فایل های اخیر</h5>
                                    </div>
                                    <div class="dashboard-dropdown">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="dashboardDropdown50" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dashboardDropdown50" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                                                <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i> ویرایش کنید</a>
                                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                                <a class="dropdown-item" href="#"><i class="ti-eraser"></i> برداشتن</a>
                                                <a class="dropdown-item" href="#"><i class="ti-trash"></i> حذف</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Download File -->
                                <div class="widget-download-file d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center mr-3">
                                        <div class="download-file-icon mr-3">
                                            <img src="img/filemanager-img/1.png" alt="">
                                        </div>
                                        <div class="user-text-table">
                                            <h6 class="d-inline-block font-15 mb-0">مستندات</h6>
                                            <p class="mb-0">لورم اپیسوم</p>
                                        </div>
                                    </div>
                                    <a href="#" class="download-link badge badge-primary badge-pill">دانلود</a>
                                </div>

                                <!-- Single Download File -->
                                <div class="widget-download-file d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center mr-3">
                                        <div class="download-file-icon mr-3">
                                            <img src="img/filemanager-img/5.png" alt="">
                                        </div>
                                        <div class="user-text-table">
                                            <h6 class="d-inline-block font-15 mb-0">پهنای باند</h6>
                                            <p class="mb-0">لورم اپیسوم</p>
                                        </div>
                                    </div>
                                    <a href="#" class="download-link badge badge-info badge-pill">دانلود</a>
                                </div>

                                <!-- Single Download File -->
                                <div class="widget-download-file d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center mr-3">
                                        <div class="download-file-icon mr-3">
                                            <img src="img/filemanager-img/6.png" alt="">
                                        </div>
                                        <div class="user-text-table">
                                            <h6 class="d-inline-block font-15 mb-0">پروژه ها</h6>
                                            <p class="mb-0">لورم اپیسوم</p>
                                        </div>
                                    </div>
                                    <a href="#" class="download-link badge badge-success badge-pill">دانلود</a>
                                </div>

                                <!-- Single Download File -->
                                <div class="widget-download-file d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mr-3">
                                        <div class="download-file-icon mr-3">
                                            <img src="img/filemanager-img/7.png" alt="">
                                        </div>
                                        <div class="user-text-table">
                                            <h6 class="d-inline-block font-15 mb-0">دانلود</h6>
                                            <p class="mb-0">لورم اپیسوم</p>
                                        </div>
                                    </div>
                                    <a href="#" class="download-link badge badge-primary badge-pill">دانلود</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 height-card box-margin">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="card-title bg-transparent d-flex align-items-center justify-content-between mb-20">
                                    <div class="widgets-card-title">
                                        <h5 class="card-title mb-0">مشتریان جدید</h5>
                                    </div>
                                    <div class="dashboard-dropdown">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" type="button" id="dashboardDropdown53" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dashboardDropdown53" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 30px, 0px);">
                                                <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i> ویرایش کنید</a>
                                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                                <a class="dropdown-item" href="#"><i class="ti-eraser"></i> برداشتن</a>
                                                <a class="dropdown-item" href="#"><i class="ti-trash"></i> حذف</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-card-body">
                                    <div class="client-media-content d-flex align-items-center mb-4">
                                        <img class="client-thumb rounded-circle mr-3" src="img/member-img/contact-1.jpg" alt="">
                                        <div class="user--media-body">
                                            <h6 class="mb-0 text-dark font-15">سلام عزیزم</h6>
                                            <span class="font-13">hellodolly@example.com</span>
                                        </div>
                                    </div>
                                    <div class="client-media-content d-flex align-items-center mb-4">
                                        <img class="client-thumb rounded-circle mr-3" src="img/member-img/contact-2.jpg" alt="">
                                        <div class="user--media-body">
                                            <h6 class="mb-0 text-dark font-15">جان دو</h6>
                                            <span class="font-13">john_doe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="client-media-content d-flex align-items-center mb-4">
                                        <img class="client-thumb rounded-circle mr-3" src="img/member-img/contact-3.jpg" alt="">
                                        <div class="user--media-body">
                                            <h6 class="mb-0 text-dark font-15">میر جهان</h6>
                                            <span class="font-13">mirjahan@example.com</span>
                                        </div>
                                    </div>
                                    <div class="client-media-content d-flex align-items-center mb-4">
                                        <img class="client-thumb rounded-circle mr-3" src="img/member-img/contact-4.jpg" alt="">
                                        <div class="user--media-body">
                                            <h6 class="mb-0 text-dark font-15">دون سونیل</h6>
                                            <span class="font-13">dounil@example.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 box-margin">
                        <div class="card code-table">
                            <div class="card-body pb-0">
                                <h5 class="card-title">پروژه ما</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>عدد</th>
                                            <th>کد</th>
                                            <th>تاریخ</th>
                                            <th>بودجه</th>
                                            <th>وضعیت</th>
                                            <th class="text-right">رتبه بندی</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1">شماره 367</h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-1">8965482</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">1398/5/8</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">7523 تومان</h6>
                                            </td>
                                            <td><a href="#!" class="badge badge-success badge-pill">فعال</a></td>
                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1">شماره 366</h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-1">2366482</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">1398/5/8</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">2334 تومان</h6>
                                            </td>
                                            <td><a href="#!" class="badge badge-danger badge-pill">غیر فعال</a></td>
                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1"># 856</h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-1">8832638</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">1398/5/8</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">2346 تومان</h6>
                                            </td>
                                            <td><a href="#!" class="badge badge-success badge-pill">فعال</a></td>
                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1">شماره 326</h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-1">9632638</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">1398/5/8</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">1346 تومان</h6>
                                            </td>
                                            <td><a href="#!" class="badge badge-danger badge-pill">غیر فعال</a></td>
                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="mb-1"># 589</h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-1">3332538</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">1398/5/8</h6>
                                            </td>
                                            <td>
                                                <h6 class="font-14">3246 تومان</h6>
                                            </td>
                                            <td><a href="#!" class="badge badge-success badge-pill">فعال</a></td>
                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-warning"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                            </td>
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
    </div>
@endsection
