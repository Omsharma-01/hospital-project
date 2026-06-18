{{-- patient/appointments/index.blade.php --}}
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

    .page-header p {
        color: #6b7280;
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
        box-shadow: 0 8px 25px rgba(246,77,134,0.3);
    }

    /* Appointment Cards */
    .appointment-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        border: none;
        overflow: hidden;
        transition: 0.3s;
        position: relative;
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

    .appointment-card .status-badge {
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }

    .appointment-card .status-confirmed {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .appointment-card .status-pending {
        background: #fff3e0;
        color: #e65100;
    }

    .appointment-card .status-completed {
        background: #e3f2fd;
        color: #0d47a1;
    }

    .appointment-card .status-cancelled {
        background: #fce4ec;
        color: #c62828;
    }

    .appointment-card .btn-action {
        background: transparent;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 6px 14px;
        font-size: 13px;
        transition: 0.3s;
        color: #6b7280;
    }

    .appointment-card .btn-action:hover {
        background: var(--primary-light);
        border-color: var(--primary);
        color: var(--primary);
    }

    .btn-action-danger:hover {
        background: #fce4ec;
        border-color: #c62828;
        color: #c62828;
    }

    /* Search */
    .search-box {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .search-box .form-control {
        height: 48px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        min-width: 250px;
    }

    .search-box .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(246,77,134,0.12);
    }

    .search-box .form-select {
        height: 48px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        min-width: 150px;
    }

    .search-box .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(246,77,134,0.12);
    }

    /* Modal */
    .modal-content {
        border-radius: var(--radius);
        border: none;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    }

    .modal-header {
        border-bottom: 1px solid #f0f0f0;
        padding: 20px 25px;
    }

    .modal-header h5 {
        font-weight: 700;
        color: #1a1a2e;
    }

    .modal-body {
        padding: 25px;
    }

    .modal-footer {
        border-top: 1px solid #f0f0f0;
        padding: 20px 25px;
    }

    .modal .form-label {
        font-weight: 600;
        font-size: 14px;
        color: #333;
    }

    .modal .form-control, .modal .form-select {
        height: 48px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        font-size: 14px;
        background: #fafafa;
    }

    .modal .form-control:focus, .modal .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(246,77,134,0.12);
        background: #fff;
    }

    .modal textarea.form-control {
        height: 90px;
        resize: vertical;
    }

    .modal .btn-close-custom {
        background: #f5f5f5;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 600;
        transition: 0.3s;
        color: #6b7280;
    }

    .modal .btn-close-custom:hover {
        background: #e5e7eb;
        color: #1a1a2e;
    }

    /* Doctor selection grid in modal */
    .doctor-select-item {
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 15px;
        text-align: center;
        cursor: pointer;
        transition: 0.3s;
        background: #fff;
    }

    .doctor-select-item:hover {
        border-color: var(--primary);
        background: var(--primary-light);
    }

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

    /* Responsive */
    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            align-items: stretch;
        }
        .search-box {
            flex-direction: column;
        }
        .search-box .form-control,
        .search-box .form-select {
            min-width: 100%;
        }
        .appointment-card .card-body {
            padding: 16px;
        }
    }
</style>

<div class="appointment-wrapper">
    <div class="appointment-container">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h3><i class="bi bi-calendar-check me-2" style="color: var(--primary);"></i>My Appointments</h3>
                <p>View and manage all your scheduled appointments</p>
            </div>
            <button type="button" class="btn-primary-custom" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                <i class="bi bi-plus-lg"></i> Book Appointment
            </button>
        </div>

        <!-- Search & Filter -->
        <div class="search-box mb-4">
            <input type="text" class="form-control" placeholder="Search by doctor name, department...">
            <select class="form-select">
                <option value="">All Status</option>
                <option value="confirmed">Confirmed</option>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
            <select class="form-select">
                <option value="">Department</option>
                <option value="gynecology">Gynecology</option>
                <option value="pediatrics">Pediatrics</option>
                <option value="cardiology">Cardiology</option>
                <option value="orthopedics">Orthopedics</option>
            </select>
            <button class="btn-primary-custom" style="background: #e5e7eb; color: #333;">
                <i class="bi bi-search"></i> Search
            </button>
        </div>

        <!-- Appointment List -->
        <div class="row g-4">

            <!-- Appointment Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="appointment-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-3">
                            <img src="{{ asset('uploads/doctors/default-doctor.jpg') }}" alt="Doctor" class="doctor-avatar">
                            <div class="doctor-info flex-grow-1">
                                <h6>Dr. Priya Sharma</h6>
                                <small><i class="bi bi-stethoscope me-1"></i>Gynecology</small>
                                <div class="mt-1">
                                    <span class="status-badge status-confirmed">Confirmed</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 d-flex align-items-center gap-3">
                            <div class="appointment-date-time">
                                <span class="day">25</span>
                                <span class="month">Dec</span>
                                <span class="time">10:30 AM</span>
                            </div>
                            <div>
                                <p class="mb-0" style="font-size: 14px; font-weight: 500;">
                                    <i class="bi bi-clock me-1"></i>Checkup
                                </p>
                                <p class="text-muted mb-0" style="font-size: 13px;">
                                    <i class="bi bi-geo-alt me-1"></i>Room 204, Ground Floor
                                </p>
                            </div>
                        </div>

                        <div class="mt-3 d-flex gap-2">
                            <button class="btn-action"><i class="bi bi-eye me-1"></i> View</button>
                            <button class="btn-action"><i class="bi bi-pencil me-1"></i> Reschedule</button>
                            <button class="btn-action btn-action-danger"><i class="bi bi-x-circle me-1"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appointment Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="appointment-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-3">
                            <img src="{{ asset('uploads/doctors/default-doctor.jpg') }}" alt="Doctor" class="doctor-avatar">
                            <div class="doctor-info flex-grow-1">
                                <h6>Dr. Amit Kumar</h6>
                                <small><i class="bi bi-stethoscope me-1"></i>Pediatrics</small>
                                <div class="mt-1">
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 d-flex align-items-center gap-3">
                            <div class="appointment-date-time">
                                <span class="day">28</span>
                                <span class="month">Dec</span>
                                <span class="time">02:00 PM</span>
                            </div>
                            <div>
                                <p class="mb-0" style="font-size: 14px; font-weight: 500;">
                                    <i class="bi bi-clock me-1"></i>Pediatric Checkup
                                </p>
                                <p class="text-muted mb-0" style="font-size: 13px;">
                                    <i class="bi bi-geo-alt me-1"></i>Room 105, First Floor
                                </p>
                            </div>
                        </div>

                        <div class="mt-3 d-flex gap-2">
                            <button class="btn-action"><i class="bi bi-eye me-1"></i> View</button>
                            <button class="btn-action btn-action-danger"><i class="bi bi-x-circle me-1"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appointment Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="appointment-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-3">
                            <img src="{{ asset('uploads/doctors/default-doctor.jpg') }}" alt="Doctor" class="doctor-avatar">
                            <div class="doctor-info flex-grow-1">
                                <h6>Dr. Neha Verma</h6>
                                <small><i class="bi bi-stethoscope me-1"></i>Prenatal Care</small>
                                <div class="mt-1">
                                    <span class="status-badge status-completed">Completed</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 d-flex align-items-center gap-3">
                            <div class="appointment-date-time">
                                <span class="day">20</span>
                                <span class="month">Dec</span>
                                <span class="time">11:00 AM</span>
                            </div>
                            <div>
                                <p class="mb-0" style="font-size: 14px; font-weight: 500;">
                                    <i class="bi bi-clock me-1"></i>Prenatal Checkup
                                </p>
                                <p class="text-muted mb-0" style="font-size: 13px;">
                                    <i class="bi bi-geo-alt me-1"></i>Room 301, Second Floor
                                </p>
                            </div>
                        </div>

                        <div class="mt-3 d-flex gap-2">
                            <button class="btn-action"><i class="bi bi-eye me-1"></i> View</button>
                            <button class="btn-action"><i class="bi bi-file-text me-1"></i> Report</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appointment Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="appointment-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-3">
                            <img src="{{ asset('uploads/doctors/default-doctor.jpg') }}" alt="Doctor" class="doctor-avatar">
                            <div class="doctor-info flex-grow-1">
                                <h6>Dr. Sanjay Patel</h6>
                                <small><i class="bi bi-stethoscope me-1"></i>Emergency</small>
                                <div class="mt-1">
                                    <span class="status-badge status-cancelled">Cancelled</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 d-flex align-items-center gap-3">
                            <div class="appointment-date-time">
                                <span class="day">15</span>
                                <span class="month">Dec</span>
                                <span class="time">04:30 PM</span>
                            </div>
                            <div>
                                <p class="mb-0" style="font-size: 14px; font-weight: 500;">
                                    <i class="bi bi-clock me-1"></i>Emergency Visit
                                </p>
                                <p class="text-muted mb-0" style="font-size: 13px;">
                                    <i class="bi bi-geo-alt me-1"></i>Emergency Room
                                </p>
                            </div>
                        </div>

                        <div class="mt-3 d-flex gap-2">
                            <button class="btn-action"><i class="bi bi-eye me-1"></i> View</button>
                            <button class="btn-action"><i class="bi bi-arrow-repeat me-1"></i> Rebook</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="mt-4 d-flex justify-content-between align-items-center">
            <p class="text-muted" style="font-size: 14px;">Showing 1-4 of 12 appointments</p>
            <nav>
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" style="border-radius: 8px;">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#" style="background: var(--primary); border-color: var(--primary); border-radius: 8px;">1</a></li>
                    <li class="page-item"><a class="page-link" href="#" style="border-radius: 8px;">2</a></li>
                    <li class="page-item"><a class="page-link" href="#" style="border-radius: 8px;">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="border-radius: 8px;">Next</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</div>

<!-- Book Appointment Modal -->
<div class="modal fade" id="appointmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-calendar-plus me-2" style="color: var(--primary);"></i>
                    Book Appointment
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Step 1: Select Department -->
                    <div class="mb-4">
                        <label class="form-label">Select Department</label>
                        <select class="form-select">
                            <option value="">Choose Department</option>
                            <option value="gynecology" selected>Gynecology</option>
                            <option value="pediatrics">Pediatrics</option>
                            <option value="cardiology">Cardiology</option>
                            <option value="orthopedics">Orthopedics</option>
                            <option value="emergency">Emergency</option>
                            <option value="prenatal">Prenatal Care</option>
                            <option value="postnatal">Postnatal Care</option>
                        </select>
                    </div>

                    <!-- Step 2: Select Doctor -->
                    <div class="mb-4">
                        <label class="form-label">Select Doctor</label>
                        <div class="row g-2">
                            <div class="col-4">
                                <div class="doctor-select-item selected">
                                    <img src="{{ asset('uploads/doctors/default-doctor.jpg') }}" alt="Dr. Priya Sharma">
                                    <h6>Dr. Priya Sharma</h6>
                                    <small>Gynecology</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="doctor-select-item">
                                    <img src="{{ asset('uploads/doctors/default-doctor.jpg') }}" alt="Dr. Neha Verma">
                                    <h6>Dr. Neha Verma</h6>
                                    <small>Gynecology</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="doctor-select-item">
                                    <img src="{{ asset('uploads/doctors/default-doctor.jpg') }}" alt="Dr. Ritu Singh">
                                    <h6>Dr. Ritu Singh</h6>
                                    <small>Gynecology</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Date & Time -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Appointment Date</label>
                            <input type="date" class="form-control" value="2026-12-28">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Appointment Time</label>
                            <select class="form-select">
                                <option value="09:00">09:00 AM</option>
                                <option value="09:30">09:30 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="10:30">10:30 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="11:30">11:30 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="14:00" selected>02:00 PM</option>
                                <option value="14:30">02:30 PM</option>
                                <option value="15:00">03:00 PM</option>
                                <option value="15:30">03:30 PM</option>
                                <option value="16:00">04:00 PM</option>
                                <option value="16:30">04:30 PM</option>
                            </select>
                        </div>
                    </div>

                    <!-- Step 4: Reason -->
                    <div class="mb-3">
                        <label class="form-label">Reason for Visit</label>
                        <textarea class="form-control" placeholder="Briefly describe your symptoms or reason for visit"></textarea>
                    </div>

                    <!-- Step 5: Additional Info -->
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Patient Name</label>
                            <input type="text" class="form-control" value="Priya Singh">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" value="+91 98765 43210">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn-primary-custom">
                    <i class="bi bi-check-circle me-2"></i> Confirm Booking
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Doctor selection in modal
    document.querySelectorAll('.doctor-select-item').forEach(item => {
        item.addEventListener('click', function() {
            document.querySelectorAll('.doctor-select-item').forEach(el => el.classList.remove('selected'));
            this.classList.add('selected');
        });
    });
</script>
@endsection