<!--================= Meta tag =================-->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

<title>Admin | @yield('title', 'Dashboard')</title>

<meta name="description" content="" />

<!-- Favicon -->
<link rel="apple-touch-icon" href="{{ asset('assets/website/images/fav.png') }}">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/fonts/boxicons.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/css/custom.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/website/fonts/elegant-icon.css') }}">

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/libs/apex-charts/apex-charts.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('/assets/dashboard/css/font-awesome.min.css')}}" />
<!-- Page CSS -->
<link href="{{ asset('/assets/dashboard/css/page-profile.css')}}" rel="stylesheet">



<!-- Helpers -->
<script src="{{ asset('assets/dashboard/vendor/js/helpers.js') }}"></script>
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/dashboard/js/config.js') }}"></script>

<!-- Js links-->
<script src="{{ asset('/assets/dashboard/js/jquery-3.7.0.min.js')}}"></script>
<!-- <script src="{{ asset('/assets/dashboard/js/jquery.validate.min.js')}}"></script>   -->
<script src="{{ asset('assets/dashboard/vendor/libs/jquery/jquery.js') }}"></script>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
