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
                            <h4 class="card-title">Appointment List</h4>
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th> Patient Name.</th>
                                            <th>Doctor id</th>
                                            <th>Appointment Date</th>
                                            <th>Appointment Time</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($data as $row)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td> <a
                                                        href='/admin/patient/view/{{ $row->patient_id }}'>{{ $row->patient_name }}</a>
                                                </td>
                                                <td>{{ $row->doctor_id }}</td>
                                                <td>{{ $row->appointment_date }}</td>
                                                <td>{{ $row->appointment_time }}</td>
                                                <td>{{ $row->reason }}</td>
                                                <td>{{ $row->status === 1 ? 'Active ' : 'Inactive ' }}</td>
                                                <td class="d-flex">

                                                    <a class="btn btn-info m-1"
                                                        href='/admin/appointment/view/{{ $row->id }}'>View</a>
                                                    <a class="btn btn-warning m-1 "
                                                        href="/admin/appointment/edit/{{ $row->id }}">Edit</a>
                                                    <form action="{{ route('appointment.delete', $row->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger m-1"
                                                            onclick="return confirm('Are you sure you want to delete?')">
                                                            Delete
                                                        </button>
                                                    </form>
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
