@extends('admin.layout.adminlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Doctor Details</h4>

                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $doctor->id }}</td>
                    </tr>

                    <tr>
                        <th> Name</th>
                        <td>{{ $doctor->doctor_name }}</td>
                    </tr>

                    <tr>
                        <th>Specialization</th>
                        <td>{{  $doctor->specialization }}</td>
                    </tr>

                    <tr>
                        <th>Phone Number</th>
                        <td>{{ $doctor->phone }}</td>
                    </tr>

                    <tr>
                        <th>Email Address</th>
                        <td>{{ $doctor->email }}</td>
                    </tr>
                    <tr>
                        <th>Experience</th>
                        <td>{{ $doctor->experience }}</td>
                    </tr>
                    <tr>
                        <th>Fees</th>
                        <td>{{ $doctor->fees }}</td>
                    </tr>
                    <tr>
                        <th>About Us</th>
                        <td>{{ $doctor->about_us }}</td>
                    </tr>
                    <tr>
                        <th>File Upload</th>
                        <td>{{ $doctor->file_upload }}</td>
                    </tr>


                    <tr>
                        <th>Status</th>
                        <td>
                            @if($doctor->status == 1)
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

