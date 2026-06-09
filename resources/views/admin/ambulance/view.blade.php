@extends('admin.layout.adminlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Ambulance Details</h4>

                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $ambulance->id }}</td>
                    </tr>

                    <tr>
                        <th>Ambulance Name</th>
                        <td>{{ $ambulance->ambulance_name }}</td>
                    </tr>

                    <tr>
                        <th>ambulance_no</th>
                        <td>{{ $ambulance->ambulance_no }}</td>
                    </tr>

                    <tr>
                        <th>driver name</th>
                        <td>{{ $ambulance->driver_name }}</td>
                    </tr>

                    <tr>
                        <th>address</th>
                        <td>{{ $ambulance->address }}</td>
                    </tr>


                    <tr>
                        <th>Status</th>
                        <td>
                            @if($ambulance->status == 1)
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