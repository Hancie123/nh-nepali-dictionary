<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reset Password</title>
    @include('layouts/header')


</head>

<body class="index-page">
    @include('layouts/nav')

    <header class="header-2">
        <div class="page-header min-vh-55 relative" style="background-image: url('./assets/img/curved.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Set New Password</h1>

                    </div>
                </div>
            </div>

            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
                    </g>
                </svg>
            </div>
        </div>
    </header>


    <section class="pt-5 pb-4" id="count-stats">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">

                    <form class="d-block mx-auto mt-3" style="max-width:300px;"
                        action="{{ url('/complete_registration') }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ request()->query('token') }}" class="form-control"
                            name="token" />
                        <p class="m-0">New Password</p>
                        <input type="password" class="form-control" name="password" />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                        <p class="m-0">New Password</p>
                        <input type="password" class="form-control" name="password_confirmation" />
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
<br>
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </form>



                </div>
            </div>
        </div>
    </section>





















    @include('layouts/footer')
</body>

</html>
