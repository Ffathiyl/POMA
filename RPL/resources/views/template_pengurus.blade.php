    

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <!-- Dashboard Nav -->
            <li class="nav-heading">Dashboard</li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(strtolower($title), 'dashboard') ? '' : 'collapsed' }}" href="{{ route('Dashboard.dashboard_pengurus') }}">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <!-- Master Nav -->
            <li class="nav-heading">Master</li>

            <li class="nav-item">
                <a class="nav-link {{ str_contains(strtolower($title), 'kuis') ? '' : 'collapsed' }}" href="{{ route('penguruses.kuisioner') }}">
                    <i class="bi bi-people-fill"></i><span style="color :#000000">Kuisioner</span><i></i>
                </a>
            </li><!-- End Admin Nav -->

            <li class="nav-item">
                <a class="nav-link {{ str_contains(strtolower($title), 'psiko') ? '' : 'collapsed' }}" href="{{ route('penguruses.psikologi') }}">
                    <i class="bi bi-people-fill"></i><span style="color :#000000">Psikologi</span><i></i>
                </a>
            </li><!-- End Pengurus Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span style="color :#000000">Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logins.logoutPengurus') }}">
                    <i class="bi bi-box-arrow-in-left"></i>
                    <span style="color :#000000">Logout</span>
                </a>
            </li><!-- End Blank Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

            <script>
                var title = document.title;
                console.log(title);
            </script>