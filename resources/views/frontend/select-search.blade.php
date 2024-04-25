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
            <a class="navbar-brand" href="../index.html"
              ><span class="text-white dark__text-white"
                >Advocate on call</span
              ></a
            >
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

        <section class="bg-dark" data-bs-theme="light">

          <div class="bg-holder overlay" style="background-image:url(../assets/img/generic/bg-2.jpg);background-position: center top;">
          </div>
          <!--/.bg-holder-->
  
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-8">
                <p class="fs-2 fs-sm-2 text-white">We provide legal consultancy at your doorsteps by deputing reputed advocate of particular field. The consultancy shall be at your doorstep on demand of advocate having several years of experience.</p>
                  <p class="fs-2 fs-sm-2 text-white">This service is available throughout the country which includes metropolitian cities, states, capitals, districts headquaters ...etc. We can also provide advocate for Itigation in court of laws. </p>
                <a class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2 mx-2" href="/your-advocate.html" type="button">Contact Your Advocate</a>
                <a class="btn btn-outline-primary border-2 rounded-pill btn-lg mt-4 fs-0 py-2 mx-2" href="/find-advocate.html" type="button">Search For Advocate</a>
              </div>
            </div>
          </div>
          <!-- end of .container-->
  
        </section>
      </div>
@endsection