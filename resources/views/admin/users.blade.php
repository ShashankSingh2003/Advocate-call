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

                            <form action="{{ url('/admin/users') }}" method="GET"
                                class="col-md-11 d-flex flex-column flex-md-row">
                                <!-- Existing search input -->
                                <div class="form-group flex-grow-1">
                                    <label for="category">Search by name:</label>
                                    <input type="search" name="search" class="form-control mb-2"
                                        placeholder="Enter the name" value="{{ $search }}" />
                                </div>

                                <!-- New category filter dropdown -->
                                <div class="form-group flex-grow-1 ms-md-3 mt-3 mt-md-0">
                                    <label for="category">Filter by category:</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="" {{ $categoryFilter == '' ? 'selected' : '' }}>All Categories
                                        </option>
                                        <option value="Family Matters"
                                            {{ $categoryFilter == 'Family Matters' ? 'selected' : '' }}>Family Matters
                                        </option>
                                        <option value="Matrimonial/Divorce Matters"
                                            {{ $categoryFilter == 'Matrimonial/Divorce Matters' ? 'selected' : '' }}>
                                            Matrimonial/Divorce Matters</option>
                                        <option value="Civil Matters"
                                            {{ $categoryFilter == 'Civil Matters' ? 'selected' : '' }}>Civil Matters
                                        </option>
                                        <option value="Property Disputes"
                                            {{ $categoryFilter == 'Property Disputes' ? 'selected' : '' }}>Property Disputes
                                        </option>
                                        <option value="Succession Disputes"
                                            {{ $categoryFilter == 'Succession Disputes' ? 'selected' : '' }}>Succession
                                            Disputes</option>
                                        <option value="Criminal Matters"
                                            {{ $categoryFilter == 'Criminal Matters' ? 'selected' : '' }}>Criminal Matters
                                        </option>
                                        <option value="Constitutional Matters"
                                            {{ $categoryFilter == 'Constitutional Matters' ? 'selected' : '' }}>
                                            Constitutional Matters</option>
                                        <option value="Commercial Litigation"
                                            {{ $categoryFilter == 'Commercial Litigation' ? 'selected' : '' }}>Commercial
                                            Litigation</option>
                                        <option value="Service Matters"
                                            {{ $categoryFilter == 'Service Matters' ? 'selected' : '' }}>Service Matters
                                        </option>
                                        <option value="Defamation Matters"
                                            {{ $categoryFilter == 'Defamation Matters' ? 'selected' : '' }}>Defamation
                                            Matters</option>
                                        <option value="Damages Matters"
                                            {{ $categoryFilter == 'Damages Matters' ? 'selected' : '' }}>Damages Matters
                                        </option>
                                        <option value="Government Litigation"
                                            {{ $categoryFilter == 'Government Litigation' ? 'selected' : '' }}>Government
                                            Litigation</option>
                                        <option value="Landlord and Tenant Dispute"
                                            {{ $categoryFilter == 'Landlord and Tenant Dispute' ? 'selected' : '' }}>
                                            Landlord and Tenant Dispute</option>
                                        <option value="Traders Dispute"
                                            {{ $categoryFilter == 'Traders Dispute' ? 'selected' : '' }}>Traders Dispute
                                        </option>
                                        <option value="Environmental Matters"
                                            {{ $categoryFilter == 'Environmental Matters' ? 'selected' : '' }}>
                                            Environmental Matters</option>
                                        <option value="Human Rights Matters"
                                            {{ $categoryFilter == 'Human Rights Matters' ? 'selected' : '' }}>Human Rights
                                            Matters</option>
                                        <option value="Local Authority Dispute"
                                            {{ $categoryFilter == 'Local Authority Dispute' ? 'selected' : '' }}>Local
                                            Authority Dispute</option>
                                        <option value="Electricity/Water Matter Disputes"
                                            {{ $categoryFilter == 'Electricity/Water Matter Disputes' ? 'selected' : '' }}>
                                            Electricity/Water Matter Disputes</option>
                                    </select>
                                </div>

                                <div class="ms-2 mt-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <a href="{{ url('/admin/users') }}" class="ms-2">
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

                    <table class="datatables-products table border-top dataTable no-footer dtr-column collapsed"
                        id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 954px;">

                        <thead>
                            <tr>
                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="serial-number: activate to sort column ascending">S.
                                    No.</th>

                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="category: activate to sort column ascending">Name</th>

                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="category: activate to sort column ascending">Email</th>

                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="category: activate to sort column ascending">Booked On</th>

                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="category: activate to sort column ascending">Category Type
                                </th>

                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="category: activate to sort column ascending">Appointment Type
                                </th>

                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="category: activate to sort column ascending">Appointment Date
                                </th>

                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="category: activate to sort column ascending">Appointment Time
                                </th>                      

                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="category: activate to sort column ascending">Otp</th>

                                <th class="" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" aria-label="category: activate to sort column ascending">Action</th>


                                <div class="d-flex justify-content-start justify-content-md-end align-items-baseline mb-2">
                                    <div
                                        class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0">

                                    </div>
                                </div>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($peoples as $index => $people)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $people->name }}</td>
                                    <td>{{ $people->email }}</td>
                                    <td>{{ \Carbon\Carbon::parse($people->created_at)->format('M d, Y g:i A') }}</td>
                                    <td>{{ $people->categoryType }}</td>
                                    <td>{{ $people->appointmentType }}</td>
                                    <td>{{ \Carbon\Carbon::parse($people->selectedAppointmentDate)->format('M d, Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($people->selectedAppointmentTime)->format('g:i A') }}</td>
                                  
                                    
                                   
                                    <td>
                                        @if (!$people->otp)
                                            <button class="btn btn-sm btn-primary" onclick="getOTP('{{ $people->id }}')">Get OTP</button>
                                        @else
                                            <span id="otpCell{{ $people->id }}">{{ $people->otp }}</span>
                                        @endif
                                    </td>


                                    <td>
                                        <div class="d-inline-block text-nowrap">
                                            <a href="{{ route('leads.view', $people->id) }}"
                                                class="btn btn-sm btn-icon"><i class="bx bx-show"></i></a>
                                        </div>
                                    </td>
                                    <!-- Add other table data here -->

                                  
                                </tr>
                            @endforeach
                            @forelse ($peoples as $index => $people)
                            <!-- Your existing table rows -->
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No data found.</td>
                            </tr>
                        @endforelse

                        </tbody>

                    </table>
                    <!-- Include jQuery library -->
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

                    <script>
                        function getOTP(personId) {
                            $.ajax({
                                url: '/save-otp/' + personId,
                                method: 'GET',
                                success: function(response) {
                                    // Update the DOM to display the retrieved OTP
                                    alert('OTP retrieved and saved: ' + response.otp);
                                    // You can update the UI as needed, e.g., by updating the corresponding <td> element
                                    $('#otpCell' + personId).html(response.otp);
                                },
                                error: function() {
                                    alert('Failed to retrieve and save OTP.');
                                }
                            });
                        }
                    </script>


                </div>


            </div>
        </div>

    @endsection
