@extends('admin.layout.adminlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit Appointment Booking</h4>

                        <form action="{{ route('appointment.update', $data->id) }}"
                              method="POST"
                              class="forms-sample">

                            @csrf
                            {{-- @method('PUT') --}}

                            <div class="form-group">
                                <label>Patient Name</label>
                                <input type="text"
                                       name="patient_name"
                                       class="form-control"
                                       value="{{ $data->patient_name }}">
                            </div>

                            <div class="form-group">
                                <label>Doctor</label>
                                <select class="form-control" name="doctor_id">
                                    @foreach($doctor as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $row->id == $data->doctor_id ? 'selected' : '' }}>
                                            {{ $row->doctor_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Appointment Date</label>
                                <input type="date"
                                       name="appointment_date"
                                       class="form-control"
                                       value="{{ $data->appointment_date }}">
                            </div>
<div class="form-group">
    <label>Appointment Time</label>
    <input type="time"
           name="appointment_time"
           class="form-control"
           value="{{ date('H:i', strtotime($data->appointment_time)) }}">
</div>

                            <div class="form-group">
                                <label>Reason</label>
                                <input type="text"
                                       name="reason"
                                       class="form-control"
                                       value="{{ $data->reason }}">
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1"
                                        {{ $data->status == 1 ? 'selected' : '' }}>
                                        Active
                                    </option>

                                    <option value="0"
                                        {{ $data->status == 0 ? 'selected' : '' }}>
                                        Inactive
                                    </option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">
                                Update
                            </button>

                       
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection