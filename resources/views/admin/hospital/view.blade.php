@extends('admin.layout.adminlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Hospital Details</h4>

                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $hospital->id }}</td>
                    </tr>

                    <tr>
                        <th>Doctor Name</th>
                        <td>{{ $hospital->name }}</td>
                    </tr>

                    <tr>
                        <th>Address</th>
                        <td>{{  $hospital->address }}</td>
                    </tr>

                    <tr>
                        <th>Email address</th>
                        <td>{{ $hospital->email }}</td>
                    </tr>

                    <tr>
                        <th>City</th>
                        <td>{{ $hospital->city }}</td>
                    </tr>
                    <tr>
                        <th>pin code</th>
                        <td>{{ $hospital->pin_code }}</td>
                    </tr>
                    
                    


                    <tr>
                        <th>Status</th>
                        <td>
                            @if($hospital->status == 1)
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