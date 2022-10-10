<nav>
    <ul class="sidebar-menu" data-widget="tree">
{{--        <li class="{{  request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard.home') }}"><i class="zmdi zmdi-view-dashboard"></i><span>داشبورد</span></a></li>--}}
{{--        <li class="treeview @php if( (request()->is('dashboard/users')) || ( request()->is('dashboard/users/create'))){echo  'active';} @endphp">--}}
{{--            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت کاربران</span> <i class="fa fa-angle-left"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li ><a href="{{ route('users.index') }}" style="{{ request()->is('dashboard/users') ? 'color:black' : ''}}">نمایش کاربران</a></li>--}}
{{--                <li ><a href="{{ route('users.create') }}" style="{{ request()->is('dashboard/users/create') ? 'color:black' : ''}}">اضافه کردن کاربر</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview @php if( (request()->is('dashboard/products')) || ( request()->is('dashboard/products/create'))){echo  'active';} @endphp">--}}
{{--            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت محصولات</span> <i class="fa fa-angle-left"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li ><a href="{{ route('products.index') }}" style="{{ request()->is('dashboard/products') ? 'color:black' : ''}}">نمایش محصولات </a></li>--}}
{{--                <li ><a href="{{ route('products.create') }}" style="{{ request()->is('dashboard/products/create') ? 'color:black' : ''}}">اضافه کردن محصول</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview @php if( (request()->is('order/index')) ){echo  'active';} @endphp">--}}
{{--            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت سفارشات</span> <i class="fa fa-angle-left"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li ><a href="{{ route('order.index') }}" style="{{ request()->is('order/index') ? 'color:black' : ''}}">نمایش سفارشات </a></li>--}}
{{--                --}}{{--                <li ><a href="{{ route('order.show') }}" style="{{ request()->is('order/show') ? 'color:black' : ''}}">اضافه کردن محصول</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview @php if( (request()->is('dashboard/comment')) || ( request()->is('dashboard/comment/show'))){echo  'active';} @endphp">--}}
{{--            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت نظرات</span> <i class="fa fa-angle-left"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li ><a href="{{ route('comment.index') }}" style="{{ request()->is('dashboard/comment') ? 'color:black' : ''}}">نمایش نظرات </a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview @php if( (request()->is('dashboard/category')) || ( request()->is('dashboard/category/show'))){echo  'active';} @endphp">--}}
{{--            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت دسته بندی ها</span> <i class="fa fa-angle-left"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li ><a href="{{ route('category.index') }}" style="{{ request()->is('dashboard/category') ? 'color:black' : ''}}">نمایش دسته بندی ها        </a></li>--}}
{{--                <li ><a href="{{ route('category.create') }}" style="{{ request()->is('dashboard/category/create') ? 'color:black' : ''}}">اضافه کردن دسته بندی جدید</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="treeview @php if( (request()->is('dashboard/attribute')) || ( request()->is('dashboard/attribute/show'))){echo  'active';} @endphp">--}}
{{--            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت ویژگی ها</span> <i class="fa fa-angle-left"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li ><a href="{{ route('attribute.index') }}" style="{{ request()->is('dashboard/attribute') ? 'color:black' : ''}}">نمایش ویژگی ها </a></li>--}}
{{--                <li ><a href="{{ route('attribute.create') }}" style="{{ request()->is('dashboard/attribute/create') ? 'color:black' : ''}}">اضافه کردن ویژگی جدید</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i> <span>برنامه ها</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="calendar.html">تقویم</a></li>
                <li><a href="chat-box.html">گپ</a></li>
                <li><a href="project-list.html">لیست پروژه</a></li>
                <li><a href="project-details.html">جزئیات پروژه</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-email"></i> <span>پست الکترونیک</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="mail-inbox.html">صندوق ورودی</a></li>
                <li><a href="mail-view.html">مشاهده ایمیل</a></li>
                <li><a href="compose-mail.html">ارسال نامه ایمیل</a></li>
            </ul>
        </li>
        <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i><span>ابزارک ها</span></a></li>
        <li><a href="gallery.html"><i class="zmdi zmdi-collection-image-o"></i><span>گالری</span></a></li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-codepen"></i><span>پیشرفته</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="blank.html">صفحه خالی</a></li>
                <li><a href="light-box-gallery.html">نمونه گالری  </a></li>
                <li><a href="modals.html">مودال ها</a></li>
                <li><a href="notification.html">اطلاع رسانی</a></li>
                <li><a href="profile.html">مشخصات</a></li>
                <li><a href="ribbons.html">روبان</a></li>
                <li><a href="range-slider.html">محدوده کشویی</a></li>
                <li><a href="sweet-alert.html"> پنجره‌های زیبا</a></li>
                <li><a href="todo-list.html">لیست  انجام کار</a></li>
                <li><a href="nestable-list.html">لیست قابل تعویض</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-texture"></i><span>صفحات عمومی</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="timeline.html">جدول زمانی</a></li>
                <li><a href="slider.html">اسلایدر</a></li>
                <li><a href="contact.html">تماس باما</a></li>
                <li><a href="session-timeout.html">پایان جلسه</a></li>
                <li><a href="404.html">404</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>پایه ای</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="alert.html">هشدار</a></li>
                <li><a href="avatar.html">آواتار</a></li>
                <li><a href="buttons.html">دکمه</a></li>
                <li><a href="card.html">کارت</a></li>
                <li><a href="dropdown.html">رها کردن</a></li>
                <li><a href="general.html">عمومی</a></li>
                <li><a href="progressbar.html">نوار پیشرفت</a></li>
                <li><a href="preloader.html">بارگذاری چندگانه</a></li>
                <li><a href="tab.html">برگه</a></li>
                <li><a href="typography.html">تایپوگرافی</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-chart"></i><span>نمودار</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="morris-chart.html">نمودار موریس</a></li>
                <li><a href="apex-chart.html">نمودار آپکس</a></li>
                <li><a href="chartist.html"> نمودار</a></li>
                <li><a href="chart-js.html">نمودار Js</a></li>
                <li><a href="flot-chart.html">نمودار </a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-android-alt"></i><span>صفحه سفارشی</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="login.html">ورود به سیستم</a></li>
                <li><a href="register.html">ثبت نام</a></li>
                <li><a href="forget-password.html">فراموشی رمز عبور</a></li>
                <li><a href="lock-screen.html">صفحه قفل</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-receipt"></i><span>  فرم ها</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="basic-form.html">فرم اصلی</a></li>
                <li><a href="advanced-elements.html">عناصر</a></li>
                <li><a href="form-validation.html">اعتبار سنجی</a></li>
                <li><a href="form-wizard.html">فرم جادویی</a></li>
                <li><a href="form-input-mask.html"> قالب بندی</a></li>
                <li><a href="editors.html">ویرایشگر</a></li>
                <li><a href="rating.html">رتبه بندی</a></li>
                <li><a href="file-upload.html">بارگذاری پرونده</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-grid"></i><span>جداول</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="basic-table.html">جدول </a></li>
                <li><a href="filter-table.html">جدول فیلتر</a></li>
                <li><a href="data-table.html">جدول داده ها</a></li>
                <li><a href="edit-table.html">ویرایش جدول</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-cart"></i><span> فروشگاه</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="product.html">محصولات</a></li>
                <li><a href="product-details.html">جزئیات محصولات</a></li>
                <li><a href="order.html">سفارشات</a></li>
                <li><a href="price-table.html">جدول قیمت</a></li>
                <li><a href="cart.html">سبد خرید</a></li>
                <li><a href="checkout.html">پرداخت</a></li>
                <li><a href="invoice.html">صورتحساب</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-chart-donut"></i><span>آیکون ها</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="matarial-icons.html"> آیکون  متریال</a></li>
                <li><a href="font-awesome.html"> آیکون Awesome</a></li>
                <li><a href="pe-7-stroke.html">نمونه آیکون</a></li>
                <li><a href="themify-icons.html">آیکون ti </a></li>
                <li><a href="elegant-icons.html"> نمونه آیکون</a></li>
                <li><a href="et-line-icons.html">آیکون  خطی</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-google-maps"></i><span>نقشه ها</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="vector-map.html">نمونه نقشه </a></li>
                <li><a href="google-map.html">نقشه گوگل</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="javascript:void(0)"><i class="zmdi zmdi-storage"></i> <span>چند سطحی</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">مرحله اول</a></li>
                <li class="treeview">

                    <ul class="treeview-menu">
                        <li><a href="#">سطح دو</a></li>
                        <li><a href="#">سطح دو</a></li>
                        <li><a href="#">سطح دو</a></li>
                    </ul>
                </li>
                <li><a href="#">مرحله اول</a></li>
            </ul>
        </li>
    </ul>
</nav>
