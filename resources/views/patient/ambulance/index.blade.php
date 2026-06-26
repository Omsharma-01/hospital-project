{{-- patient/ambulance/index.blade.php --}}
@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary: #f64d86;
        --primary-light: #fff0f5;
        --shadow: 0 4px 20px rgba(0,0,0,0.06);
        --radius: 16px;
    }

    .ambulance-wrapper {
        background: #f5f7fb;
        min-height: 100vh;
        padding: 30px 0 60px;
    }

    .ambulance-container {
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
     
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(246,77,134,0.3);
    }

    /* Cards */
    .ambulance-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        border: none;
        overflow: hidden;
        transition: 0.3s;
    }

    .ambulance-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }

    .ambulance-card .card-body {
        padding: 24px;
    }

    .ambulance-card .ambulance-icon {
        width: 60px;
        height: 60px;
        background: var(--primary-light);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: var(--primary);
    }

    .ambulance-card .status-badge {
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }

    .ambulance-card .status-pending {
        background: #fff3e0;
        color: #e65100;
    }

    .ambulance-card .status-in-transit {
        background: #e3f2fd;
        color: #0d47a1;
    }

    .ambulance-card .status-completed {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .ambulance-card .status-cancelled {
        background: #fce4ec;
        color: #c62828;
    }

    .ambulance-card .btn-action {
        background: transparent;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        padding: 6px 14px;
        font-size: 13px;
        transition: 0.3s;
        color: #6b7280;
    }

    .ambulance-card .btn-action:hover {
        background: var(--primary-light);
        border-color: var(--primary);
        color: var(--primary);
    }

    .btn-action-danger:hover {
        background: #fce4ec;
        border-color: #c62828;
        color: #c62828;
    }

    /* Search & Filter */
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

    /* Modal Styles */
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

    .modal .btn-primary-custom {
        padding: 10px 35px;
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

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }

    .empty-state i {
        font-size: 70px;
        color: #d1d5db;
        margin-bottom: 20px;
    }

    .empty-state h5 {
        font-weight: 600;
        color: #1a1a2e;
    }

    .empty-state p {
        color: #6b7280;
        max-width: 400px;
        margin: 10px auto 25px;
    }

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
    }
</style>

<div class="ambulance-wrapper">
    <div class="ambulance-container">

        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h3><i class="bi bi-ambulance me-2" style="color: var(--primary);"></i>Ambulance Requests</h3>
                <p>Manage your ambulance bookings and emergency transport requests</p>
            </div>
            <button type="button" class="btn-primary-custom" data-bs-toggle="modal" data-bs-target="#ambulanceModal">
                <i class="bi bi-plus-lg"></i> Book Ambulance
            </button>
        </div>

        <!-- Search & Filter -->
        <div class="search-box mb-4">
            <input type="text" class="form-control" placeholder="Search by location, driver, or ID...">
            <select class="form-select">
                <option value="">All Status</option>
                <option value="pending">Pending</option>
                <option value="in-transit">In Transit</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
            <select class="form-select">
                <option value="">Sort By</option>
                <option value="newest">Newest First</option>
                <option value="oldest">Oldest First</option>
                <option value="status">Status</option>
            </select>
            <button class="btn-primary-custom" style="background: #e5e7eb; color: #333;">
                <i class="bi bi-search"></i> Search
            </button>
        </div>

        <!-- Ambulance List -->
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="ambulance-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="ambulance-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <span class="status-badge status-in-transit">In Transit</span>
                        </div>
                        <h5 class="fw-bold mb-1">AMB-2026-012</h5>
                        <p class="text-muted mb-2" style="font-size: 14px;">
                            <i class="bi bi-geo-alt me-1"></i> Mithapur, Patna
                        </p>
                        <p class="text-muted mb-2" style="font-size: 13px;">
                            <i class="bi bi-person me-1"></i> Driver: Ramesh Kumar
                        </p>
                        <p class="text-muted mb-3" style="font-size: 13px;">
                            <i class="bi bi-clock me-1"></i> Requested: 22 Dec 2026, 10:30 AM
                        </p>
                        <div class="d-flex gap-2">
                            <button class="btn-action"><i class="bi bi-eye me-1"></i> Details</button>
                            <button class="btn-action"><i class="bi bi-telephone me-1"></i> Call Driver</button>
                            <button class="btn-action btn-action-danger"><i class="bi bi-x-circle me-1"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="ambulance-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="ambulance-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <span class="status-badge status-completed">Completed</span>
                        </div>
                        <h5 class="fw-bold mb-1">AMB-2026-011</h5>
                        <p class="text-muted mb-2" style="font-size: 14px;">
                            <i class="bi bi-geo-alt me-1"></i> Kankarbagh, Patna
                        </p>
                        <p class="text-muted mb-2" style="font-size: 13px;">
                            <i class="bi bi-person me-1"></i> Driver: Suresh Kumar
                        </p>
                        <p class="text-muted mb-3" style="font-size: 13px;">
                            <i class="bi bi-clock me-1"></i> Requested: 18 Dec 2026, 04:00 PM
                        </p>
                        <div class="d-flex gap-2">
                            <button class="btn-action"><i class="bi bi-eye me-1"></i> Details</button>
                            <button class="btn-action"><i class="bi bi-file-text me-1"></i> Report</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="ambulance-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="ambulance-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <span class="status-badge status-pending">Pending</span>
                        </div>
                        <h5 class="fw-bold mb-1">AMB-2026-010</h5>
                        <p class="text-muted mb-2" style="font-size: 14px;">
                            <i class="bi bi-geo-alt me-1"></i> Boring Road, Patna
                        </p>
                        <p class="text-muted mb-2" style="font-size: 13px;">
                            <i class="bi bi-person me-1"></i> Driver: Not Assigned
                        </p>
                        <p class="text-muted mb-3" style="font-size: 13px;">
                            <i class="bi bi-clock me-1"></i> Requested: 15 Dec 2026, 09:00 AM
                        </p>
                        <div class="d-flex gap-2">
                            <button class="btn-action"><i class="bi bi-eye me-1"></i> Details</button>
                            <button class="btn-action btn-action-danger"><i class="bi bi-x-circle me-1"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="ambulance-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="ambulance-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <span class="status-badge status-cancelled">Cancelled</span>
                        </div>
                        <h5 class="fw-bold mb-1">AMB-2026-009</h5>
                        <p class="text-muted mb-2" style="font-size: 14px;">
                            <i class="bi bi-geo-alt me-1"></i> Danapur, Patna
                        </p>
                        <p class="text-muted mb-2" style="font-size: 13px;">
                            <i class="bi bi-person me-1"></i> Driver: Not Assigned
                        </p>
                        <p class="text-muted mb-3" style="font-size: 13px;">
                            <i class="bi bi-clock me-1"></i> Requested: 10 Dec 2026, 08:00 AM
                        </p>
                        <div class="d-flex gap-2">
                            <button class="btn-action"><i class="bi bi-eye me-1"></i> Details</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="mt-4 d-flex justify-content-between align-items-center">
            <p class="text-muted" style="font-size: 14px;">Showing 1-4 of 12 requests</p>
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

<!-- Book Ambulance Modal -->
<div class="modal fade" id="ambulanceModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-truck me-2" style="color: var(--primary);"></i>
                    Book Ambulance
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Patient Name</label>
                            <input type="text" class="form-control" value="Priya Singh" placeholder="Enter patient name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" value="+91 98765 43210" placeholder="Enter contact number">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Pickup Location</label>
                            <input type="text" class="form-control" placeholder="Enter pickup address">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Destination Hospital</label>
                            <select class="form-select">
                                <option value="">Select Hospital</option>
                                <option value="mother-care" selected>Mother Care Hospital</option>
                                <option value="pmch">PMCH, Patna</option>
                                <option value="igims">IGIMS, Patna</option>
                                <option value="sai">Sai Hospital, Patna</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Emergency Type</label>
                            <select class="form-select">
                                <option value="emergency" selected>Emergency</option>
                                <option value="routine">Routine Transport</option>
                                <option value="critical">Critical Care</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Request Date & Time</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Additional Notes</label>
                            <textarea class="form-control" placeholder="Any special requirements or patient condition details"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn-primary-custom">
                    <i class="bi bi-send me-2"></i> Request Ambulance
                </button>
            </div>
        </div>
    </div>
</div>
@endsection