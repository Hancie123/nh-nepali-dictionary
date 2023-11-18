<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <div class="mobile-search waves-effect waves-light">
                <div class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-prepend search-close"><i
                                    class="ti-close input-group-text"></i></span>
                            <input type="text" class="form-control" placeholder="Enter Keyword">
                            <span class="input-group-append search-btn"><i
                                    class="ti-search input-group-text"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="index.html">
                <img class="d-block mx-auto" src="{{ url('assets/img/white logo.png') }}" alt="logo.png" style="width:11rem;">
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                    </div>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()"
                        class="waves-effect waves-light">
                        <i class="ti-fullscreen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <a href="#!" class="waves-effect waves-light">
                        <i class="ti-bell"></i>
                        <span class="badge bg-c-red"></span>
                    </a>
                    <ul class="show-notification">
                        <li>
                            <h6>Notifications</h6>
                            <label class="label label-danger">New</label>
                        </li>
                        @forelse ($notification as $data)
                        <a href="{{url('admin/notification')}}">
                        <li class="waves-effect waves-light">
                            <div class="media">
                                <img class="d-flex align-self-center img-radius"
                                    src="{{ Avatar::create($data->title)->toBase64()}}" alt="Notification Icon">
                                <div class="media-body">
                                    <h5 class="notification-user">{{$data->title}}</h5>
                                    <p class="notification-msg">{{$data->message}}</p>
                                    <span class="notification-time">{{$data->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                        </li>
                    </a>
                        @empty
                        <li>No notification</li>

                        @endforelse



                    </ul>
                </li>
                <li class="user-profile header-notification">
                    <a href="#!" class="waves-effect waves-light">
                        <img src="{{ auth()->user()->getFirstMediaUrl('profile_image') }}"
                            class="img-radius" alt="User-Profile-Image">
                        <span>{{ auth()->user()->name }}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li class="waves-effect waves-light">
                            <a href="{{url('admin/setting')}}">
                                <i class="ti-settings"></i> Settings
                            </a>
                        </li>
                        <li class="waves-effect waves-light">
                            <a href="{{url('admin/profile')}}">
                                <i class="ti-user"></i> Profile
                            </a>
                        </li>
                        <li class="waves-effect waves-light">
                            <a href="{{url('logout')}}">
                                <i class="ti-layout-sidebar-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
