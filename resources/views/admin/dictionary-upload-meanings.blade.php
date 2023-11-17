<!DOCTYPE html>
<html lang="en">

<head>
    @push('title')
        <title>NH Nepali Meaning | Upload Meaning</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                                            <h5 class="m-b-10">Meaning/Upload</h5>
                                            <p class="m-b-0">Welcome to NH Nepali Dictionary</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('admin/dashboard') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a
                                                    href="{{ url('admin/meaning/upload') }}">Upload</a>
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
                                            <form action="" method="POST">
                                                @csrf
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="field1">Words</label>
                                                            <input type="text" id="field1" name="word"
                                                                class="form-control form-control-primary rounded">
                                                            @error('word')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <label for="field1">English Meaning</label>
                                                    <textarea id="english_meaning" class="form-control form-control-primary rounded" name="english_meaning" style="height: 100px;"></textarea>
                                                    @error('english_meaning')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror

                                                    <br>
                                                    <label for="field2">Nepali Meaning</label>
                                                    <textarea id="nepali_meaning" class="form-control form-control-primary rounded" name="nepali_meaning" style="height: 100px;"></textarea>
                                                    @error('nepali_meaning')
                                                        <span class="text-danger"> {{ $message }}</span>
                                                    @enderror

                                                </div>


                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-primary mt-4">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
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


    @include('layouts.adminfooter')
</body>

</html>
