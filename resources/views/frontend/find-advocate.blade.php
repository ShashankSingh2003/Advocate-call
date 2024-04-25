@extends('layouts.parts.frontend.main')

@section('main-container')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif



<body>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="bg-holder overlay"
            style="background-image:url(../assets/img/generic/bg-1.jpg);background-position: center bottom;">
        </div>
        <div class="container" data-layout="container">
            <nav class="navbar navbar-standard navbar-expand-lg navbar-dark"
                data-navbar-darken-on-scroll="data-navbar-darken-on-scroll">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}"><span class="text-white dark__text-white"><img
                                src="assets/img/phone.gif" style="width: 5%;" alt="">Advocate on call</span></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
                        aria-label="Toggle navigation">
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
                        <form data-wizard-form="1" class="">
                            <input type="hidden" name="category" id="category" />
                            <input type="hidden" name="experience" id="experience" />
                            <input type="hidden" name="appointment" id="appointment" />
                            <input type="hidden" name="fees" id="fees" />
                        </form>
                        <form data-wizard-form="2" class="">
                            <input type="hidden" name="category1" id="category" />
                            <input type="hidden" name="experience1" id="experience" />
                            <input type="hidden" name="appointment1" id="appointment" />
                            <input type="hidden" name="fees1" id="fees" />
                        </form>
                        <form data-wizard-form="3" class="">
                            <input type="hidden" name="category1" id="category" />
                            <input type="hidden" name="experience1" id="experience" />
                            <input type="hidden" name="appointment1" id="appointment" />
                            <input type="hidden" name="fees1" id="fees" />
                        </form>
                        <form data-wizard-form="4" class="">
                            <input type="hidden" name="category1" id="category" />
                            <input type="hidden" name="experience1" id="experience" />
                            <input type="hidden" name="appointment1" id="appointment" />
                            <input type="hidden" name="fees1" id="fees" />
                        </form>
                        <form data-wizard-form="5" class="">
                            <input type="hidden" name="category1" id="category" />
                            <input type="hidden" name="experience1" id="experience" />
                            <input type="hidden" name="appointment1" id="appointment" />
                            <input type="hidden" name="fees1" id="fees" />
                        </form>
                        <div class="card-header bg-body-tertiary pt-3 pb-2">
                            <ul class="nav justify-content-between nav-wizard">
                                <li class="nav-item">
                                    <a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-tab1"
                                        data-bs-toggle="tab" data-wizard-step="1"><span
                                            class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                    class="fas fa-users"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1">Category</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab2" data-bs-toggle="tab"
                                        data-wizard-step="2"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle"><span
                                                    class="fas fa-user"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1">Experience</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab3" data-bs-toggle="tab"
                                        data-wizard-step="3"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle"><span
                                                    class="fas fa-calendar-check"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1">Appointment</span></a>
                                </li>
                                <!--<li class="nav-item">-->
                                <!--    <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab4" data-bs-toggle="tab"-->
                                <!--        data-wizard-step="3"><span class="nav-item-circle-parent"><span-->
                                <!--                class="nav-item-circle"><span-->
                                <!--                    class="fas fa-dollar-sign"></span></span></span><span-->
                                <!--            class="d-none d-md-block mt-1 fs--1">Fee</span></a>-->
                                <!--</li>-->
                                <li class="nav-item">
                                    <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab5" data-bs-toggle="tab"
                                        data-wizard-step="4"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle"><span
                                                    class="fas fa-credit-card"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1">Personal Details</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab6" data-bs-toggle="tab"
                                        data-wizard-step="4"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle"><span
                                                    class="fas fa-thumbs-up"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1">Finish</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body py-4" id="wizard-controller">
                            <div class="tab-content">
                                <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">
                                    <div class="row g-3 mb-3">
                                        <div class="col-12 mb-3">
                                            <div class="card bg-body-tertiary dark__bg-opacity-50 shadow-none">
                                                <div class="bg-holder bg-card d-none d-sm-block">
                                                </div>
                                                <!--/.bg-holder-->

                                                <div class="d-flex align-items-center z-1 p-0">
                                                    <div class="p-2">
                                                        <h4 class="mb-0 text-primary fw-bold"><span
                                                                style="color: black;">Step 1 :</span> Choose<span
                                                                class="text-info fw-medium"> Field of
                                                                Consultancy</span></h4>
                                                    </div>

                                                </div>
                                                <p style="font-weight: bolder;">*Please Click and Go for Next</p>
                                            </div>
                                        </div>
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div-->
                                        <!--        class="card h-md-100 ecommerce-card-min-width rounded-pill category-select">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Family Matters')">-->
                                        <!--            Family Matters-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Matrimonial/Devorce Matters')">-->
                                        <!--            Matrimonial/Devorce Matters-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-auto col-xxl-3">
                                            <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"
                                                style="height:fit-content!important">
                                                <div class="card-body d-flex flex-column justify-content-end py-1"
                                                    style="text-align:center;height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"
                                                    onclick="selectCategory(' Civil Matters')">
                                                    Civil Matters
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto col-xxl-3">
                                            <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"
                                                style="height:fit-content!important">
                                                <div class="card-body d-flex flex-column justify-content-end py-1"
                                                    style="text-align:center;height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"
                                                    onclick="selectCategory(' Criminal Matter')">
                                                    Criminal Matter
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Succession Disputes')">-->
                                        <!--            Succession Disputes-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-auto col-xxl-3">
                                            <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"
                                                style="height:fit-content!important">
                                                <div class="card-body d-flex flex-column justify-content-end py-1"
                                                    style="text-align:center;height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"
                                                    onclick="selectCategory(' Company Matters')">
                                                    Company Matters
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto col-xxl-3">
                                            <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"
                                                style="height:fit-content!important">
                                                <div class="card-body d-flex flex-column justify-content-end py-1"
                                                    style="text-align:center;height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"
                                                    onclick="selectCategory('Litigation Against to Govt.')">
                                                    Litigation Against to Govt.
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('  Commercial Litigation')">-->
                                        <!--            Commercial Litigation-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Service Matters')">-->
                                        <!--            Service Matters-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Defamation Matters')">-->
                                        <!--            Defamation Matters-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Damages Matters')">-->
                                        <!--            Damages Matters-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory(' Government Litigation')">-->
                                        <!--            Government Litigation-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory(' Landloard ad Ternact Dispute')">-->
                                        <!--            Landloard ad Ternact Dispute-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Traders Dispute')">-->
                                        <!--            Traders Dispute-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Environmental Matters')">-->
                                        <!--            Environmental Matters-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Human Rights matters')">-->
                                        <!--            Human Rights matters-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Local Authority Dispute')">-->
                                        <!--            Local Authority Dispute-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-auto col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill category-select"-->
                                        <!--        style="height:fit-content!important">-->
                                        <!--        <div class="card-body d-flex flex-column justify-content-end py-1"-->
                                        <!--            style="height:fit-content!important;width: 281px;border: 1px solid darkgrey;border-radius: 50px;"-->
                                        <!--            onclick="selectCategory('Electricity/Water matter Disputes')">-->
                                        <!--            Electricity/Water matter Disputes-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab2" id="bootstrap-wizard-tab2">
                                    <div class="row g-3 mb-3">
                                        <div class="col-12 mb-3">
                                            <div class="card bg-body-tertiary dark__bg-opacity-50 shadow-none">
                                                <div class="bg-holder bg-card d-none d-sm-block">
                                                </div>
                                                <!--/.bg-holder-->

                                                <div class="d-flex align-items-center z-1 p-0">
                                                    <div class="p-2">
                                                        <h4 class="mb-0 text-primary fw-bold"><span
                                                                style="color: black;">Step 2 :</span> Requirement of
                                                            Advocate Experience Wise <span class="text-info fw-medium"> with Consultancy Charges (For 30 Minutes) </span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="font-weight: bolder;">*Please Click and Go for Next</p>
                                        </div>



                                        <div class="col-6 col-xxl-3">
                                            <div class="card fees-select" onclick="selectFees('₹5000 - 5 years of experience')">
                                                <div style="border: 1px solid darkgrey; border-radius: 5px;" class="card-body">
                                                    <h5 style="text-align:center;" class="text-primary">₹5000</h5>
                                                    <p style="text-align:center;" class="fs--1 mb-0">5 years of experience</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-6 col-xxl-3">
                                            <div class="card fees-select" onclick="selectFees('₹7000 - 5-10 years of experience')">
                                                <div style="border: 1px solid darkgrey; border-radius: 5px;" class="card-body">
                                                    <h5 style="text-align:center;" class="text-primary">₹7000</h5>
                                                    <p style="text-align:center;" class="fs--1 mb-0">5-10 years of experience</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-6 col-xxl-3">
                                            <div class="card fees-select" onclick="selectFees('₹10000 - 10-25 years of experience')">
                                                <div style="border: 1px solid darkgrey; border-radius: 5px;" class="card-body">
                                                    <h5 style="text-align:center;" class="text-primary">₹10000</h5>
                                                    <p style="text-align:center;" class="fs--1 mb-0">10-25 years of experience</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-6 col-xxl-3">
                                            <div class="card fees-select" onclick="selectFees('₹20000 - 25+ years of experience')">
                                                <div style="border: 1px solid darkgrey; border-radius: 5px;" class="card-body">
                                                    <h5 style="text-align:center;" class="text-primary">₹20000</h5>
                                                    <p style="text-align:center;" class="fs--1 mb-0">25+ years of experience</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div style="font-weight: bold;" class="col-12 col-xxl-3 ">
                                            * If consultancy period extends beyond 30 minutes, further charges would be
                                            charged proportionately on every 10 minutes.
                                        </div>



                                        <!--<div class="col-6 col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill experience-select"-->
                                        <!--        onclick="selectExperience('Upto 5 Years')">-->
                                        <!--        <div style="border: 1px solid darkgrey; border-radius: 50px;"-->
                                        <!--            class="card-body d-flex flex-column justify-content-end">-->
                                        <!--            Upto 5 Years-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                        <!--<div class="col-6 col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill experience-select"-->
                                        <!--        onclick="selectExperience('5 to 10 Years')">-->
                                        <!--        <div style="border: 1px solid darkgrey; border-radius: 50px;"-->
                                        <!--            class="card-body d-flex flex-column justify-content-end">-->
                                        <!--            5 to 10 Years-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                        <!--<div class="col-6 col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill experience-select"-->
                                        <!--        onclick="selectExperience('10 to 25 years')">-->
                                        <!--        <div style="border: 1px solid darkgrey; border-radius: 50px;"-->
                                        <!--            class="card-body d-flex flex-column justify-content-end">-->
                                        <!--            10 to 25 years-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                        <!--<div class="col-6 col-xxl-3">-->
                                        <!--    <div class="card h-md-100 ecommerce-card-min-width rounded-pill experience-select"-->
                                        <!--        onclick="selectExperience('25+ Years')">-->
                                        <!--        <div style="border: 1px solid darkgrey; border-radius: 50px;"-->
                                        <!--            class="card-body d-flex flex-column justify-content-end">-->
                                        <!--            25+ Years-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="col-12 mb-3">
                                            <div class="card bg-body-tertiary dark__bg-opacity-50 shadow-none">
                                                <div class="d-flex align-items-center z-1 p-0">
                                                    <div class="p-2">
                                                        <h4 class="mb-0 text-primary fw-bold">OR <span
                                                                class="text-info fw-medium"> Required Particular
                                                                Advocate, if any (of Your Own Choice) <br> <a
                                                                    class="btn btn-outline-danger border-2 rounded-pill btn-lg mt-4 fs-0 py-2"
                                                                    href="{{ url('/your-advocate') }}">Book Particular
                                                                    Advocate<span class="fas fa-play ms-2"
                                                                        data-fa-transform="shrink-6 down-1"></span></a></span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab3" id="bootstrap-wizard-tab3">
                                    <div class="row g-3 mb-3">
                                        <div class="col-12 mb-3">
                                            <div class="card bg-body-tertiary dark__bg-opacity-50 shadow-none">
                                                <div class="bg-holder bg-card d-none d-sm-block">
                                                </div>
                                                <!--/.bg-holder-->

                                                <div class="d-flex align-items-center z-1 p-0">
                                                    <div class="p-2">
                                                        <h4 class="mb-0 text-primary fw-bold"><span
                                                                style="color: black;">Step 3 :</span> Choose<span
                                                                class="text-info fw-medium"> Suitable Appointment Date,
                                                                Time & Type</span></h4>
                                                    </div>
                                                </div>




                                            </div>
                                            <p style="font-weight: bolder;">*Please Click and Go for Next</p>
                                        </div>
                                        <div class="row gx-2">
                                            <div class="col-6 col-xxl-3">
                                                <label for="date">Suitable Appointment Date</label>
                                                <input type="date" class="form-control" name="date" id="date">
                                            </div>

                                            <div class="col-6 col-xxl-3">
                                                <label for="time">Suitable Appointment Time</label>
                                                <input type="time" class="form-control" name="time" id="time">
                                            </div>
                                        </div>
                                    </div>





                                    <label>Suitable Appointment Type</label>
                                    <div class="row g-3 mb-3">
                                        <div class="row g-3 mb-3">
                                            <div class="col-4 col-xxl-3">
                                                <div class="card h-md-100 ecommerce-card-min-width rounded-pill appointment-select"
                                                    onclick="selectAppointment('Video Conference')">
                                                    <div style="text-align:center;border: 1px solid darkgrey; border-radius: 50px;"
                                                        class="card-body d-flex flex-column justify-content-end">
                                                        Video Conference
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4 col-xxl-3">
                                                <div class="card h-md-100 ecommerce-card-min-width rounded-pill appointment-select"
                                                    onclick="selectAppointment('Door Step')">
                                                    <div style="text-align:center;border: 1px solid darkgrey; border-radius: 50px;"
                                                        class="card-body d-flex flex-column justify-content-end">
                                                        Door Step
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4 col-xxl-3">
                                                <div class="card h-md-100 ecommerce-card-min-width rounded-pill appointment-select"
                                                    onclick="selectAppointment('Advocate Office')">
                                                    <div style="text-align:center;border: 1px solid darkgrey; border-radius: 50px;"
                                                        class="card-body d-flex flex-column justify-content-end">
                                                        Advocate Office
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="font-weight: bold;" class="col-12 col-xxl-3 ">
                                            * No Physical/Online consultancy before 24 hours.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab4" id="bootstrap-wizard-tab4">
                                    <div class="row g-3 mb-3">
                                        <div class="col-12 mb-3">
                                            <div class="card bg-body-tertiary dark__bg-opacity-50 shadow-none">
                                                <div class="bg-holder bg-card d-none d-sm-block">
                                                </div>
                                                <!--/.bg-holder-->

                                                <div class="d-flex align-items-center z-1 p-0">
                                                    <div class="p-2">
                                                        <h4 class="mb-0 text-primary fw-bold"><span
                                                                style="color: black;">Step 4 :</span> Select<span
                                                                class="text-info fw-medium"> Consultancy Charges
                                                                (Experience Wise for 30 minutes)</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="font-weight: bolder;">*Please Click and Go for Next</p>
                                        </div>
                                        <div class="col-6 col-xxl-3">
                                            <div class="card fees-select"
                                                onclick="selectFees('₹5000 - 5 years of experience')">
                                                <div style="border: 1px solid darkgrey; border-radius: 5px;"
                                                    class="card-body">
                                                    <h5 class="text-primary">₹5000</h5>
                                                    <p class="fs--1 mb-0">5 years of experience</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-xxl-3">
                                            <div class="card fees-select"
                                                onclick="selectFees('₹7000 - 5-10 years of experience')">
                                                <div style="border: 1px solid darkgrey; border-radius: 5px;"
                                                    class="card-body">
                                                    <h5 class="text-primary">₹7000</h5>
                                                    <p class="fs--1 mb-0">5-10 years of experience</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-xxl-3">
                                            <div class="card fees-select"
                                                onclick="selectFees('₹10000 - 10-25 years of experience')">
                                                <div style="border: 1px solid darkgrey; border-radius: 5px;"
                                                    class="card-body">
                                                    <h5 class="text-primary">₹10000</h5>
                                                    <p class="fs--1 mb-0">10-25 years of experience</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-xxl-3">
                                            <div class="card fees-select"
                                                onclick="selectFees('₹20000 - 25+ years of experience')">
                                                <div style="border: 1px solid darkgrey; border-radius: 5px;"
                                                    class="card-body">
                                                    <h5 class="text-primary">₹20000</h5>
                                                    <p class="fs--1 mb-0">25+ years of experience</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="font-weight: bold;" class="col-12 col-xxl-3 ">
                                            * If consultancy period extends beyond 30 minutes, further charges would be
                                            charged proportionately on every 10 minutes.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab5" id="bootstrap-wizard-tab5">
                                    <div class="row g-3 mb-3">
                                        <div class="col-12 mb-3">
                                            <div class="card bg-body-tertiary dark__bg-opacity-50 shadow-none">
                                                <div class="bg-holder bg-card d-none d-sm-block">
                                                </div>
                                                <!--/.bg-holder-->

                                                <div class="d-flex align-items-center z-1 p-0">
                                                    <div class="p-2">
                                                        <h4 class="mb-0 text-primary fw-bold"><span
                                                                style="color: black;">Step 5 :</span> Fill your<span
                                                                class="text-info fw-medium"> Personal Details</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="font-weight: bolder;">*Please fill below Details to complete the
                                                process</p>
                                        </div>
                                        <div class="col-lg-12 pe-lg-12">
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                    <h5 class="mb-0">Personal Details</h5>
                                                </div>

                                                <div class="card-body bg-body-tertiary">

                                                    <form id="consultancyForm" action="{{ route('peoples.store') }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div id="formErrors" style="display: none;"></div>

                                                        <input type="hidden" name="selectedTab" id="selectedTab"
                                                            value="0"> <!-- Hidden field for active tab index -->

                                                        <input type="hidden" name="feeType" id="selectedFees" value="">
                                                        <input type="hidden" name="categoryType" id="selectedCategory"
                                                            value="">
                                                        <input type="hidden" name="experienceType"
                                                            id="selectedexperience" value="">
                                                        <input type="hidden" name="selectedAppointmentDate"
                                                            id="selectedAppointmentDate" value="">
                                                        <input type="hidden" name="selectedAppointmentTime"
                                                            id="selectedAppointmentTime" value="">
                                                        <input type="hidden" name="appointmentType"
                                                            id="selectedappointment" value="">


                                                        <div class="row gx-2">
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label" for="event-name">Your
                                                                    Name</label>
                                                                <input class="form-control validate not-empty"
                                                                    id="event-name" name="event-name" type="text"
                                                                    placeholder="Enter your Name">
                                                                <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class="form-label" for="father-name">Your
                                                                    Father's Name</label>
                                                                <input class="form-control validate not-empty"
                                                                    id="father-name" name="father-name" type="text"
                                                                    placeholder="Enter Father's Name">
                                                                <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class="form-label" for="mobile-number">Your
                                                                    Mobile Number</label>
                                                                <input class="form-control validate not-empty"
                                                                    id="mobile-number" name="mobile-number" type="text"
                                                                    placeholder="Enter Your Mobile">
                                                                <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
                                                                <div class="col-sm-6 mb-3">
                                                                <label class="form-label" for="email">Your
                                                                    Email</label>
                                                                <input class="form-control validate not-empty"
                                                                    id="email" name="email" type="email"
                                                                    placeholder="Enter Your Email">
                                                                <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
                                                            <!--<div class="col-sm-6 mb-3">-->
                                                            <!--    <label class="form-label" for="your-age">Your-->
                                                            <!--        Age</label>-->
                                                            <!--    <input class="form-control validate not-empty"-->
                                                            <!--        id="your-age" name="your-age" type="text"-->
                                                            <!--        placeholder="Enter Your Age">-->
                                                            <!--    <div class="invalid-feedback"></div>-->
                                                            <!--    <div class="valid-feedback"></div>-->

                                                            <!--</div>-->
                                                            <!--<div class="col-sm-6 mb-3">-->
                                                            <!--    <label class="form-label" for="gender">Your-->
                                                            <!--        Gender</label>-->
                                                            <!--    <select class="form-control validate not-empty"-->
                                                            <!--        id="gender" name="gender">-->
                                                            <!--        <option value="">Choose Gender</option>-->
                                                            <!--        <option value="Male">Male</option>-->
                                                            <!--        <option value="Female">Female</option>-->
                                                            <!--        <option value="Other">Other</option>-->

                                                            <!--    </select>-->
                                                            <!--    <div class="invalid-feedback"></div>-->
                                                            <!--    <div class="valid-feedback"></div>-->
                                                            <!--</div>-->
                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="full-address">Your Full
                                                                    Address</label>
                                                                <textarea class="form-control validate not-empty"
                                                                    id="full-address" name="full-address"></textarea>
                                                                <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
                                                            <!--<div class="col-sm-12 mb-3">-->
                                                            <!--    <label class="form-label"-->
                                                            <!--        for="consultancy-purpose">Purpose of-->
                                                            <!--        Consultancy</label>-->
                                                            <!--    <textarea class="form-control validate not-empty"-->
                                                            <!--        id="consultancy-purpose"-->
                                                            <!--        name="consultancy-purpose"></textarea>-->
                                                            <!--    <div class="invalid-feedback"></div>-->
                                                            <!--    <div class="valid-feedback"></div>-->

                                                            <!--</div>-->
                                                            <!--<div class="col-sm-6 mb-3">-->
                                                            <!--    <label class="form-label" for="your-photo">Your-->
                                                            <!--        Photo</label>-->
                                                            <!--    <input class="form-control" id="your-photo"-->
                                                            <!--        name="your-photo" type="file" placeholder="Photo">-->
                                                            <!--    <div class="invalid-feedback"></div>-->
                                                            <!--    <div class="valid-feedback"></div>-->

                                                            <!--</div>-->
                                                            <!--<div class="col-sm-6 mb-3">-->
                                                            <!--    <label class="form-label" for="aadhar-card">Aadhaar-->
                                                            <!--        Card</label>-->
                                                            <!--    <input class="form-control" id="aadhar-card"-->
                                                            <!--        name="aadhaar-card" type="file"-->
                                                            <!--        placeholder="Aadhaar Card">-->
                                                            <!--</div>-->
                                                            <!--<div class="col-sm-6 mb-3">-->
                                                            <!--    <label class="form-label"-->
                                                            <!--        for="occupation-document">Document of-->
                                                            <!--        Occupation</label>-->
                                                            <!--    <input class="form-control" id="occupation-document"-->
                                                            <!--        name="occupation-document" type="file"-->
                                                            <!--        placeholder="Occupation Document">-->
                                                            <!--</div>-->
                                                            <!--<div class="col-sm-6 mb-3">-->
                                                            <!--    <label class="form-label" for="status-occupation">Status-->
                                                            <!--        of Occupation</label>-->
                                                            <!--    <select class="form-control" id="status-occupation"-->
                                                            <!--        name="status-occupation">-->
                                                            <!--        <option value="">Choose Status</option>-->
                                                            <!--        <option value="Business">Business</option>-->
                                                            <!--        <option value="Profession">Profession</option>-->
                                                            <!--        <option value="Consultancy">Consultancy</option>-->
                                                            <!--    </select>-->
                                                            <!--</div>-->
                                                            <div class="col-sm-6 mb-3">
                                                                <button type="submit" id="submitBtn"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab6" id="bootstrap-wizard-tab6">
                                    <div class="row">
                                        <div class="col">
                                            <div class="flex-1">
                                                 <img src="assets/img/pray.png" style="width: 10%;display:block;margin:auto;" alt="">
                                                <h5 class="mb-2">Thanks, We will get back to you</h5>
                                                <p>We got your details, we will coordinate with you and keep in touch
                                                    with you as soon as possible.</p>
                                                <!--<p>* In case of non-digital payment, please enclose your pre-advance-->
                                                <!--    cheque by post at our office address<br>Address:13, Nizamuddin East-->
                                                <!--    Market, New Delhi, 110053</p>-->
                                                <!--<p>* OTP and refrence code will be provided to you to verify your-->
                                                <!--    identity at time of appointment</p>-->
                                                <a class="btn btn-outline-primary border-2 rounded-pill btn-lg mt-4 fs-0 py-2 mx-2"
                                                    href="/" type="button">Go to Home</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-body-tertiary">
                            <div class="px-sm-3 px-md-5">
                                <ul class="pager wizard list-inline mb-0">
                                    <li class="previous">
                                        <button class="btn btn-link ps-0" type="button">
                                            <span class="fas fa-chevron-left me-2"
                                                data-fa-transform="shrink-3"></span>Prev
                                        </button>
                                    </li>
                                    <li class="next">
                                        <button class="btn btn-primary px-5 px-sm-6" type="submit">
                                            Next<span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3">
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('submitBtn').addEventListener('click', function() {
                // Update the hidden input value with the index of the tab to open
                document.getElementById('selectedTab').value =
                1; // Index of the tab to open (0-based)
            });
        });
        </script>
        <script>
       document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('consultancyForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        const form = event.target;
        const fields = form.querySelectorAll(".validate");
        let formIsValid = true;

        fields.forEach((field) => {
            if (!validateField(field)) {
                formIsValid = false;
            }
        });

        if (formIsValid) {
            fetch(this.action, {
                method: 'POST',
                body: new FormData(this),
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.querySelector('[href="#bootstrap-wizard-tab6"]').click(); // Change tab
                } else {
                    // Handle error
                }
            })
            .catch(error => {
                // Handle error
            });
        }
    });
});

// Custom validation rules
const rules = {
    "not-empty": (value) => value.trim() !== ""
};

// Function to validate a single field
function validateField(field) {
    let isValid = true;
    field.classList.remove("is-invalid", "is-valid");

    for (const className of field.classList) {
        if (rules.hasOwnProperty(className)) {
            isValid = rules[className](field.value);
            if (!isValid) {
                break;
            }
        }
    }

    const feedbackElement = field.parentElement.querySelector(
        isValid ? ".valid-feedback" : ".invalid-feedback"
    );

    feedbackElement.classList.add('show-feedback');
    feedbackElement.innerText = isValid ? "Looks Good" : "This field is required.";
    field.classList.add(isValid ? "is-valid" : "is-invalid");

    return isValid;
}

</script>


        <script>
        // Function to handle category selection
        function selectCategory(category) {
            // Save the selected category in sessionStorage
            sessionStorage.setItem('selectedCategory', category);
            document.getElementById('selectedCategory').value = category;

        }

        // Function to check if a category is already selected on page load
        function checkSelectedCategory() {
            // Retrieve the selected category from sessionStorage
            const selectedCategory = sessionStorage.getItem('selectedCategory');
            // If a category is found, mark it as selected
            if (selectedCategory) {
                const categoryCards = document.querySelectorAll('.category-select');
                categoryCards.forEach(card => {
                    if (card.querySelector('.card-body').textContent.trim() ===
                        selectedCategory) {
                        card.classList.add(
                            'active'); // Add a class to visually indicate selection
                    }
                });
            }
        }

        // Add a click event listener to each category card
        document.addEventListener('DOMContentLoaded', function() {
            const categoryCards = document.querySelectorAll('.category-select');

            categoryCards.forEach(card => {
                card.addEventListener('click', function() {
                    const category = this.querySelector('.card-body')
                        .textContent.trim();
                    selectCategory(category);
                });
            });

            // Check if a category is already selected on page load
            checkSelectedCategory();
        });
        </script>

        <script>
        // Function to handle experience selection
        function selectExperience(experience) {
            // Save the selected experience in sessionStorage
            sessionStorage.setItem('selectedExperience', experience);
            document.getElementById('selectedexperience').value = experience;

        }

        // Function to check if an experience is already selected on page load
        function checkSelectedExperience() {
            // Retrieve the selected experience from sessionStorage
            const selectedExperience = sessionStorage.getItem('selectedExperience');

            // If an experience is found, mark it as selected
            if (selectedExperience) {
                const experienceCards = document.querySelectorAll('.experience-select');
                experienceCards.forEach(card => {
                    if (card.querySelector('.card-body').textContent.trim() ===
                        selectedExperience) {
                        card.classList.add(
                            'active'); // Add a class to visually indicate selection
                    }
                });
            }
        }

        // Add a click event listener to each experience card
        document.addEventListener('DOMContentLoaded', function() {
            const experienceCards = document.querySelectorAll('.experience-select');

            experienceCards.forEach(card => {
                card.addEventListener('click', function() {
                    const experience = this.querySelector('.card-body')
                        .textContent.trim();
                    selectExperience(experience);
                });
            });

            // Check if an experience is already selected on page load
            checkSelectedExperience();
        });
        </script>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            function handleDateTimeSelection(fieldId, fieldType) {
                const element = document.getElementById(fieldId);

                function saveSelection() {
                    if (fieldType === 'date') {
                        sessionStorage.setItem('selectedAppointmentDate', element
                            .value);
                        document.getElementById('selectedAppointmentDate').value =
                            element.value;
                    } else if (fieldType === 'time') {
                        sessionStorage.setItem('selectedAppointmentTime', element
                            .value);
                        document.getElementById('selectedAppointmentTime').value =
                            element.value;
                    }
                }

                function checkSelection() {
                    const storedDateValue = sessionStorage.getItem(
                        'selectedAppointmentDate');
                    const storedTimeValue = sessionStorage.getItem(
                        'selectedAppointmentTime');
                    if (storedDateValue !== null) {
                        if (fieldType === 'date') {
                            element.value = storedDateValue;
                        }
                    }
                    if (storedTimeValue !== null) {
                        if (fieldType === 'time') {
                            element.value = storedTimeValue;
                        }
                    }
                }

                checkSelection();

                element.addEventListener('change', saveSelection);
            }

            handleDateTimeSelection('date', 'date');
            handleDateTimeSelection('time', 'time');
        });
        </script>


        <script>
        // Function to handle appointment selection
        function selectAppointment(appointmentType) {
            // Save the selected appointment type in sessionStorage
            sessionStorage.setItem('selectedAppointment', appointmentType);
            document.getElementById('selectedappointment').value = appointmentType;
        }

        // Function to check if an appointment type is already selected on page load
        function checkSelectedAppointment() {
            // Retrieve the selected appointment type from sessionStorage
            const selectedAppointment = sessionStorage.getItem('selectedAppointment');

            // If an appointment type is found, mark it as selected
            if (selectedAppointment) {
                const appointmentCards = document.querySelectorAll('.appointment-select');
                appointmentCards.forEach(card => {
                    if (card.querySelector('.card-body').textContent.trim() ===
                        selectedAppointment) {
                        card.classList.add(
                            'active'); // Add a class to visually indicate selection
                    }
                });
            }
        }

        // Add a click event listener to each appointment card
        document.addEventListener('DOMContentLoaded', function() {
            const appointmentCards = document.querySelectorAll('.appointment-select');

            appointmentCards.forEach(card => {
                card.addEventListener('click', function() {
                    const appointmentType = this.querySelector(
                        '.card-body').textContent.trim();
                    selectAppointment(appointmentType);
                });
            });

            // Check if an appointment type is already selected on page load
            checkSelectedAppointment();
        });
        </script>

        <script>
        // Function to handle fees selection
        function selectFees(feesInfo) {
            // Save the selected fees information in sessionStorage
            sessionStorage.setItem('selectedFees', feesInfo);
            document.getElementById('selectedFees').value = feesInfo;
        }

        // Function to check if fees information is already selected on page load
        function checkSelectedFees() {
            // Retrieve the selected fees information from sessionStorage
            const selectedFees = sessionStorage.getItem('selectedFees');

            // If fees information is found, mark it as selected
            if (selectedFees) {
                const feesCards = document.querySelectorAll('.fees-select');
                feesCards.forEach(card => {
                    if (card.querySelector('.card-body h5').textContent.trim() ===
                        selectedFees) {
                        card.classList.add(
                            'active'); // Add a class to visually indicate selection
                    }
                });
            }
        }

        // Add a click event listener to each fees card
        document.addEventListener('DOMContentLoaded', function() {
            const feesCards = document.querySelectorAll('.fees-select');

            feesCards.forEach(card => {
                card.addEventListener('click', function() {
                    const feesInfo = this.querySelector('.card-body h5')
                        .textContent.trim();
                    selectFees(feesInfo);
                });
            });

            // Check if fees information is already selected on page load
            checkSelectedFees();
        });
        </script>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            function handleSelection(fieldId, fieldType) {
                const element = document.getElementById(fieldId);

                function saveSelection() {
                    if (fieldType === 'text' || fieldType === 'textarea') {
                        sessionStorage.setItem(fieldId, element.value);
                    } else if (fieldType === 'select-one') {
                        sessionStorage.setItem(fieldId, element.options[element
                            .selectedIndex].value);
                    }
                }

                function checkSelection() {
                    const storedValue = sessionStorage.getItem(fieldId);
                    if (storedValue) {
                        if (fieldType === 'text' || fieldType === 'textarea') {
                            element.value = storedValue;
                        } else if (fieldType === 'select-one') {
                            element.value = storedValue;
                        }
                    }
                }

                checkSelection();

                element.addEventListener('change', saveSelection);
            }

            handleSelection('event-name', 'text');
            handleSelection('father-name', 'text');
            handleSelection('mobile-number', 'text');
            handleSelection('email', 'text');
            // handleSelection('your-age', 'text');
            // handleSelection('gender', 'select-one');
            handleSelection('full-address', 'textarea');
            // handleSelection('consultancy-purpose', 'textarea');
            // handleSelection('your-photo', 'file');
            // handleSelection('aadhar-card', 'file');
            // handleSelection('occupation-document', 'file');
            // handleSelection('status-occupation', 'select-one');
            handleSelection('selectedFees', 'text');
            handleSelection('selectedCategory', 'text');
            handleSelection('selectedexperience', 'text');
            handleSelection('selectedAppointmentDate', 'text');
            handleSelection('selectedAppointmentTime', 'text');
            handleSelection('selectedappointment', 'text');
        });
        </script>


</body>

</html>
@endsection