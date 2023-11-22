<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NH Nepali Dictionary | Popular Words</title>
    @include('layouts/header')


</head>

<body class="index-page">
    @include('layouts/nav')

    <header class="header-2">
        <div class="page-header min-vh-55 relative" style="background-image: url('./assets/img/curved.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Popular Words</h1>

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

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#today">Todays' Words</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#week">Week Words</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#month">Month Words</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="today">
                            <div class="list-group d-block mx-auto mt-4" style="max-width: 50%">
                                <p class="text-dark text-center">Today's searched words</p>
                                @forelse ($todayPopular as $dictionary)
                                    <a href="#"
                                        class="list-group-item list-group-item-action">{{ $dictionary['Words'] }}</a>
                                @empty
                                    <a href="#" class="list-group-item list-group-item-action">No searched word today</a>
                                @endforelse

                            </div>
                        </div>
                        <div class="tab-pane container fade" id="week">
                            <div class="list-group d-block mx-auto mt-4" style="max-width: 50%">
                                <p class="text-dark text-center">This week most searched words</p>
                                @forelse ($pouplarThisWeek as $dictionary)
                                    <a href="#"
                                        class="list-group-item list-group-item-action">{{ $dictionary['Words'] }}</a>
                                @empty
                                    <a href="#" class="list-group-item list-group-item-action">No searched word today</a>
                                @endforelse

                            </div>


                        </div>
                        <div class="tab-pane container fade" id="month">
                            <div class="list-group d-block mx-auto mt-4" style="max-width: 50%">
                                <p class="text-dark text-center">This month most searched words</p>
                                @forelse ($popularThisMonth as $dictionary)
                                    <a href="#"
                                        class="list-group-item list-group-item-action">{{ $dictionary['Words'] }}</a>
                                @empty
                                    <a href="#" class="list-group-item list-group-item-action">No searched word today</a>
                                @endforelse

                            </div>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </section>





















    @include('layouts/footer')
</body>

</html>