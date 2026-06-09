@extends('admin.layout.adminlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Patient Details</h4>

                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $patient->id }}</td>
                    </tr>

                    <tr>
                        <th>Patient Name</th>
                        <td>{{ $patient->patient_name }}</td>
                    </tr>

                    <tr>
                        <th>Age</th>
                        <td>{{ $patient->age }}</td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td>{{ $patient->gender }}</td>
                    </tr>

                    <tr>
                        <th>Phone Number</th>
                        <td>{{ $patient->phone_number }}</td>
                    </tr>
                    <tr>
                        <th>Boold Group</th>
                        <td>{{ $patient->boold_group }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $patient->address }}</td>
                    </tr>
                    <tr>
                        <th>Assigned Doctor</th>
                        <td>{{ $patient->assigned_doctor }}</td>
                    </tr>
                    
                    


                    <tr>
                        <th>Status</th>
                        <td>
                            @if($patient->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                    </tr>
                </table>
                 </div>
        </div>

    </div>
</div>
@endsection