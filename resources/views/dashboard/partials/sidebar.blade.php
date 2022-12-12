<nav>
    <ul class="sidebar-menu" data-widget="tree">
        <li class="{{  request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard.home') }}"><i class="zmdi zmdi-view-dashboard"></i><span>داشبورد</span></a></li>
        <li class="treeview @php if( (request()->is('dashboard/student')) || ( request()->is('dashboard/student/create'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت دانشجویان</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('student.index') }}" style="{{ request()->is('dashboard/student') ? 'color:black' : ''}}">نمایش دانشجویان</a></li>
                <li ><a href="{{ route('student.create') }}" style="{{ request()->is('dashboard/student/create') ? 'color:black' : ''}}">افزودن دانشجو</a></li>
            </ul>
        </li>
        <li class="treeview @php if( (request()->is('dashboard/teacher')) || ( request()->is('dashboard/teacher/create'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت اساتید</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('teacher.index') }}" style="{{ request()->is('dashboard/teacher') ? 'color:black' : ''}}">نمایش اساتید</a></li>
                <li ><a href="{{ route('teacher.create') }}" style="{{ request()->is('dashboard/teacher/create') ? 'color:black' : ''}}">افزودن استاد</a></li>
            </ul>
        </li>

        <li class="treeview @php if( (request()->is('dashboard/course')) || ( request()->is('dashboard/course/create'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت دروس</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('course.index') }}" style="{{ request()->is('dashboard/course') ? 'color:black' : ''}}">نمایش دروس</a></li>
                <li ><a href="{{ route('course.create') }}" style="{{ request()->is('dashboard/course/create') ? 'color:black' : ''}}">افزودن درس</a></li>
            </ul>
        </li>
        <li class="treeview @php if( (request()->is('dashboard/addUnit')) || ( request()->is('dashboard/addUnit/create')) || ( request()->is('dashboard/select-college'))){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>مدیریت واحد های دانشکده</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('addUnit.index') }}" style="{{ request()->is('dashboard/addUnit') ? 'color:black' : ''}}">نمایش واحد ها</a></li>
                <li ><a href="{{ route('select.college.unit') }}" style="{{ request()->is('dashboard/addUnit/create') || ( request()->is('dashboard/select-college')) ? 'color:black' : ''}}">افزودن واحد به دانشکده</a></li>
            </ul>
        </li>
        <li><a href="{{ route('college.index') }}" class="@php if(request()->is('college.index') || request()->is('college.edit')){ echo 'active';} @endphp " style="{{ request()->is('dashboard/college') ? 'color:black' : ''}}"><i class="zmdi zmdi-store"></i><span>دانشکده ها</span></a></li>
        <li><a href="{{ route('major.index') }}" class="@php if(request()->is('major.index') || request()->is('major.edit')){ echo 'active';} @endphp " style="{{ request()->is('dashboard/major') ? 'color:black' : ''}}"><i class="zmdi zmdi-graduation-cap"></i><span>رشته ها</span></a></li>

        <li><a href="{{ route('time.index') }}" class="@php if(request()->is('time.index') || request()->is('time.edit')){ echo 'active';} @endphp  " style="{{ request()->is('dashboard/time') ? 'color:black' : ''}}"><i class="zmdi zmdi-graduation-cap"></i><span>زمانبندی</span></a></li>

        <li><a href="{{ route('class.index') }}" class="@php if(request()->is('class.index') || request()->is('class.edit')){ echo 'active';} @endphp " style="{{ request()->is('dashboard/class') ? 'color:black' : ''}}"><i class="zmdi zmdi-graduation-cap"></i><span>مدیریت کلاس ها</span></a></li>

{{--        select unit  --}}
        <li><a href="{{ route('selectCollege') }}" class="@php if(request()->is('selectUnit.index') || request()->is('selectUnit.selectCollege')){ echo 'active';} @endphp " style="{{ request()->is('dashboard/selectUnit') ? 'color:black' : ''}}"><i class="zmdi zmdi-graduation-cap"></i><span>انتخاب واحد</span></a></li>

{{--         manage permission --}}
        <li class="treeview @php if( request()->is('dashboard/permission') || request()->is('dashboard/role') ){echo  'active';} @endphp">
            <a href="javascript:void(0)"><i class="zmdi zmdi-apps "></i> <span>سطوح دسترسی</span> <i class="fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li ><a href="{{ route('permission.index') }}" style="{{ request()->is('dashboard/permission') ? 'color:black' : ''}}">مدیریت دسترسی ها</a></li>
                <li ><a href="{{ route('role.index') }}" style="{{ request()->is('dashboard/role') ? 'color:black' : ''}}">مدیریت نقش ها</a></li>

            </ul>
        </li>
{{--         end  permission--}}


            <li><a href="{{ route('logout') }}"  class="text-danger"   ><i class="zmdi zmdi-graduation-cap"></i><span>خروج</span></a></li>


    </ul>
        </li>
    </ul>
</nav>
