{{-- patient/ambulance.blade.php --}}
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
    }

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

    .ambulance-status {
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    .status-pending { background: #fff3e0; color: #e65100; }
    .status-confirmed { background: #e8f5e9; color: #2e7d32; }
    .status-in-transit { background: #e3f2fd; color: #0d47a1; }
    .status-completed { background: #e8f5e9; color: #2e7d32; }
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

<div class="ambulance-wrapper">
    <div class="ambulance-container">

        <div class="page-header">
            <div>
                <h3><i class="bi bi-ambulance me-2" style="color: var(--primary);"></i>Ambulance Requests</h3>
                <p>Manage your ambulance bookings and emergency transport requests</p>
            </div>
            <button type="button" class="btn-primary-custom" data-bs-toggle="modal" data-bs-target="#ambulanceModal">
                <i class="bi bi-plus-lg"></i> Book Ambulance
            </button>
        </div>

        <!-- Search -->
        <form action="{{ route('patient.ambulance') }}" method="GET" class="search-box mb-4">
            <input type="text" name="search" class="form-control" placeholder="Search by location or name..." value="{{ request('search') }}">
            <select name="status" class="form-select">
                <option value="">All Status</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="in-transit" {{ request('status') == 'in-transit' ? 'selected' : '' }}>In Transit</option>
                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
            <button type="submit" class="btn-primary-custom" style="background: #e5e7eb; color: #333;">
                <i class="bi bi-search"></i> Search
            </button>
        </form>

        <!-- Ambulance List -->
        <div class="row g-4">
            @forelse($ambulances as $ambulance)
                <div class="col-md-6 col-lg-4">
                    <div class="ambulance-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="ambulance-icon">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <span class="ambulance-status status-{{ $ambulance->status }}">
                                    {{ ucfirst($ambulance->status) }}
                                </span>
                            </div>
                            <h5 class="fw-bold mb-1">{{ $ambulance->full_name }}</h5>
                            <p class="text-muted mb-2" style="font-size: 14px;">
                                <i class="bi bi-geo-alt me-1"></i> {{ $ambulance->pickup_location }}
                            </p>
                            <p class="text-muted mb-2" style="font-size: 14px;">
                                <i class="bi bi-geo-alt me-1"></i> → {{ $ambulance->drop_location }}
                            </p>
                            <p class="text-muted mb-2" style="font-size: 13px;">
                                <i class="bi bi-person me-1"></i> {{ $ambulance->mobile_no }}
                            </p>
                            <p class="text-muted mb-3" style="font-size: 13px;">
                                <i class="bi bi-clock me-1"></i> {{ date('d M Y', strtotime($ambulance->booking_date)) }}
                            </p>
                            <div class="d-flex gap-2">
                                @if($ambulance->status != 'cancelled' && $ambulance->status != 'completed')
                                    <form action="{{ route('patient.ambulance.cancel', $ambulance->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to cancel this ambulance request?')">
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
                        <i class="bi bi-truck" style="font-size: 60px; color: #d1d5db;"></i>
                        <h5 class="mt-3">No Ambulance Requests</h5>
                        <p class="text-muted">Book an ambulance for emergency transport.</p>
                        <button type="button" class="btn-primary-custom" data-bs-toggle="modal" data-bs-target="#ambulanceModal">
                            <i class="bi bi-plus-lg"></i> Book Ambulance
                        </button>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $ambulances->links() }}
        </div>

    </div>
</div>

<!-- Book Ambulance Modal -->
<div class="modal fade" id="ambulanceModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('patient.ambulance.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-truck me-2" style="color: var(--primary);"></i>
                        Book Ambulance
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="full_name" class="form-control" value="{{ old('full_name', Auth::user()->name) }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mobile Number</label>
                            <input type="text" name="mobile_no" class="form-control" value="{{ old('mobile_no') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Pickup Location</label>
                            <input type="text" name="pickup_location" class="form-control" placeholder="Enter pickup address" value="{{ old('pickup_location') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Drop Location</label>
                            <input type="text" name="drop_location" class="form-control" placeholder="Enter destination" value="{{ old('drop_location') }}" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Booking Date</label>
                            <input type="date" name="booking_date" class="form-control" value="{{ old('booking_date', date('Y-m-d')) }}" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn-primary-custom">
                        <i class="bi bi-send me-2"></i> Request Ambulance
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection