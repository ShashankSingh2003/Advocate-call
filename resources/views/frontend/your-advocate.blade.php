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
    <meta name="csrf-token" content="your-csrf-token-value">

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
                        <form data-wizard-form="1" class="needs-validation">
                            <input type="hidden" name="category" id="category" />
                            <input type="hidden" name="experience" id="experience" />
                            <input type="hidden" name="appointment" id="appointment" />
                            <input type="hidden" name="fees" id="fees" />
                        </form>
                        <div class="card-header bg-body-tertiary pt-3 pb-2">
                            <ul class="nav justify-content-between nav-wizard">
                                <li class="nav-item">
                                    <a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-tab1"
                                        data-bs-toggle="tab" data-wizard-step="1"><span
                                            class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                    class="fas fa-users"></span></span></span><span
                                            class="d-none d-md-block mt-1 fs--1">Details</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab2" data-bs-toggle="tab"
                                        data-wizard-step="2"><span class="nav-item-circle-parent"><span
                                                class="nav-item-circle"><span
                                                    class="fas fa-user"></span></span></span><span
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
                                                        <h4 class="mb-0 text-primary fw-bold">Required Particular
                                                            Advocate, if any (of Your Own Choice)<span
                                                                class="text-info fw-medium"> Please Fill Below
                                                                Form</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pe-lg-12">
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                    <h5 class="mb-0">Personal Details</h5>
                                                </div>
                                                <div class="card-body bg-body-tertiary">
                                                    <form action="{{ route('known.advocate') }}" method="POST"
                                                        id="knowadvo" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="activeTabIndex" id="activeTabIndex"
                                                            value="0">

                                                        <div class="row gx-2">
                                                            <div class="col-12 mb-3">
                                                                <label class="form-label" for="event-name">Name of
                                                                    advocate</label>
                                                                <input class="form-control validate not-empty"
                                                                    id="event-name" type="text" placeholder="name"
                                                                    name="event-name">

                                                                <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class="form-label"
                                                                    for="district">District</label>
                                                                <input class="form-control validate not-empty" id="district" type="text"
                                                                    placeholder="District" name="district">
                                                                     <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class="form-label" for="practice">Area of
                                                                    Practice</label>
                                                                <input class="form-control validate not-empty" id="practice" type="text"
                                                                    placeholder="Area of Practice" name="practice">
                                                                     <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class="form-label" for="address">Adresss</label>
                                                                <input class="form-control validate not-empty" id="address" type="text"
                                                                    placeholder="Address" name="address">
                                                                     <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label class="form-label" for="mobile">Mobile</label>
                                                                <input class="form-control validate not-empty" id="mobile" type="text"
                                                                    placeholder="Mobile" name="mobile">
                                                                     <div class="invalid-feedback"></div>
                                                                <div class="valid-feedback"></div>

                                                            </div>
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
                                <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                    aria-labelledby="bootstrap-wizard-tab2" id="bootstrap-wizard-tab2">
                                    <div class="row">
                                        <div class="col">
                                            <div class="flex-1">
                                                <img src="assets/img/pray.png" style="width: 10%;display:block;margin:auto;" alt="">
                                                <h5 style="text-align:center;" class="mb-2">Thanks, We will get back to you</h5>
                                                <p style="text-align:center;">We got your details, we will coordinate with you and keep in touch
                                                    with you as soon as possible.</p>
                                                <!--<p>* In case of non-digital payment, please enclose your pre-advance-->
                                                <!--    cheque by post at our office address<br>Address:13, Nizamuddin East-->
                                                <!--    Market, New Delhi, 110053</p>-->
                                                <!--<p>* OTP and refrence code will be provided to you to verify your-->
                                                <!--    identity at time of appointment</p>-->
                                                <a style="display:block;margin:auto;" class="btn btn-outline-primary border-2 rounded-pill btn-lg mt-4 fs-0 py-2 mx-2"
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
        <!-- <section> begin ============================-->

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('submitBtn').addEventListener('click', function() {
                // Update the hidden input value with the index of the tab to open
                document.getElementById('activeTabIndex').value =
                1; // Index of the tab to open (0-based)
            });
        });
        </script>
        <script>
       document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('knowadvo').addEventListener('submit', function(event) {
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
                    document.querySelector('[href="#bootstrap-wizard-tab2"]').click(); // Change tab
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

        

        @endsection