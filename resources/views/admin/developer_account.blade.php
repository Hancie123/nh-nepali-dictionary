<!DOCTYPE html>
<html lang="en">

<head>
    @push('title')
        <title>Developer Account Management</title>
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
                                            <h5 class="m-b-10">Developer Account Management</h5>
                                            <p class="m-b-0">Welcome to NH Nepali Dictionary</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('admin/dashboard') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ url('admin/users/developers') }}">Developer Account</a>
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
                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#myModal">
                                                Create Account
                                            </button>

                                            <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Developer Account</h4>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form action="{{url('admin/users/developers')}}" method="post">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="name"
                                                                            class="form-label">Name:</label>
                                                                        <input type="name" class="form-control"
                                                                            id="name"
                                                                            placeholder="Enter name" name="name">
                                                                        @error('name')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="email"
                                                                            class="form-label">Email:</label>
                                                                        <input type="email" class="form-control"
                                                                            id="email"
                                                                            placeholder="Enter email" name="email">
                                                                        @error('email')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                        @enderror

                                                                    </div>

                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary mt-3">Create Account</button>

                                                            </form>

                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                            <table class="table table-hover table-stripedtext-light" id="table_data">
                                                <thead class="bg-primary">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
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
        $(document).ready(function() {
            $('#table_data').DataTable({
                "ajax": "/admin/users/developers/ajax",
                "processing": true,

                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "email"
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-danger btn-sm" onclick="deleteAccess(' +
                                row.id + ')">Delete</button>';
                        }
                    }


                ],
                "dom": 'Bfrtip',
                "buttons": [{
                        "extend": 'copyHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'excelHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'csvHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'pdfHtml5',
                        "title": 'Data'
                    },
                    {
                        "extend": 'print',
                        "title": 'Print'
                    }
                ]
            });
        });

        function deleteAccess(user_id) {
            if (confirm('Are you sure you want to delete this user account?')) {
                $.ajax({
                    url: '/admin/users/developers/delete/' + user_id,
                    type: 'GET',
                    data: {
                        _method: 'DELETE'
                    },
                    success: function(response) {
                        if (response.status === 'success') {

                            $('#table_data').DataTable().ajax.reload();
                        } else {
                            
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        }

    </script>



    @include('layouts.adminfooter')




</body>

</html>
