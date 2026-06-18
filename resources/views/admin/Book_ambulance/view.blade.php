@extends('admin.layout.adminlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Book Ambulance Details</h4>
            </div>

            <div class="card-body">

                <table class="table table-bordered">
                    <tr>
                        <th width="30%">Full Name</th>
                        <td>{{ $ambulance->full_name }}</td>
                    </tr>

                    <tr>
                        <th>Mobile No</th>
                        <td>{{ $ambulance->mobile_no }}</td>
                    </tr>

                    <tr>
                        <th>Pickup Location</th>
                        <td>{{ $ambulance->pickup_location }}</td>
                    </tr>

                    <tr>
                        <th>Drop Location</th>
                        <td>{{ $ambulance->drop_location }}</td>
                    </tr>

                    <tr>
                        <th>Booking Date</th>
                        <td>{{ $ambulance->booking_date }}</td>
                    </tr>

                    <tr>
                        <th>Last Update</th>
                        <td>{{ $ambulance->last_update }}</td>
                    </tr>

                    <tr>
                        <th>Created At</th>
                        <td>{{ $ambulance->created_at }}</td>
                    </tr>
                </table>

                <a href="{{ route('bookambulance.list') }}"
                    class="btn btn-secondary">
                    Back
                </a>

            </div>
        </div>

    </div>
</div>
@endsection