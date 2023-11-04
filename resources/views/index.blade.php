<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NH Nepali Dictionary</title>
    @include('layouts/header')
    <meta property="og:title" content="NH Nepali Dictionary">
    <meta property="og:description"
        content="NH Nepali Dictionary is an online web application that gives a meaning of English words to Nepali.">
    <meta property="og:image" content="{{ url('assets/img/logo.png') }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}">


</head>

<body class="index-page">
    @include('layouts/nav')

    <header class="header-2">
        <div class="page-header min-vh-55 relative" style="background-image: url('./assets/img/curved.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">NH Nepali Dictionary</h1>
                        <p class="lead text-white mt-3">Search English to Nepali Meaning<br />
                        </p>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">

                    @livewire('dictionary-component')

                </div>
            </div>
        </div>
    </section>








    <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ms-auto">
                    <h4 class="mb-1">Thank you for your support!</h4>
                    <p class="lead mb-0">We deliver the best web products</p>
                </div>
                <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Design%20System%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-design-system"
                        class="btn btn-info mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                        class="btn btn-primary mb-0 me-2" target="_blank"><i class="fab fa-facebook-square me-1"></i>
                        Share</a>


                    <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/soft-ui-design-system"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-pinterest me-1"></i> Pin it
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->





    @include('layouts/footer')
</body>

</html>
