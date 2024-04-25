@extends('layouts.dashboard')

@section('content')

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

<div class="card">
    <div class="card-datatable table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <div class="card-header d-flex rounded-0 flex-wrap py-md-0">
                <div class="container">
                    <div class="row m-2">
                        <form action="" class="col-md-11 d-flex">
                            <div class="form-group flex-grow-1">
                                <input type="search" name="search" id="" class="form-control mb-2" placeholder="Search by name" value="{{$search}}" />
                            </div>
                            <div class="ms-2">
                                <button class="btn btn-primary">Search</button>
                                <a href="{{'/knownadvocate'}}" class="ms-2">
                                    <button class="btn btn-primary" type="button">Reset</button>
                                </a>
                            </div>
                        </form>
                    </div>
                    
            
                    <div class="d-flex justify-content-start me-0 ms-0 pe-0">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                            <h5 class="h5">All Users </h5>
                        </div>
                    </div>
                    
                <div class="d-flex justify-content-start justify-content-md-end align-items-baseline p-2">
                    <div
                        class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0">
                        <div class="dt-buttons d-flex flex-wrap">
                            
                        </div>
                    </div>
                </div>
            </div>

            <table class="datatables-products table border-top dataTable no-footer dtr-column collapsed" id="DataTables_Table_0"
            aria-describedby="DataTables_Table_0_info" style="width: 954px;">
        
            <thead>
                <tr>
                    <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="serial-number: activate to sort column ascending">Serial Number</th>
    
                    <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="category: activate to sort column ascending">Name of Advocate</th>
    
                    <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="category: activate to sort column ascending">District</th>
    
                    <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="category: activate to sort column ascending">Area of Practice</th>
    
                    <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="category: activate to sort column ascending">Address</th>
    
                    <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="category: activate to sort column ascending">Mobile Number</th>
    
                    <!-- Add other table headers here -->
                </tr>
            </thead>
    
            <tbody>
                @foreach($known_advocates as $index => $knownadvocate)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $knownadvocate->name }}</td>
                        <td>{{ $knownadvocate->district }}</td>
                        <td>{{ $knownadvocate->area_of_practice }}</td>
                        <td>{{ $knownadvocate->address }}</td>
                        <td>{{ $knownadvocate->mobile }}</td>
                        <!-- Add other table data here -->
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    
        <!-- ... (existing code) ... -->
    </div>
    @endsection