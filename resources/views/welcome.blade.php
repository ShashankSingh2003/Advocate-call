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
                <a class="navbar-brand" href="/"><span class="text-white dark__text-white"><img
                            src="assets/img/phone.gif" style="width: 5%;" alt=""><span style="width: 10%;font-size:20px;">Advocate on
                            call</span></span></a>
                            
                             <a class="btn btn-outline-secondary bg-secondary text-light border-2 rounded-pill btn-lg fs-0 hide_mobile"
                    href="{{ url('/find-advocate') }}">
                    Book Appointment
                    <span data-fa-transform="shrink-6 down-1"></span>
                </a>
                            
                            <style>
                .fix-footer {
                    position: fixed;
                    right: 0%;
                    top: 50%;
                }
                .fix-footer2 {
                    position: fixed;
                    right: 16%;
                    top: 30px;
                }

                .fix-footer img {
                    width: 50px;
                }
                @media only screen and (max-width: 600px) {
                .hide_mobile{
                    display:none;
                }
                }
                @media only screen and (min-width: 600px) {
                .fix-footer{
                    display:none;
                }
                .image_canva{
                    margin-top:-80px !important;
                }
                }
                </style>
                
                
                <a class="btn btn-outline-secondary bg-secondary text-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2 fix-footer"
                    href="{{ url('/find-advocate') }}">
                    Book Appointment
                    <span data-fa-transform="shrink-6 down-1"></span>
                </a>
                
                
                
                <!--<a class="btn btn-outline-secondary bg-secondary text-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2 fix-footer2"-->
                <!--    href="{{ url('/login') }}">-->
                <!--    Login-->
                <!--    <span data-fa-transform="shrink-6 down-1"></span>-->
                <!--</a>-->
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
                    <h3 style="text-align: center;margin-bottom:50px;margin-top:-50px;" class="text-white fw-light">
                        (Introduced By Global Lawyers)
                    </h3>
                    <p style="text-align: center;margin-bottom:50px;margin-top:-50px;color:white;">13, Nizamuddin East Market, New Delhi, 110053</p>
                     <a style="text-decoration:none;" href="tel:+91-8851739484"><p style="text-align: center;;margin-top:-50px;color:white;">+91 8851739484</p></a>
                    <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-start">

                        <img class="image_canva" src="assets/img/call-advocate.png" style="width: 100%; display: block;margin: auto;"
                            alt="">


                    </div>
                    <div class="col-md-11 col-lg-8 col-xl-4 pb-7 pb-xl-9 text-center text-xl-start">

                        <p class="lead text-white opacity-75 p-3 rounded-4"
                            style="background:black;background-position: center top; text-align:justify;">
                            We provide legal consultancy at your doorsteps by deputing reputed advocate of particular
                            field having several years of experience. This service is available throughout the country. You are free to call us 24x7 and book your appointment online on payment of nominal consultancy fee. The required advocate shall visit at your residence, office between 7 am to 7 pm and you will recieve legal consultancy / advice / opinion on any matter. Global Lawyers has introduced this website to help the needy litigants / citizens in regard to legal consultancy. 
                        </p>
                        <a class="btn btn-outline-secondary bg-secondary text-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2"
                            href="{{url('/find-advocate')}}">Book Your Appointment<span class="fas fa-play ms-2"
                                data-fa-transform="shrink-6 down-1"></span></a>
                                
                                <a class="btn btn-outline-secondary bg-secondary text-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2"
                            href="tel:+918851739484">Call Now<span class="fas fa-play ms-2"
                                data-fa-transform="shrink-6 down-1"></span></a>
                    </div>

                </div>

            </div>

            <!-- end of .container-->
        </section>
       <style>
    .call_icon{
             position: fixed;
             left: 20px;
             bottom: 30px;
             z-index:9999;
         }
    .call_icon img{
             width:70px;
         }
          .whatsapp_icon{
             position: fixed;
             right: 20px;
             bottom: 30px;
             z-index:9999;
         }
    .whatsapp_icon img{
             width:70px;
         }
         </style>
        
        <div class="call_icon">
<p><a href="tel:+91-8851739484"><img src="assets/icon/phone.gif"><span></span></a></p>
</div>

 <div class="whatsapp_icon">

<p><a href="https://api.whatsapp.com/send?phone=918851739484"><img src="assets/icon/whatsapp.gif"><span></span></a></p>
</div>


    </main>
</body>
@endsection