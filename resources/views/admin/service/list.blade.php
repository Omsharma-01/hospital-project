@extends('admin.layout.adminlayout')
@section('content')
    <div class="main-panel">


        <div class="content-wrapper">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Service Table</h4>
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>

                                            <th> Image.</th>

                                            <th> Service Name.</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Duration</th>
                                            <th>Category</th>
                                        {{-- <th>File Upload</th> --}}
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($data as $row)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td><img src="{{ asset('uploads/services/' . $row->file_upload) }}"
                                                        width="100"></td>
                                                <td>{{ $row->service_name }}</td>
                                                <td>{{ $row->description }}</td>
                                                <td>RS {{ $row->price }} </td>
                                                <td>{{ $row->duration }}</td>
                                                <td>{{ $row->category }}</td>
                                                {{-- <td>{{$row->file_upload}}</td> --}}

                                                <td>{{ $row->status === 1 ? 'Active ' : 'Inactive ' }}</td>
                                                <td class="d-flex">

                                                    <a class="btn btn-info m-1"
                                                        href='/admin/service/view/{{ $row->id }}'>View</a>
                                                    <a class="btn btn-warning m-1"
                                                        href="/admin/service/edit/{{ $row->id }}">Edit</a>
                                                    <form action="{{ route('service.delete', $row->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger m-1"
                                                            onclick="return confirm('Are you sure you want to delete?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- partial -->
    </div>
@endsection