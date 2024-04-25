@extends('layouts.parts.frontend.main')

@section('main-container')
  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="bg-holder overlay" style="background-image:url(../assets/img/generic/bg-1.jpg);background-position: center bottom;">
      </div>
      <div class="container" data-layout="container">
        <nav
          class="navbar navbar-standard navbar-expand-lg navbar-dark"
          data-navbar-darken-on-scroll="data-navbar-darken-on-scroll"
        >
          <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"
            ><span class="text-white dark__text-white"
              ><img src="assets/img/phone.gif" style="width: 5%;" alt="">Advocate on call</span
            ></a>
            <button
              class="navbar-toggler collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarStandard"
              aria-controls="navbarStandard"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
              <ul class="navbar-nav ms-auto">
                
              </ul>
            </div>
          </div>
        </nav>

        <div class="row justify-content-center pt-6 rounded-2">
          <div class="col-sm-10 col-lg-8 col-xxl-7">
            <div class="card theme-wizard mb-5" id="wizard">
             
           
              <div class="card-body py-4" id="wizard-controller">
                <div class="tab-content">
                  <div
                    class="tab-pane active px-sm-3 px-md-5"
                    role="tabpanel"
                    aria-labelledby="bootstrap-wizard-tab1"
                    id="bootstrap-wizard-tab1"
                  >
                    <div class="row g-3 mb-3">
                      <div class="col-12 mb-3">
                        <div class="card bg-body-tertiary dark__bg-opacity-50 shadow-none">
                          <div class="bg-holder bg-card d-none d-sm-block">
                          </div>
                          <!--/.bg-holder-->
                          
                          
                            <div class="d-flex align-items-center z-1 p-0">
                            <div class="p-2">
                              <h4 class="mb-0 text-primary fw-bold text-center">About Us</h4>
                              
                              <p style="padding-left: 20px;text-align:justify;">Global lawyers association has been working for welfare of Advocates , having on board renowned legal luminaries, Sr.Advocates, Judges, young Advocates. GLOI (Global Lawyers Association of India) is happy to announce new services known as "Advocates on Call" with a view to help litigants & all.</p>
                            </div>
           
                          </div>
      
                          <div class="d-flex align-items-center z-1 p-0">
                            <div class="p-2">
                              <h4 class="mb-0 text-primary fw-bold">To make an Appointment You have to follow the Basic Process Which are Mentioned Below</h4>
                            </div>
           
                          </div>
                          
                        </div>
                      </div>
                 
                      <div class="col-auto col-xxl-12">
                        <p style="padding-left: 20px;"><span style="font-weight:bold;">Step 1:</span> Choose Field Of Consultancy</p>
                        <p style="padding-left: 20px;"><span style="font-weight:bold;">Step 2:</span> Select Required Advocate Experience Wise with Consultancy Charges</p>
                        <p style="padding-left: 20px;"><span style="font-weight:bold;">Step 3:</span> Choose Suitable Appointment Date, Time and Type</p>
                        <p style="padding-left: 20px;"><span style="font-weight:bold;">Step 4:</span> Fill the Personal Details</p>
                        <p style="padding-left: 20px;"><span style="font-weight:bold;">Step 5:</span> We will Connect with you Accordingly</p>
                        
                        <a class="btn btn-outline-secondary bg-secondary text-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="https://advocateoncall.in/find-advocate">Book Your Appointment<svg class="svg-inline--fa fa-play fa-w-14 ms-2" data-fa-transform="shrink-6 down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.5625em;"><g transform="translate(224 256)"><g transform="translate(0, 32)  scale(0.625, 0.625)  rotate(0 0 0)"><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1"></span> Font Awesome fontawesome.com --></a>
                        <a class="btn btn-outline-secondary bg-secondary text-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2" href="tel:+918851739484">Call Now<svg class="svg-inline--fa fa-play fa-w-14 ms-2" data-fa-transform="shrink-6 down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.5625em;"><g transform="translate(224 256)"><g transform="translate(0, 32)  scale(0.625, 0.625)  rotate(0 0 0)"><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-play ms-2" data-fa-transform="shrink-6 down-1"></span> Font Awesome fontawesome.com --></a>
                      </div>
                    </div>
                  </div>
              
               
                
                </div>
              </div>
              <!--<div class="card-footer bg-body-tertiary">-->
              <!--  <div class="px-sm-3 px-md-5">-->
              <!--    <ul class="pager wizard list-inline mb-0">-->
              <!--      <li class="previous">-->
              <!--        <button class="btn btn-link ps-0" type="button">-->
              <!--          <span-->
              <!--            class="fas fa-chevron-left me-2"-->
              <!--            data-fa-transform="shrink-3"-->
              <!--          ></span-->
              <!--          >Prev-->
              <!--        </button>-->
              <!--      </li>-->
              <!--      <li class="next">-->
              <!--        <a href="{{url('/find-advocate')}}"><button-->
              <!--          class="btn btn-primary px-5 px-sm-6"-->
              <!--          type="submit"-->
              <!--        >-->
              <!--          Next<span-->
              <!--            class="fas fa-chevron-right ms-2"-->
              <!--            data-fa-transform="shrink-3"-->
              <!--          >-->
              <!--          </span>-->
              <!--        </button></a>-->
              <!--      </li>-->
              <!--    </ul>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
@endsection