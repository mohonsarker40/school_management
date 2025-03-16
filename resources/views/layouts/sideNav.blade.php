<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        @if(Auth::user()->user_type == 1)
            <li class="nav-item">
                <a class="nav-link " href="{{ url('admin/dashboard') }}">x
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Admin</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('admin/admin/list') }}">
                            <i class="bi bi-circle"></i><span>List</span>
                        </a>
                    </li>

                </ul>
            </li>

        @elseif(Auth::user()->user_type == 2)
            <li class="nav-item">
                <a class="nav-link " href="{{ url('teacher/dashboard') }}">x
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

        @elseif(Auth::user()->user_type == 3)
            <li class="nav-item">
                <a class="nav-link " href="{{ url('student/dashboard') }}">x
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @elseif(Auth::user()->user_type == 4)
            <li class="nav-item">
                <a class="nav-link " href="{{ url('parent/dashboard') }}">x
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                <i class="bi bi-square-fill"></i><span>Academics</span><i class="bi bi-chevron-down
                    ms-auto"></i>
            </a>
            <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/admin/list') }}">
                        <i class="bi bi-circle"></i><span>Classes</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>logout</span>
            </a>
        </li>


    </ul>

</aside><!-- End Sidebar-->