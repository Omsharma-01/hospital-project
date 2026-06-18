@extends('admin.layout.adminlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Appointment Details</h4>

                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $appointment->id }}</td>
                    </tr>

                    <tr>
                        <th>Patient Name</th>
                        <td>{{ $appointment->patient_name }}</td>
                    </tr>

                    <tr>
                        <th>Doctor ID</th>
                        <td>{{ $appointment->doctor_id }}</td>
                    </tr>

                    <tr>
                        <th>Appointment Date</th>
                        <td>{{ $appointment->appointment_date }}</td>
                    </tr>

                    <tr>
                        <th>Appointment Time</th>
                        <td>{{ $appointment->appointment_time }}</td>
                    </tr>

                    <tr>
                        <th>Reason</th>
                        <td>{{ $appointment->reason }}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>
                            @if($appointment->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                    </tr>
                </table>
{{-- 
                <a href="{{ route('appointment.edit', $appointment->id) }}"
                    class="btn btn-warning">
                    Edit
                </a>

                <a href="/admin/appointment/list"
                    class="btn btn-secondary">
                    Back
                </a> --}}

            </div>
        </div>

    </div>
</div>
@endsection