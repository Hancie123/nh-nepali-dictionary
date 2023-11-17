<!DOCTYPE html>
<html lang="en">

<head>
    @push('title')
        <title>NH Nepali Meaning | Notifications</title>
    @endpush
    @include('layouts.adminheader')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css" />

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
                                            <h5 class="m-b-10">Notifications</h5>
                                            <p class="m-b-0">Welcome to NH Nepali Dictionary</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('admin/dashboard') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ url('admin/notification') }}">Notifications</a>
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


                                        <div class="container light-style flex-grow-1 container-py-4">
                                            <div class="card overflow-hidden">
                                                <div class="row g-0 row-bordered row-border-light">
                                                    <div class="col-md-3 pt-0">
                                                        <div class="list-group list-group-flush account-settings-links">
                                                            @foreach ($allNotifications as $index => $data)
                                                                <a class="list-group-item list-group-item-action{{ $index === 0 ? ' active' : '' }}"
                                                                    href="#{{ $data->category }}">
                                                                    {{ $data->category }}
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="tab-content">
                                                            @foreach ($allNotifications as $index => $data)
                                                                <div class="tab-pane fade{{ $index === 0 ? ' show active' : '' }}"
                                                                    id="{{ $data->category }}">
                                                                    <ul>
                                                                        <div class="card">
                                                                            <div class="card-body">


                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-lg-12">
                                                                                        <ul class="verti-timeline list-unstyled"
                                                                                            dir="ltr">
                                                                                            @foreach ($categoryNotifications[$index] as $notification)
                                                                                                <li class="event-list">
                                                                                                    <div
                                                                                                        class="timeline-icon">
                                                                                                        <i
                                                                                                            class="mdi mdi-adjust bg-success"></i>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="event-content p-4">
                                                                                                        <h5
                                                                                                            class="mt-0 mb-1 font-18">
                                                                                                            {{ $notification->title }}
                                                                                                        </h5>
                                                                                                        <div
                                                                                                            class="text-muted">
                                                                                                            <p
                                                                                                                class="mb-1">
                                                                                                                {{ $notification->message }}
                                                                                                            </p>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="event-date bg-primary">
                                                                                                        <p
                                                                                                            class="m-0">
                                                                                                            {{ $notification->created_at->diffForHumans() }}
                                                                                                        </p>

                                                                                                    </div>
                                                                                                </li>






                                                                                                <!-- end card -->
                                                                                            @endforeach
                                                                                        </ul>

                                                                                    </div>
                                                                                </div>
                                                                                <!-- end row -->
                                                                            </div>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            @endforeach
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all tabs and content panes
            var tabs = document.querySelectorAll('.account-settings-links a');
            var tabContents = document.querySelectorAll('.tab-content .tab-pane');

            // Add click event listener to each tab
            tabs.forEach(function(tab, index) {
                tab.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Remove active class from all tabs and content panes
                    tabs.forEach(function(t) {
                        t.classList.remove('active');
                    });

                    tabContents.forEach(function(content) {
                        content.classList.remove('show', 'active');
                    });

                    // Add active class to the clicked tab and corresponding content pane
                    tab.classList.add('active');
                    tabContents[index].classList.add('show', 'active');
                });
            });
        });
    </script>


    <style>
        .verti-timeline {
            border-left: 3px dashed #e9ecef;
            margin: 0 10px;
        }

        .verti-timeline .event-list {
            position: relative;
            padding: 40px 15px 40px;
            border-top: 3px solid #e9ecef;
        }

        .verti-timeline .event-list .event-date {
            position: absolute;
            right: 0;
            top: -2px;
            padding: 12px;
            color: #fff;
            border-radius: 0 0 7px 7px;
            text-align: center;
        }

        .verti-timeline .event-list .event-content {
            position: relative;
            border: 2px solid #e9ecef;
            border-radius: 7px;
            text-align: center;
        }

        .verti-timeline .event-list .event-content::before {
            content: "";
            position: absolute;
            height: 40px;
            width: 75%;
            top: -42px;
            left: 0;
            right: 0;
            margin: 0 auto;
            border-left: 12px double #e9ecef;
            border-right: 12px double #e9ecef;
        }

        .verti-timeline .event-list .timeline-icon {
            position: absolute;
            left: -14px;
            top: -10px;
        }

        .verti-timeline .event-list .timeline-icon i {
            display: inline-block;
            width: 23px;
            height: 23px;
            line-height: 23px;
            font-size: 20px;
            border-radius: 50%;
            text-align: center;
            color: #fff;
        }

        .verti-timeline .event-list:last-child {
            padding-bottom: 0;
        }

        @media (min-width: 769px) {
            .verti-timeline {
                margin: 0 60px;
            }

            .verti-timeline .event-list {
                padding: 40px 90px 60px 40px;
            }
        }

        @media (max-width: 576px) {
            .verti-timeline .event-list .event-date {
                right: -20px;
            }
        }



        .ui-w-80 {
            width: 80px !important;
            height: auto;
        }

        .btn-default {
            border-color: rgba(24, 28, 33, 0.1);
            background: rgba(0, 0, 0, 0);
            color: #4E5155;
        }

        label.btn {
            margin-bottom: 0;
        }

        .btn-outline-primary {
            border-color: #26B4FF;
            background: transparent;
            color: #26B4FF;
        }

        .btn {
            cursor: pointer;
        }

        .text-light {
            color: #babbbc !important;
        }

        .btn-facebook {
            border-color: rgba(0, 0, 0, 0);
            background: #3B5998;
            color: #fff;
        }

        .btn-instagram {
            border-color: rgba(0, 0, 0, 0);
            background: #000;
            color: #fff;
        }

        .card {
            background-clip: padding-box;
            box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
        }

        .row-bordered {
            overflow: hidden;
        }

        .account-settings-fileinput {
            position: absolute;
            visibility: hidden;
            width: 1px;
            height: 1px;
            opacity: 0;
        }

        .account-settings-links .list-group-item.active {
            font-weight: bold !important;
        }

        html:not(.dark-style) .account-settings-links .list-group-item.active {
            background: transparent !important;
        }

        .account-settings-multiselect~.select2-container {
            width: 100% !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .material-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .material-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .dark-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(255, 255, 255, 0.03) !important;
        }

        .dark-style .account-settings-links .list-group-item.active {
            color: #fff !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4E5155 !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }
    </style>

    @include('layouts.adminfooter')




</body>

</html>
