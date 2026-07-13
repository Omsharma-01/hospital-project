{{-- patient/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
    <style>
        :root {
            --primary: #f64d86;
            --primary-light: #fff0f5;
            --primary-dark: #d43f72;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            --radius: 16px;
        }

        .dashboard-wrapper {
            background: #f5f7fb;
            min-height: 100vh;
            padding: 30px 0 60px;
        }

        .dashboard-container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .welcome-header {
            background: linear-gradient(135deg, #f64d86, #ff7ba7);
            border-radius: var(--radius);
            padding: 35px 40px;
            color: #fff;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .welcome-header::before {
            content: '';
            position: absolute;
            top: -60%;
            right: -10%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
        }

        .welcome-header h1 {
            font-size: 28px;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }

        .welcome-header p {
            opacity: 0.9;
            margin-bottom: 0;
            position: relative;
            z-index: 1;
        }

        .stat-card {
            background: #fff;
            border-radius: var(--radius);
            padding: 25px 20px;
            box-shadow: var(--shadow);
            border: none;
            transition: all 0.3s ease;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(246, 77, 134, 0.15);
        }

        .stat-card .stat-icon {
            width: 55px;
            height: 55px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .stat-card .stat-icon.pink {
            background: #fce4ec;
            color: #f64d86;
        }

        .stat-card .stat-icon.blue {
            background: #e3f2fd;
            color: #1976d2;
        }

        .stat-card .stat-icon.green {
            background: #e8f5e9;
            color: #388e3c;
        }

        .stat-card .stat-icon.orange {
            background: #fff3e0;
            color: #f57c00;
        }

        .stat-card .stat-number {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a2e;
        }

        .stat-card .stat-label {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 0;
        }

        .stat-trend {
            font-size: 12px;
            padding: 3px 10px;
            border-radius: 50px;
            display: inline-block;
            margin-top: 8px;
        }

        .stat-trend.up {
            background: #e8f5e9;
            color: #388e3c;
        }

        .stat-trend.down {
            background: #fce4ec;
            color: #c62828;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h4 {
            font-weight: 700;
            color: #1a1a2e;
            margin: 0;
        }

        .view-all {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .dashboard-card {
            background: #fff;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            border: none;
            overflow: hidden;
        }

        .dashboard-card .card-header {
            background: transparent;
            border-bottom: 1px solid #f0f0f0;
            padding: 18px 24px;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dashboard-card .card-body {
            padding: 24px;
        }

        .appointment-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 14px 0;
            border-bottom: 1px solid #f5f5f5;
            transition: 0.2s;
        }

        .appointment-item:last-child {
            border-bottom: none;
        }

        .appointment-item .appointment-date {
            min-width: 55px;
            text-align: center;
            background: var(--primary-light);
            padding: 8px 12px;
            border-radius: 10px;
        }

        .appointment-item .appointment-date .day {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary);
            display: block;
            line-height: 1;
        }

        .appointment-item .appointment-date .month {
            font-size: 11px;
            color: #6b7280;
            text-transform: uppercase;
        }

        .appointment-item .appointment-info {
            flex: 1;
        }

        .appointment-item .appointment-info h6 {
            font-weight: 600;
            margin: 0;
            font-size: 15px;
        }

        .appointment-item .appointment-info small {
            color: #6b7280;
            font-size: 13px;
        }

        .appointment-status {
            padding: 4px 14px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-confirmed {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .status-pending {
            background: #fff3e0;
            color: #e65100;
        }

        .status-completed {
            background: #e3f2fd;
            color: #0d47a1;
        }

        .status-cancelled {
            background: #fce4ec;
            color: #c62828;
        }

        .status-in-transit {
            background: #e3f2fd;
            color: #0d47a1;
        }

        .quick-action-btn {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #fff;
            border: 2px dashed #e5e7eb;
            border-radius: var(--radius);
            padding: 25px 15px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #1a1a2e;
            height: 100%;
            min-height: 120px;
        }

        .quick-action-btn:hover {
            border-color: var(--primary);
            background: var(--primary-light);
            transform: translateY(-3px);
            color: var(--primary);
        }

        .quick-action-btn i {
            font-size: 32px;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .quick-action-btn span {
            font-weight: 600;
            font-size: 14px;
        }

        .quick-action-btn small {
            color: #6b7280;
            font-size: 12px;
            margin-top: 4px;
        }

        .activity-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid #f5f5f5;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-item .activity-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        .activity-icon.pink-bg {
            background: #fce4ec;
            color: #f64d86;
        }

        .activity-icon.blue-bg {
            background: #e3f2fd;
            color: #1976d2;
        }

        .activity-icon.green-bg {
            background: #e8f5e9;
            color: #388e3c;
        }

        .activity-item .activity-content {
            flex: 1;
        }

        .activity-item .activity-content p {
            margin: 0;
            font-size: 14px;
        }

        .activity-item .activity-content .time {
            font-size: 12px;
            color: #9e9e9e;
        }

        @media (max-width: 768px) {
            .welcome-header {
                padding: 25px 20px;
            }

            .welcome-header h1 {
                font-size: 22px;
            }

            .stat-card .stat-number {
                font-size: 22px;
            }

            .dashboard-card .card-body {
                padding: 16px;
            }
        }

        .ambulance-icon {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            background: rgba(246, 77, 134, .15);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ambulance-icon i {
            font-size: 35px;
            color: #f64d86;
        }

        .stat-card:hover .ambulance-icon {
            transform: scale(1.1);
            transition: .3s;
        }
    </style>

    <div class="dashboard-wrapper">
        <div class="dashboard-container">

            <!-- Welcome Header -->
            <div class="welcome-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1>👋 Welcome back, {{ Auth::user()->name }}!</h1>
                        <p>Here's what's happening with your health journey today.</p>
                        <div class="mt-3">
                            <span class="badge"
                                style="background: rgba(255,255,255,0.2); padding: 8px 16px; border-radius: 50px;">
                                <i class="bi bi-bell-fill me-1"></i>
                                {{ $recentAppointments->where('status', 0)->count() }} pending appointments
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <a href="{{ route('patient.profile') }}" class="btn btn-light rounded-pill px-4">
                            <i class="bi bi-person-circle"></i> My Profile
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="row g-4 mb-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="stat-icon pink"><i class="bi bi-calendar-check"></i></div>
                        <div class="stat-number">{{ $totalAppointments ?? 0 }}</div>
                        <div class="stat-label">Total Appointments</div>
                        <span class="stat-trend up"><i class="bi bi-arrow-up"></i> Active</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="stat-icon blue"><i class="bi bi-clock-history"></i></div>
                        <div class="stat-number">{{ $upcomingAppointments ?? 0 }}</div>
                        <div class="stat-label">Upcoming Appointments</div>
                        <span class="stat-trend up"><i class="bi bi-arrow-up"></i> Scheduled</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">

                        <div class="stat-icon ambulance-icon">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>

                        <div class="stat-number">
                            {{ $totalAmbulances ?? 0 }}
                        </div>

                        <div class="stat-label">
                            Ambulance Requests
                        </div>

                        <span class="stat-trend {{ ($pendingAmbulances ?? 0) > 0 ? 'down' : 'up' }}">
                            <i class="bi bi-arrow-{{ ($pendingAmbulances ?? 0) > 0 ? 'down' : 'up' }}"></i>
                            {{ $pendingAmbulances ?? 0 }} Pending
                        </span>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="stat-icon orange"><i class="bi bi-file-earmark-medical"></i></div>
                        <div class="stat-number">{{ $patient->id ?? 'N/A' }}</div>
                        <div class="stat-label">Patient ID</div>
                        <span class="stat-trend up"><i class="bi bi-check-circle"></i> Active</span>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row g-4">

                <!-- Left Column -->
                <div class="col-lg-7">
                    <!-- Appointments -->
                    <div class="dashboard-card">
                        <div class="card-header">
                            <span><i class="bi bi-calendar3 me-2" style="color: var(--primary);"></i>Recent
                                Appointments</span>
                            <a href="{{ route('patient.appointments') }}" class="view-all">View All →</a>
                        </div>
                        <div class="card-body">
                            @forelse($recentAppointments as $appointment)
                                <div class="appointment-item">
                                    <div class="appointment-date">
                                        <span
                                            class="day">{{ date('d', strtotime($appointment->appointment_date)) }}</span>
                                        <span
                                            class="month">{{ date('M', strtotime($appointment->appointment_date)) }}</span>
                                    </div>
                                    <div class="appointment-info">
                                        <h6> {{ $appointment->doctor->doctor_name ?? 'N/A' }}</h6>
                                        <small><i class="bi bi-clock me-1"></i>{{ $appointment->appointment_time }} -
                                            {{ $appointment->doctor->specialization ?? 'General' }}</small>
                                    </div>
                                    @php
                                        $statusMap = [
                                            0 => 'Pending',
                                            1 => 'Confirmed',
                                            2 => 'Completed',
                                            3 => 'Cancelled',
                                        ];
                                        $statusClass = [
                                            'status-pending',
                                            'status-confirmed',
                                            'status-completed',
                                            'status-cancelled',
                                        ];
                                        $statusText = $statusMap[$appointment->status] ?? 'Pending';
                                        $statusClassText = $statusClass[$appointment->status] ?? 'status-pending';
                                    @endphp
                                    <span class="appointment-status {{ $statusClassText }}">{{ $statusText }}</span>
                                </div>
                            @empty
                                <p class="text-muted text-center py-3">No appointments yet. <a
                                        href="{{ route('patient.appointments') }}">Book one now!</a></p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Ambulance Requests -->
                    <div class="dashboard-card mt-4">
                        <div class="card-header">
                            <span><i class="bi bi-ambulance me-2" style="color: var(--primary);"></i>Ambulance
                                Requests</span>
                            <a href="{{ route('patient.ambulance') }}" class="view-all">View All →</a>
                        </div>
                        <div class="card-body">
                            @forelse($recentAmbulances as $ambulance)
                                <div class="appointment-item">
                                    <div class="appointment-date">
                                        <span class="day">{{ date('d', strtotime($ambulance->created_at)) }}</span>
                                        <span class="month">{{ date('M', strtotime($ambulance->created_at)) }}</span>
                                    </div>
                                    <div class="appointment-info">
                                        <h6>{{ $ambulance->full_name }}</h6>
                                        <small><i class="bi bi-geo-alt me-1"></i>{{ $ambulance->pickup_location }}</small>
                                    </div>
                                    <span
                                        class="appointment-status status-{{ $ambulance->status }}">{{ ucfirst($ambulance->status) }}</span>
                                </div>
                            @empty
                                <p class="text-muted text-center py-3">No ambulance requests. <a
                                        href="{{ route('patient.ambulance') }}">Book one now!</a></p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-5">

                    <!-- Quick Actions -->
                    <div class="dashboard-card">
                        <div class="card-header">
                            <span><i class="bi bi-grid-3x3-gap-fill me-2" style="color: var(--primary);"></i>Quick
                                Actions</span>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <a href="{{ route('patient.appointments') }}" class="quick-action-btn">
                                        <i class="bi bi-calendar-plus"></i>
                                        <span>Book Appointment</span>
                                        <small>Schedule a visit</small>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('patient.ambulance') }}" class="quick-action-btn">
                                        <i class="bi bi-truck"></i>
                                        <span>Book Ambulance</span>
                                        <small>Emergency transport</small>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('patient.profile') }}" class="quick-action-btn">
                                        <i class="bi bi-person-gear"></i>
                                        <span>Update Profile</span>
                                        <small>Personal details</small>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="quick-action-btn">
                                        <i class="bi bi-file-pdf"></i>
                                        <span>View Reports</span>
                                        <small>Medical records</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="dashboard-card mt-4">
                        <div class="card-header">
                            <span><i class="bi bi-clock me-2" style="color: var(--primary);"></i>Recent Activity</span>
                        </div>
                        <div class="card-body">
                            @forelse($recentActivity as $activity)
                                <div class="activity-item">
                                    <div class="activity-icon {{ $activity['bg'] }}">
                                        <i class="bi {{ $activity['icon'] }}"></i>
                                    </div>
                                    <div class="activity-content">
                                        <p>{{ $activity['title'] }}</p>
                                        <span class="time">{{ $activity['time'] }}</span>
                                    </div>
                                </div>
                            @empty
                                <p class="text-muted text-center py-3">No recent activity</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Health Tip -->
                    <div class="dashboard-card mt-4"
                        style="background: linear-gradient(135deg, #fce4ec, #fff0f5); border: none;">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-heart-pulse-fill" style="font-size: 40px; color: #f64d86;"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold">Health Tip of the Day</h6>
                                    <p class="mb-0" style="font-size: 14px; color: #4a4a4a;">
                                        Stay hydrated! Drink at least 8 glasses of water daily for a healthy pregnancy.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
