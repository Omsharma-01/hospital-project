{{-- patient/appointments.blade.php --}}
@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary: #f64d86;
        --primary-light: #fff0f5;
        --shadow: 0 4px 20px rgba(0,0,0,0.06);
        --radius: 16px;
    }

    .appointment-wrapper {
        background: #f5f7fb;
        min-height: 100vh;
        padding: 30px 0 60px;
    }

    .appointment-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .page-header h3 {
        font-weight: 700;
        color: #1a1a2e;
        margin: 0;
    }

    .btn-primary-custom {
        background: var(--primary);
        color: #fff;
        border: none;
        padding: 10px 25px;
        border-radius: 50px;
        font-weight: 600;
        transition: 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-primary-custom:hover {
        background: var(--primary-dark);
        color: #fff;
        transform: translateY(-2px);
    }

    .appointment-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        border: none;
        overflow: hidden;
        transition: 0.3s;
    }

    .appointment-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }

    .appointment-card .card-body {
        padding: 24px;
    }

    .appointment-card .doctor-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        background: var(--primary-light);
        border: 3px solid #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    .appointment-card .doctor-info h6 {
        font-weight: 700;
        margin: 0;
        color: #1a1a2e;
    }

    .appointment-card .doctor-info small {
        color: #6b7280;
        font-size: 13px;
    }

    .appointment-card .appointment-date-time {
        background: var(--primary-light);
        padding: 10px 15px;
        border-radius: 10px;
        text-align: center;
        min-width: 70px;
    }

    .appointment-card .appointment-date-time .day {
        font-size: 22px;
        font-weight: 700;
        color: var(--primary);
        display: block;
        line-height: 1;
    }

    .appointment-card .appointment-date-time .month {
        font-size: 11px;
        color: #6b7280;
        text-transform: uppercase;
    }

    .appointment-card .appointment-date-time .time {
        font-size: 12px;
        font-weight: 600;
        color: #1a1a2e;
        margin-top: 4px;
        display: block;
    }

    .appointment-status {
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    .status-confirmed { background: #e8f5e9; color: #2e7d32; }
    .status-pending { background: #fff3e0; color: #e65100; }
    .status-completed { background: #e3f2fd; color: #0d47a1; }
    .status-cancelled { background: #fce4ec; color: #c62828; }

    .search-box {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .search-box .form-control,
    .search-box .form-select {
        height: 48px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
    }

    .search-box .form-control:focus,
    .search-box .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(246,77,134,0.12);
    }

    .doctor-select-item {
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 15px;
        text-align: center;
        cursor: pointer;
        transition: 0.3s;
        background: #fff;
    }

    .doctor-select-item:hover,
    .doctor-select-item.selected {
        border-color: var(--primary);
        background: var(--primary-light);
        box-shadow: 0 0 0 3px rgba(246,77,134,0.15);
    }

    .doctor-select-item img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 8px;
    }

    .doctor-select-item h6 {
        font-weight: 600;
        font-size: 14px;
        margin: 0;
    }

    .doctor-select-item small {
        color: #6b7280;
        font-size: 12px;
    }

    .modal-content {
        border-radius: var(--radius);
        border: none;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    }

    .modal .form-control,
    .modal .form-select {
        height: 48px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        background: #fafafa;
    }

    .modal .form-control:focus,
    .modal .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(246,77,134,0.12);
        background: #fff;
    }

    .modal textarea.form-control {
        height: 90px;
        resize: vertical;
    }

    .btn-close-custom {
        background: #f5f5f5;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 600;
        transition: 0.3s;
        color: #6b7280;
    }

    .btn-close-custom:hover {
        background: #e5e7eb;
        color: #1a1a2e;
    }

    @media (max-width: 768px) {
        .page-header { flex-direction: column; align-items: stretch; }
        .search-box { flex-direction: column; }
        .search-box .form-control,
        .search-box .form-select { min-width: 100%; }
    }
</style>

<div class="appointment-wrapper">
    <div class="appointment-container">

        <div class="page-header">
            <div>
                <h3><i class="bi bi-calendar-check me-2" style="color: var(--primary);"></i>My Appointments</h3>
                <p>View and manage all your scheduled appointments</p>
            </div>
            <button type="button" class="btn-primary-custom" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                <i class="bi bi-plus-lg"></i> Book Appointment
            </button>
        </div>
      @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        <!-- Search -->
        <form action="{{ route('patient.appointments') }}" method="GET" class="search-box mb-4">
            <input type="text" name="search" class="form-control" placeholder="Search by doctor name..." value="{{ request('search') }}">
            <select name="status" class="form-select">
                <option value="">All Status</option>
                <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Pending</option>
                <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Confirmed</option>
                <option value="2" {{ request('status') == '2' ? 'selected' : '' }}>Completed</option>
                <option value="3" {{ request('status') == '3' ? 'selected' : '' }}>Cancelled</option>
            </select>
            <button type="submit" class="btn-primary-custom" style="background: #e5e7eb; color: #333;">
                <i class="bi bi-search"></i> Search
            </button>
        </form>

        <!-- Appointments List -->
        <div class="row g-4">
            @forelse($appointments as $appointment)
                @php
                    $statusMap = [0 => 'Pending', 1 => 'Confirmed', 2 => 'Completed', 3 => 'Cancelled'];
                    $statusClass = ['status-pending', 'status-confirmed', 'status-completed', 'status-cancelled'];
                @endphp
                <div class="col-md-6 col-lg-4">
                    <div class="appointment-card">
                        <div class="card-body">
                            <div class="d-flex align-items-start gap-3">
                                <img src="{{ asset('uploads/doctors/' . ($appointment->doctor->file_upload ?? 'default-doctor.jpg')) }}" 
                                     alt="Doctor" class="doctor-avatar">
                                <div class="doctor-info flex-grow-1">
                                    <h6> {{ $appointment->doctor->doctor_name ?? 'N/A' }}</h6>
                                    <small><i class="bi bi-stethoscope me-1"></i>{{ $appointment->doctor->specialization ?? 'General' }}</small>
                                    <div class="mt-1">
                                        <span class="appointment-status {{ $statusClass[$appointment->status] ?? 'status-pending' }}">
                                            {{ $statusMap[$appointment->status] ?? 'Pending' }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3 d-flex align-items-center gap-3">
                                <div class="appointment-date-time">
                                    <span class="day">{{ date('d', strtotime($appointment->appointment_date)) }}</span>
                                    <span class="month">{{ date('M', strtotime($appointment->appointment_date)) }}</span>
                                    <span class="time">{{ date('g:i A', strtotime($appointment->appointment_time)) }}</span>
                                </div>
                                <div>
                                    <p class="mb-0" style="font-size: 14px; font-weight: 500;">{{ $appointment->reason ?: 'Checkup' }}</p>
                                    <p class="text-muted mb-0" style="font-size: 13px;">
                                        <i class="bi bi-geo-alt me-1"></i>{{ $appointment->doctor->address ?? 'Hospital' }}
                                    </p>
                                </div>
                            </div>

                            <div class="mt-3 d-flex gap-2">
                                @if($appointment->status != 3 && $appointment->status != 2)
                                    <form action="{{ route('patient.appointments.cancel', $appointment->id) }}" method="post">
                                        @csrf
                                        @method('post')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to cancel this appointment?')">
                                            <i class="bi bi-x-circle"></i> Cancel
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <i class="bi bi-calendar-x" style="font-size: 60px; color: #d1d5db;"></i>
                        <h5 class="mt-3">No Appointments Found</h5>
                        <p class="text-muted">Book your first appointment now.</p>
                        <button type="button" class="btn-primary-custom" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                            <i class="bi bi-plus-lg"></i> Book Appointment
                        </button>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $appointments->links() }}
        </div>

    </div>
</div>

<!-- Book Appointment Modal -->
<div class="modal fade" id="appointmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('patient.appointments.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-calendar-plus me-2" style="color: var(--primary);"></i>
                        Book Appointment
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Patient Name</label>
                            <input type="text" name="patient_name" class="form-control" value="{{ old('patient_name', Auth::user()->name) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $patient->phone_number ?? '') }}" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" value="{{ old('age', $patient->age ?? '') }}" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="form-select" required>
                                <option value="">Select</option>
                                <option value="male" {{ old('gender', $patient->gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender', $patient->gender ?? '') == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender', $patient->gender ?? '') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Blood Group</label>
                            <select name="blood_group" class="form-select">
                                <option value="">Select</option>
                                <option value="A+" {{ old('blood_group', $patient->blood_group ?? '') == 'A+' ? 'selected' : '' }}>A+</option>
                                <option value="A-" {{ old('blood_group', $patient->blood_group ?? '') == 'A-' ? 'selected' : '' }}>A-</option>
                                <option value="B+" {{ old('blood_group', $patient->blood_group ?? '') == 'B+' ? 'selected' : '' }}>B+</option>
                                <option value="B-" {{ old('blood_group', $patient->blood_group ?? '') == 'B-' ? 'selected' : '' }}>B-</option>
                                <option value="AB+" {{ old('blood_group', $patient->blood_group ?? '') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                <option value="AB-" {{ old('blood_group', $patient->blood_group ?? '') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                <option value="O+" {{ old('blood_group', $patient->blood_group ?? '') == 'O+' ? 'selected' : '' }}>O+</option>
                                <option value="O-" {{ old('blood_group', $patient->blood_group ?? '') == 'O-' ? 'selected' : '' }}>O-</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control" rows="2">{{ old('address', $patient->address ?? '') }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Select Doctor</label>
                            <select name="doctor_id" class="form-select" required>
                                <option value="">Choose Doctor</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}" {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>
                                         {{ $doctor->doctor_name }} - {{ $doctor->specialization }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                            <div class="col-md-6">
                            <label class="form-label">Select Hospital</label>
                            <select name="hospital_id" class="form-select" required>
                                <option value="">Choose Hospital</option>
                                @foreach($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}" {{ old('hospital_id') == $hospital->id ? 'selected' : '' }}>
                                         {{ $hospital->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Appointment Date</label>
                            <input type="date" name="appointment_date" class="form-control" value="{{ old('appointment_date', date('Y-m-d', strtotime('+1 day'))) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Appointment Time</label>
                            <select name="appointment_time" class="form-select" required>
                                <option value="">Select Time</option>
                                <option value="09:00" {{ old('appointment_time') == '09:00' ? 'selected' : '' }}>09:00 AM</option>
                                <option value="09:30" {{ old('appointment_time') == '09:30' ? 'selected' : '' }}>09:30 AM</option>
                                <option value="10:00" {{ old('appointment_time') == '10:00' ? 'selected' : '' }}>10:00 AM</option>
                                <option value="10:30" {{ old('appointment_time') == '10:30' ? 'selected' : '' }}>10:30 AM</option>
                                <option value="11:00" {{ old('appointment_time') == '11:00' ? 'selected' : '' }}>11:00 AM</option>
                                <option value="11:30" {{ old('appointment_time') == '11:30' ? 'selected' : '' }}>11:30 AM</option>
                                <option value="12:00" {{ old('appointment_time') == '12:00' ? 'selected' : '' }}>12:00 PM</option>
                                <option value="14:00" {{ old('appointment_time') == '14:00' ? 'selected' : '' }}>02:00 PM</option>
                                <option value="14:30" {{ old('appointment_time') == '14:30' ? 'selected' : '' }}>02:30 PM</option>
                                <option value="15:00" {{ old('appointment_time') == '15:00' ? 'selected' : '' }}>03:00 PM</option>
                                <option value="15:30" {{ old('appointment_time') == '15:30' ? 'selected' : '' }}>03:30 PM</option>
                                <option value="16:00" {{ old('appointment_time') == '16:00' ? 'selected' : '' }}>04:00 PM</option>
                                <option value="16:30" {{ old('appointment_time') == '16:30' ? 'selected' : '' }}>04:30 PM</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Reason for Visit</label>
                            <input type="text" name="reason" class="form-control" placeholder="Brief reason" value="{{ old('reason') }}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn-primary-custom">
                        <i class="bi bi-check-circle me-2"></i> Confirm Booking
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection