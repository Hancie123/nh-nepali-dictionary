<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NH Nepali Dictionary</title>
    @include('layouts/header')


</head>

<body class="index-page">
    @include('layouts/nav')

    <header class="header-2">
        <div class="page-header min-vh-55 relative" style="background-image: url('./assets/img/curved.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Contributors</h1>

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
                <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">


                    <section class="text-gray-600 body-font">

                        <div class="container py-5">
                            <div class="row justify-content-center mb-5">
                                <div class="col-12 text-center">
                                    <h1 class="h3 font-weight-bold">Contributors</h1>
                                    <p class="col-lg-6 mx-auto">NH Nepali Dictionary owes its richness and accuracy to
                                        the dedicated contributions of a diverse group of contributors. Our heartfelt
                                        appreciation goes to the individuals who have invested their time, knowledge,
                                        and passion into making this dictionary a valuable resource for language
                                        enthusiasts.</p>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($data as $datas)
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="h-100 border p-4 rounded-lg text-center rounded">
                                            <img alt="team"
                                                class="w-25 h-35 bg-gray-100 rounded-circle mx-auto mb-3"
                                                src="{{ $datas->getFirstMediaUrl('profile_image') }}">
                                            <h2 class="h5 font-weight-medium">{{ $datas->name }}</h2>
                                            <p class="text-gray-500"
                                                style="white-space: normal; word-wrap: break-word;">{{ $datas->email }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </section>



                </div>
            </div>
        </div>
    </section>



    @include('layouts/footer')
</body>

</html>
