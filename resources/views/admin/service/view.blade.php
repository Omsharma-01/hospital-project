@extends('admin.layout.adminlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Service Details</h4>

                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $service->id }}</td>
                    </tr>

                    <tr>
                        <th>Service Name</th>
                        <td>{{ $service->service_name }}</td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td>{{ $service->description }}</td>
                    </tr>

                    <tr>
                        <th>Price</th>
                        <td>{{ $service->price }}</td>
                    </tr>

                    <tr>
                        <th>Duration</th>
                        <td>{{ $service->duration }}</td>
                    </tr>
                    
                    <tr>
                        <th>Category</th>
                        <td>{{ $service->category }}</td>
                    </tr>
                    
                    <tr>
                        <th>File Upload</th>
                        <td>{{ $service->file_upload }}</td>
                    </tr>


                    <tr>
                        <th>Status</th>
                        <td>
                            @if($service->status == 1)
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