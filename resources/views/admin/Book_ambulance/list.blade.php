@extends('admin.layout.adminlayout')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Book Ambulance List</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Mobile No</th>
                                    <th>Pickup Location</th>
                                    <th>Drop Location</th>
                                    <th>Booking Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($ambulances as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->full_name }}</td>
                                        <td>{{ $row->mobile_no }}</td>
                                        <td>{{ $row->pickup_location }}</td>
                                        <td>{{ $row->drop_location }}</td>
                                        <td>{{ $row->booking_date }}</td>
                                        <td>
                                            <a href="{{ route('bookambulance.view', $row->id) }}" class="btn btn-info btn-sm">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            No Record Found
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
