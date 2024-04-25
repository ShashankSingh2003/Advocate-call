@extends('layouts.parts.frontend.main')

@section('main-container')

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-standard navbar-expand-lg fixed-top navbar-dark"
            data-navbar-darken-on-scroll="data-navbar-darken-on-scroll">
            <div class="container">
                <a class="navbar-brand" href="../index.html"><span class="text-white dark__text-white"><img
                            src="assets/img/phone.gif" style="width: 7%;" alt=""><span style="width: 20%;">Advocate on
                            call</span></span></a>
                <style>
                .fix-footer {
                    position: fixed;
                    right: 10px;
                    top: 30px;
                }

                .fix-footer img {
                    width: 50px;
                }
                </style>
                <a class="btn btn-outline-secondary bg-secondary text-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2 fix-footer"
                    href="{{url('/follow-steps')}}">Book Appointment<span
                        data-fa-transform="shrink-6 down-1"></span></a>
                <!-- <button
            class="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarStandard"
            aria-controls="navbarStandard"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button> -->
                <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                    <ul class="navbar-nav ms-auto">

                    </ul>

                </div>
            </div>
        </nav>
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 pb-5 overflow-hidden" id="banner" data-bs-theme="light">
            <div class="bg-holder overlay" style="
            background-image: url(../assets/img/generic/bg-1.jpg);
            background-position: center bottom;
          "></div>
            <!-- begin of .container-->
            <div class="container-fluid">

                <div class="row flex-center pt-8 pb-lg-9 pb-xl-0">
                    <h1 style="text-align: center;margin-bottom:50px;" class="text-white fw-light">
                        Advocate on Call at Your Doorstep
                    </h1>
                    <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-start">

                        <img src="assets/img/call-advocate.png" style="width: 100%; display: block;margin: auto;"
                            alt="">


                    </div>
                    <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-start">

                        <p class="lead text-white opacity-75 p-3 rounded-4"
                            style="background:black;background-position: center top; text-align:justify;">
                            We provide legal consultancy at your doorsteps by deputing reputed advocate of particular
                            field. The consultancy shall be at your doorstep on demand of an advocate having several
                            years of experience.
                            This service is available throughout the country which includes metropolitian cities,
                            states, capitals, districts headquaters etc. We can also provide advocate for Iitigation in
                            court of law.
                        </p>
                        <a class="btn btn-outline-secondary bg-secondary text-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2"
                            href="{{url('/follow-steps')}}">Book Your Appointment<span class="fas fa-play ms-2"
                                data-fa-transform="shrink-6 down-1"></span></a>
                    </div>

                </div>

            </div>

            <!-- end of .container-->
        </section>

    </main>
</body>
@endsection