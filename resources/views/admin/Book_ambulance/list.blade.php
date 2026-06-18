@extends('admin.layout.adminlayout')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Book Ambulance List</h4>
                    <a href="{{ route('bookambulance.create') }}" class="btn btn-light btn-sm">
                        + Create New
                    </a>
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
                                    <th>Status</th>
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
                                        <td><span class="badge bg-info">{{ ucfirst($row->status) }}</span></td>
                                        <td class="d-flex gap-2">
                                            <a href="{{ route('bookambulance.show', $row->id) }}" class="btn btn-info btn-sm">
                                                View
                                            </a>
                                            <a href="{{ route('bookambulance.edit', $row->id) }}" class="btn btn-warning btn-sm">
                                                Edit
                                            </a>
                                            <form action="{{ route('bookambulance.delete', $row->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
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
