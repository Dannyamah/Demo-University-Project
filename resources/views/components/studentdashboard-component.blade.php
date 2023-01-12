
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active open"><a href="{{route('dashboard')}}"><i
                    class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
        <li><a href=""><i class="zmdi zmdi-calendar-check"></i><span>Event Management</span>
            </a></li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-account"></i><span>Courses</span> </a>
            <ul class="ml-menu">
                <li><a href="{{ route('all.lecturers') }}">All Courses</a></li>
            </ul>
        </li>
        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-accounts-outline"></i><span>Results</span> </a>
                </li>
                <ul class="ml-menu">
                    <li><a href="{{ route('science.students') }}">1st Semester</a></li>
                </ul>
                <ul class="ml-menu">
                    <li><a href="{{ route('science.students') }}">2nd Semester</a></li>
                </ul>
                <ul class="ml-menu">
                    <li><a href="{{ route('science.students') }}">3rd Semester</a></li>
                </ul>

        <li><a href="javascript:void(0);" class="menu-toggle"><i
                    class="zmdi zmdi-book"></i><span>Fees</span> </a>
            <ul class="ml-menu">
                <li><a href="{{ route('all.faculties') }}">All Faculties</a></li>
                <li><a href="{{ route('add.faculties') }}">Add Faculty</a></li>
            </ul>
        </li>
    </ul>

