<!DOCTYPE html>
<html lang="en">

<head>
    @push('title')
        <title>NH Nepali Meaning | Profile</title>
    @endpush
    @include('layouts.adminheader')

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('layouts.adminnav')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('layouts.adminsidenav')

                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Profile</h5>
                                            <p class="m-b-0">Welcome to NH Nepali Dictionary</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('admin/dashboard') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">

                                        <div class="container">
                                            <div id="content" class="content p-0">
                                                <div class="profile-header">
                                                    <div class="profile-header-cover"></div>
                                                    <div class="profile-header-content">
                                                        <div class="profile-header-img mb-4">
                                                            <img src="{{ auth()->user()->getFirstMediaUrl('profile_image') }}"
                                                                class="mb-4" alt="" />
                                                        </div>

                                                        <div class="profile-header-info">
                                                            <h4 class="m-t-sm">{{ auth()->user()->name }}</h4>
                                                            <p class="m-b-sm">Software Developer</p>
                                                            {{-- <a href="#" class="btn btn-xs btn-primary mb-2">Edit
                                                                Profile</a> --}}
                                                        </div>
                                                    </div>



                                                    <ul class="profile-header-tab nav nav-tabs" role="tablist">
                                                        <li class="nav-item">
                                                          <a class="nav-link active" data-bs-toggle="tab" href="#home">Home</a>
                                                        </li>
                                                        {{-- <li class="nav-item">
                                                          <a class="nav-link" data-bs-toggle="tab" href="#menu1">Menu 1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                          <a class="nav-link" data-bs-toggle="tab" href="#menu2">Menu 2</a>
                                                        </li> --}}
                                                      </ul>



                                                </div>

                                                <div class="profile-container">
                                                    <div class="row row-space-20">
                                                        <div class="col-md-8">
                                                            <div class="tab-content">
                                                                <div id="home" class="container tab-pane active">
                                                                    <br>
                                                                    <h5>HOME</h5>
                                                                    <p>No data available</p>
                                                                </div>
                                                                {{-- <div id="menu1" class="container tab-pane fade"><br>
                                                                    <h3>Menu 1</h3>
                                                                    <p>Ut enim ad minim veniam, quis nostrud
                                                                        exercitation ullamco laboris nisi ut aliquip ex
                                                                        ea commodo consequat.</p>
                                                                </div>
                                                                <div id="menu2" class="container tab-pane fade"><br>
                                                                    <h3>Menu 2</h3>
                                                                    <p>Sed ut perspiciatis unde omnis iste natus error
                                                                        sit voluptatem accusantium doloremque
                                                                        laudantium, totam rem aperiam.</p>
                                                                </div> --}}
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 hidden-xs hidden-sm">
                                                            <ul class="profile-info-list">
                                                                <li class="title">PERSONAL INFORMATION</li>
                                                                <li>
                                                                    <div class="field">Occupation:</div>
                                                                    <div class="value">Backend Developer</div>
                                                                </li>
                                                                <li>
                                                                    <div class="field">Skills:</div>
                                                                    <div class="value">C++, PHP, HTML5, CSS, jQuery,
                                                                        MYSQL, Laravel, Java, Bootstrap,
                                                                        Python, .Net</div>
                                                                </li>
                                                                <li>
                                                                    <div class="field">Birth of Date:</div>
                                                                    <div class="value">2003-01-20</div>
                                                                </li>
                                                                <li>
                                                                    <div class="field">Country:</div>
                                                                    <div class="value">Nepal</div>
                                                                </li>
                                                                <li>
                                                                    <div class="field">Address:</div>
                                                                    <div class="value">
                                                                        <address class="m-b-0">
                                                                            New Baneshwor<br />
                                                                            Kathmandu<br />

                                                                        </address>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="field">Phone No.:</div>
                                                                    <div class="value">
                                                                        +977 9825915122
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                    <!-- Page-body end -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .profile-info-list {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .friend-list,
        .img-grid-list {
            margin: -1px;
            list-style-type: none;
        }

        .profile-info-list>li.title {
            font-size: 0.625rem;
            font-weight: 700;
            color: #8a8a8f;
            padding: 0 0 0.3125rem;
        }

        .profile-info-list>li+li.title {
            padding-top: 1.5625rem;
        }

        .profile-info-list>li {
            padding: 0.625rem 0;
        }

        .profile-info-list>li .field {
            font-weight: 700;
        }

        .profile-info-list>li .value {
            color: #666;
        }

        .profile-info-list>li.img-list a {
            display: inline-block;
        }

        .profile-info-list>li.img-list a img {
            max-width: 2.25rem;
            -webkit-border-radius: 2.5rem;
            -moz-border-radius: 2.5rem;
            border-radius: 2.5rem;
        }

        .coming-soon-cover img,
        .email-detail-attachment .email-attachment .document-file img,
        .email-sender-img img,
        .friend-list .friend-img img,
        .profile-header-img img {
            max-width: 100%;
        }

        .table.table-profile th {
            border: none;
            color: #000;
            padding-bottom: 0.3125rem;
            padding-top: 0;
        }

        .table.table-profile td {
            border-color: #c8c7cc;
        }

        .table.table-profile tbody+thead>tr>th {
            padding-top: 1.5625rem;
        }

        .table.table-profile .field {
            color: #666;
            font-weight: 600;
            width: 25%;
            text-align: right;
        }

        .table.table-profile .value {
            font-weight: 500;
        }

        .profile-header {
            position: relative;
            overflow: hidden;
        }

        .profile-header .profile-header-cover {
            background: url(https://bootdey.com/img/Content/bg1.jpg) center no-repeat;
            background-size: 100% auto;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .profile-header .profile-header-cover:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.25) 0, rgba(0, 0, 0, 0.85) 100%);
        }

        .profile-header .profile-header-content,
        .profile-header .profile-header-tab,
        .profile-header-img,
        body .fc-icon {
            position: relative;
        }

        .profile-header .profile-header-tab {
            background: #fff;
            list-style-type: none;
            margin: -1.25rem 0 0;
            padding: 0 0 0 8.75rem;
            border-bottom: 1px solid #c8c7cc;
            white-space: nowrap;
        }

        .profile-header .profile-header-tab>li {
            display: inline-block;
            margin: 0;
        }

        .profile-header .profile-header-tab>li>a {
            display: block;
            color: #000;
            line-height: 1.25rem;
            padding: 0.625rem 1.25rem;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.75rem;
            border: none;
        }

        .profile-header .profile-header-tab>li.active>a,
        .profile-header .profile-header-tab>li>a.active {
            color: #007aff;
        }

        .profile-header .profile-header-content:after,
        .profile-header .profile-header-content:before {
            content: "";
            display: table;
            clear: both;
        }

        .profile-header .profile-header-content {
            color: #fff;
            padding: 1.25rem;
        }

        body .fc th a,
        body .fc-ltr .fc-basic-view .fc-day-top .fc-day-number,
        body .fc-widget-header a {
            color: #000;
        }

        .profile-header-img {
            float: left;
            width: 7.5rem;
            height: 7.5rem;
            overflow: hidden;
            z-index: 10;
            margin: 0 1.25rem -1.25rem 0;
            padding: 0.1875rem;
            -webkit-border-radius: 0.25rem;
            -moz-border-radius: 0.25rem;
            border-radius: 0.25rem;
            background: #fff;
        }

        .profile-header-info h4 {
            font-weight: 500;
            margin-bottom: 0.3125rem;
        }

        .profile-container {
            padding: 1.5625rem;
        }

        @media (max-width: 967px) {
            .profile-header-img {
                width: 5.625rem;
                height: 5.625rem;
                margin: 0;
            }

            .profile-header-info {
                margin-left: 6.5625rem;
                padding-bottom: 0.9375rem;
            }

            .profile-header .profile-header-tab {
                padding-left: 0;
            }
        }

        @media (max-width: 767px) {
            .profile-header .profile-header-cover {
                background-position: top;
            }

            .profile-header-img {
                width: 3.75rem;
                height: 3.75rem;
                margin: 0;
            }

            .profile-header-info {
                margin-left: 4.6875rem;
                padding-bottom: 0.9375rem;
            }

            .profile-header-info h4 {
                margin: 0 0 0.3125rem;
            }

            .profile-header .profile-header-tab {
                white-space: nowrap;
                overflow: scroll;
                padding: 0;
            }

            .profile-container {
                padding: 0.9375rem 0.9375rem 3.6875rem;
            }

            .friend-list>li {
                float: none;
                width: auto;
            }
        }

        .profile-info-list {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .friend-list,
        .img-grid-list {
            margin: -1px;
            list-style-type: none;
        }

        .profile-info-list>li.title {
            font-size: 0.625rem;
            font-weight: 700;
            color: #8a8a8f;
            padding: 0 0 0.3125rem;
        }

        .profile-info-list>li+li.title {
            padding-top: 1.5625rem;
        }

        .profile-info-list>li {
            padding: 0.625rem 0;
        }

        .profile-info-list>li .field {
            font-weight: 700;
        }

        .profile-info-list>li .value {
            color: #666;
        }

        .profile-info-list>li.img-list a {
            display: inline-block;
        }

        .profile-info-list>li.img-list a img {
            max-width: 2.25rem;
            -webkit-border-radius: 2.5rem;
            -moz-border-radius: 2.5rem;
            border-radius: 2.5rem;
        }

        .coming-soon-cover img,
        .email-detail-attachment .email-attachment .document-file img,
        .email-sender-img img,
        .friend-list .friend-img img,
        .profile-header-img img {
            max-width: 100%;
        }

        .table.table-profile th {
            border: none;
            color: #000;
            padding-bottom: 0.3125rem;
            padding-top: 0;
        }

        .table.table-profile td {
            border-color: #c8c7cc;
        }

        .table.table-profile tbody+thead>tr>th {
            padding-top: 1.5625rem;
        }

        .table.table-profile .field {
            color: #666;
            font-weight: 600;
            width: 25%;
            text-align: right;
        }

        .table.table-profile .value {
            font-weight: 500;
        }

        .friend-list {
            padding: 0;
        }

        .friend-list>li {
            float: left;
            width: 50%;
        }

        .friend-list>li>a {
            display: block;
            text-decoration: none;
            color: #000;
            padding: 0.625rem;
            margin: 1px;
            background: #fff;
        }

        .friend-list>li>a:after,
        .friend-list>li>a:before {
            content: "";
            display: table;
            clear: both;
        }

        .friend-list .friend-img {
            float: left;
            width: 3rem;
            height: 3rem;
            overflow: hidden;
            background: #efeff4;
        }

        .friend-list .friend-info {
            margin-left: 3.625rem;
        }

        .friend-list .friend-info h4 {
            margin: 0.3125rem 0;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .friend-list .friend-info p {
            color: #666;
            margin: 0;
        }
    </style>

    @include('layouts.adminfooter')




</body>

</html>
