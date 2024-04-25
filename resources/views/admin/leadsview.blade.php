@extends('layouts.dashboard')
@section('title', 'View')
@section('content')


<div class="card g-3">
    <div class="dt-buttons d-flex flex-wrap">
        <a href="/dashboard" class="dt-button add-new btn btn-primary m-3" tabindex="0"
            aria-controls="DataTables_Table_0" type="button">
            <span><i class="bx bx-left-arrow-alt me-0 me-sm-1"></i><span
                    class="d-none d-sm-inline-block">Back</span></span>
        </a>
    </div>

    <div class="card-body row g-3">
        <div class="col-lg-8 md-8">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-2 gap-1">

                <div class="card academy-content shadow-none border px-4 mx-4">
                    <div class="card-body">
                        <h5 class="mb-2">Basic Details</h5>
                        <hr>
                        </hr>


                            <div class="row">
                                <p class="text-nowrap me-5 mb-4">
                                    <b>Category Type :</b> {{$peoples -> categoryType}}
                                </p>
                            </div>

                            <div class="row">
                                <p class="text-nowrap mb-4">
                                    <b>Experience Type :</b> {{$peoples -> experienceType}}
                                </p>
                            </div>

                            <div class="row">
                                <p class="text-nowrap me-5 mb-4">
                                    <b>Appointment Date :</b> {{$peoples -> selectedAppointmentDate}}
                                </p>
                            </div>

                            <div class="row">
                                <p class="text-nowrap mb-4">
                                    <b>Appointment Time :</b> {{$peoples -> selectedAppointmentTime}}
                                </p>
                            </div>

                            <div class="row">
                                <p class="text-nowrap mb-4 me-5">
                                    <b>Appointment Type :</b> {{$peoples -> appointmentType}}
                                </p>
                            </div>

                            <div class="row mb-3">
                                <p class="text-nowrap me-5">
                                    <b>Fees Type :</b> {{$peoples -> feeType}}
                                </p>
                            </div>

                            <div class="row mb-3">
                                <p class="text-nowrap me-5">
                                    <b>consultancy :</b> {{$peoples -> consultancy_purpose}}
                                </p>
                            </div>

                            <div class="row mb-3">
                                <p class="text-nowrap ">
                                    <b>Status Occupation :</b> {{$peoples -> status_occupation}}
                                </p>
                            </div>
                            <div class="row">
                                <p class="text-nowrap"><b>Address :</b> {{$peoples -> full_address}} </p>

                            </div>



                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 md-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-2 gap-1">

                <div class="card academy-content shadow-none border  mx-4">
                    <div class="card-body">
                        <h5 class="mb-2">Personal Details</h5>
                        <hr>
                        </hr>
                        <div class="d-flex flex-wrap">
                            <div class="me-5">
                                <p class="text-nowrap">
                                    <b>Name :</b> {{$peoples -> name}}
                                </p>
                                <p class="text-nowrap"><b>Father Name :</b> {{$peoples -> father_name}}
                                </p>

                            </div>
                            <div>
                                <p class="text-nowrap me-5"><b>Mobile Number :</b> {{$peoples -> mobile_number}} </p>
                            </div>
                            <div>
                                <p class="text-nowrap me-5"><b>Age :</b> {{$peoples -> age}} </p>
                            </div>
                            <div>
                                <p class="text-nowrap"><b>Gender :</b> {{$peoples -> gender}} </p>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection