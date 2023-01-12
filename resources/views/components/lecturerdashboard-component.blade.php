
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active open"><a href="{{route('dashboard')}}"><i
                    class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
        <li><a href=""><i class="zmdi zmdi-calendar-check"></i><span>Event Management</span>
            </a></li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-account"></i><span>My Students</span> </a>
            <ul class="ml-menu">
                <li><a href="{{ route('all.lecturers') }}">All Lecturers</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-accounts-outline"></i><span>Results</span> </a>
            <ul class="ml-menu">
                <li><a href="{{ route('all.students') }}">Upload Results</a></li>
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
    </ul>
