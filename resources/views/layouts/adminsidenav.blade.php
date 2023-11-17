<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="{{ auth()->user()->getFirstMediaUrl('profile_image') }}"
                    alt="User-Profile-Image">
                <div class="user-details">
                    <span id="more-details">{{ auth()->user()->name }}<i class="fa fa-caret-down"></i></span>
                </div>
            </div>
            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                        <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-15 p-b-0">
            <form class="form-material">
                <div class="form-group form-primary">
                    <input type="text" name="footer-email" class="form-control">
                    <span class="form-bar"></span>
                    <label class="float-label"><i class="fa fa-search m-r-10"></i>Search
                    </label>
                </div>
            </form>
        </div>
        <div class="pcoded-navigation-label">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ request()->is('admin/dashboard*') ? 'active' : null }}">
                <a href="{{ url('admin/dashboard') }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>


            </li>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu {{ request()->is('admin/meaning*') ? 'active' : null }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                        <span class="pcoded-mtext">Dictionary</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/meaning/upload') ? 'active' : null }}">
                            <a href="{{ url('admin/meaning/upload') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext">Upload Meaning</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="button.html" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext">My Meaning</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/meaning/management') ? 'active' : null }}">
                            <a href="{{ url('admin/meaning/management') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext">Meaning Mangement</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>


                    </ul>
                </li>

                {{-- ---------------- Data Analytics --------------- --}}
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu {{ request()->is('admin/visitor-log*') ? 'active' : null }}">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-pie-chart"></i><b>BC</b></span>
                            <span class="pcoded-mtext">Data Analytics</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="{{ request()->is('admin/visitor-log') ? 'active' : null }}">
                                <a href="{{ url('admin/visitor-log') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">Visitor Logs</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>



                        </ul>
                    </li>
                    {{-- ---------------- Data Analytics --------------- --}}

                    <li class="{{ request()->is('admin/contributors') ? 'active' : null }}">
                        <a href="{{ url('admin/contributors') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                            <span class="pcoded-mtext">Contributors</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/setting') ? 'active' : null }}">
                        <a href="{{ url('admin/setting') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-settings"></i><b>D</b></span>
                            <span class="pcoded-mtext">Setting</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{ request()->is('logout') ? 'active' : null }}">
                        <a href="{{ url('logout') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-close"></i><b>D</b></span>
                            <span class="pcoded-mtext">Logout</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>

            </ul>
        </ul>




    </div>
</nav>
