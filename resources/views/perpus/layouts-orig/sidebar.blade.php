<!-- Sidebar Start -->
<style>
    .active-manage {
        border-bottom: 2px solid #007bff;
    }
</style>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="#" class="text-nowrap logo-img">
                <img src="{{ asset('assets/images/logos/dark-logo.svg') }}" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Admin</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}"
                        id="dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('teachers*') ? 'active' : '' }}" href="{{ url('/teachers') }}"
                        id="dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Teacher</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('students*') ? 'active' : '' }}"
                        href="{{ url('/students') }}">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Student</span>
                    </a>

                </li>
                <li class="sidebar-item">
                    <form action="#" method="post">
                        @csrf
                        <button type="submit" class="sidebar-link bg-white border-0">
                            <i class="ti ti-logout"></i>
                            Logout
                        </button>
                    </form>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
