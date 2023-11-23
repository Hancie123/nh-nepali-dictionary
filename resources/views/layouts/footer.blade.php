<footer class="footer pt-5 mt-5">
    <hr class="horizontal dark mb-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <h6 class="text-gradient text-primary font-weight-bolder">{{$data['app_name']??null}}</h6>
                </div>
                <div>
                    <h6 class="mt-3 mb-2 opacity-8">Social</h6>
                    <ul class="d-flex flex-row ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.facebook.com/hanciephago720"
                                target="_blank">
                                <i class="fab fa-facebook text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://twitter.com/hancie_phago" target="_blank">
                                <i class="fab fa-twitter text-lg opacity-8"></i>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://github.com/Hancie123"
                                target="_blank">
                                <i class="fab fa-github text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1"
                                href="https://www.youtube.com/@hanciephago8401" target="_blank">
                                <i class="fab fa-youtube text-lg opacity-8"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-gradient text-primary text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('about-us')}}">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                target="_blank">
                                Tech Revo
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                target="_blank">
                                Tools
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-gradient text-primary text-sm">Social</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/hanciephago720" target="_blank">
                                Facebook
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/hancie720/" target="_blank">
                                Instagram
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/@hanciephago8401"
                                target="_blank">
                                Youtube
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-gradient text-primary text-sm">Help & Support</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact-us')}}">
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                target="_blank">
                                Knowledge Center
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                target="_blank">
                                Custom Development
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                Sponsorships
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                    <h6 class="text-gradient text-primary text-sm">Legal</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/terms-conditions')}}" >
                                Terms &amp; Conditions
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                Privacy Policy
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                Licenses (EULA)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center">
                    <p class="my-4 text-sm">
                        All rights reserved. Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> {{$data['app_name']??null}} by <a href="{{url('/')}}"
                            target="_blank" wire:navigate>Hancie Phago and Nitesh Hamal
                        </a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--   Core JS Files   -->
@livewireScripts
<script src="{{ url('assets/js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ url('assets/js/countup.min.js') }}"></script>
<script src="{{ url('assets/js/choices.min.js') }}"></script>
<script src="{{ url('assets/js/prism.min.js') }}"></script>
<script src="{{ url('assets/js/rellax.min.js') }}"></script>
<script src="{{ url('assets/js/tilt.min.js') }}"></script>
<script src="{{ url('assets/js/choices.min.js') }}"></script>
<script src="{{ url('assets/js/parallax.min.js') }}"></script>
<script src="{{ url('assets/js/soft-design-system.min.js') }}" type="text/javascript"></script>


<script type="text/javascript">
    if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('state2')) {
        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
            countUp1.start();
        } else {
            console.error(countUp1.error);
        }
    }
    if (document.getElementById('state3')) {
        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
            countUp2.start();
        } else {
            console.error(countUp2.error);
        };
    }
</script>
