<div>

    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active open"><a href="{{route('dashboard')}}"><i
                    class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
        <li><a href=""><i class="zmdi zmdi-calendar-check"></i><span>Event Management</span>
            </a></li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-account"></i><span>Lecturers</span> </a>
            <ul class="ml-menu">
                <li><a href="{{ route('all.lecturers') }}">All Lecturers</a></li>
                <li><a href="{{ route('add.lecturers') }}">Add Lecturers</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-accounts-outline"></i><span>Students</span> </a>
            <ul class="ml-menu">
                <li><a href="{{ route('science.students') }}">Science Students</a></li>
                <li><a href="{{ route('art.students') }}">Art Students</a></li>
                <li><a href="{{ route('add.students') }}">Add Student</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-graduation-cap"></i><span>Courses</span> </a>
            <ul class="ml-menu">
                <li><a href="{{ route('all.courses') }}">All Courses</a></li>
                <li><a href="{{ route('add.courses') }}">Add Courses</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-book"></i><span>Faculties</span> </a>
            <ul class="ml-menu">
                <li><a href="{{ route('all.faculties') }}">All Faculties</a></li>
                <li><a href="{{ route('add.faculties') }}">Add Faculty</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-city-alt"></i><span>Departments</span> </a>
            <ul class="ml-menu">
                <li><a href="{{ route('all.departments') }}">All Departments</a></li>
                <li><a href="{{ route('add.department') }}">Add Departments</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-mood"></i><span>Staffs</span> </a>
            <ul class="ml-menu">
                <li><a href="">All Staffs</a></li>
                <li><a href="">Add Staffs</a></li>
                <li><a href="">Staffs Profile</a></li>
            </ul>
        </li>
        <li><a href=""><i class="zmdi zmdi-pin"></i><span>School Centres</span></a></li>
        <li><a href=""><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
    </ul>
</div>
