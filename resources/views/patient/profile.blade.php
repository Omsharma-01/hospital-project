{{-- patient/profile.blade.php --}}
@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary: #f64d86;
        --primary-light: #fff0f5;
        --shadow: 0 4px 20px rgba(0,0,0,0.06);
        --radius: 16px;
    }

    .profile-wrapper {
        background: #f5f7fb;
        min-height: 100vh;
        padding: 30px 0 60px;
    }

    .profile-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .profile-card {
        background: #fff;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        border: none;
        overflow: hidden;
    }

    .profile-card .card-header {
        background: linear-gradient(135deg, #f64d86, #ff7ba7);
        color: #fff;
        padding: 30px 35px;
        border-bottom: none;
    }

    .profile-card .card-header h4 {
        font-weight: 700;
        margin: 0;
    }

    .profile-card .card-header p {
        opacity: 0.9;
        margin: 5px 0 0;
        font-size: 14px;
    }

    .profile-card .card-body {
        padding: 35px;
    }

    .profile-photo {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        box-shadow: 0 4px 15px rgba(246,77,134,0.25);
        background: #f0f0f0;
    }

    .photo-container {
        position: relative;
        display: inline-block;
    }

    .photo-container .photo-edit-btn {
        position: absolute;
        bottom: 5px;
        right: 5px;
        background: var(--primary);
        color: #fff;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 3px solid #fff;
        cursor: pointer;
        transition: 0.3s;
    }

    .photo-container .photo-edit-btn:hover {
        background: var(--primary-dark);
        transform: scale(1.05);
    }

    .form-label {
        font-weight: 600;
        font-size: 14px;
        color: #333;
        margin-bottom: 6px;
    }

    .form-control, .form-select {
        height: 50px;
        border-radius: 10px;
        border: 1px solid #e5e7eb;
        font-size: 14px;
        transition: 0.3s;
        background: #fafafa;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(246,77,134,0.12);
        background: #fff;
    }

    .profile-btn {
        background: var(--primary);
        color: #fff;
        border: none;
        padding: 12px 40px;
        border-radius: 50px;
        font-weight: 600;
        transition: 0.3s;
    }

    .profile-btn:hover {
        background: var(--primary-dark);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(246,77,134,0.3);
    }

    .nav-tabs .nav-link {
        border: none;
        color: #6b7280;
        font-weight: 600;
        padding: 12px 24px;
        border-radius: 10px;
        transition: 0.3s;
    }

    .nav-tabs .nav-link:hover {
        color: var(--primary);
        background: var(--primary-light);
    }

    .nav-tabs .nav-link.active {
        color: #fff;
        background: var(--primary);
        border: none;
    }

    .nav-tabs .nav-link i {
        margin-right: 8px;
    }

    .info-sidebar {
        background: var(--primary-light);
        border-radius: var(--radius);
        padding: 25px;
        height: 100%;
    }

    .info-sidebar .info-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 14px 0;
        border-bottom: 1px solid rgba(246,77,134,0.15);
    }

    .info-sidebar .info-item:last-child {
        border-bottom: none;
    }

    .info-sidebar .info-item i {
        color: var(--primary);
        font-size: 20px;
        min-width: 28px;
        margin-top: 2px;
    }

    .info-sidebar .info-item .info-label {
        font-size: 12px;
        color: #6b7280;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .info-sidebar .info-item .info-value {
        font-weight: 600;
        color: #1a1a2e;
        margin: 0;
    }

    @media (max-width: 768px) {
        .profile-card .card-body { padding: 20px; }
        .profile-card .card-header { padding: 20px; }
        .nav-tabs .nav-link { padding: 10px 16px; font-size: 13px; }
        .profile-btn { padding: 10px 25px; font-size: 14px; }
    }
</style>

<div class="profile-wrapper">
    <div class="profile-container">

        <div class="row g-4">

            <!-- Main Profile Form -->
            <div class="col-lg-8">
                <div class="profile-card">
                    <div class="card-header">
                        <h4><i class="bi bi-person-gear me-2"></i>Profile Settings</h4>
                        <p>Manage your personal information and account preferences</p>
                    </div>
                    <div class="card-body">

                        <!-- Tabs -->
                        <ul class="nav nav-tabs mb-4" id="profileTabs" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button">
                                    <i class="bi bi-person"></i>Personal
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button">
                                    <i class="bi bi-shield-lock"></i>Security
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <!-- Personal Tab -->
                            <div class="tab-pane fade show active" id="personal">
                                <form action="{{ route('patient.profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Profile Photo -->
                                    <div class="text-center mb-4">
                                        <div class="photo-container">
                                            <img src="{{ asset('uploads/patients/' . ($patient->profile_photo ?? 'default-avatar.png')) }}" 
                                                 alt="Profile Photo" class="profile-photo" id="profilePreview">
                                            <label for="photoInput" class="photo-edit-btn" title="Change Photo">
                                                <i class="bi bi-camera-fill"></i>
                                            </label>
                                            <input type="file" id="photoInput" name="profile_photo" class="d-none" accept="image/*">
                                        </div>
                                        <p class="text-muted mt-2" style="font-size: 13px;">
                                            <i class="bi bi-info-circle"></i> JPG, PNG or GIF. Max 2MB
                                        </p>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $patient->phone_number ?? '') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Age</label>
                                            <input type="number" name="age" class="form-control" value="{{ old('age', $patient->age ?? '') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Gender</label>
                                            <select name="gender" class="form-select">
                                                <option value="male" {{ (old('gender', $patient->gender ?? '') == 'male') ? 'selected' : '' }}>Male</option>
                                                <option value="female" {{ (old('gender', $patient->gender ?? '') == 'female') ? 'selected' : '' }}>Female</option>
                                                <option value="other" {{ (old('gender', $patient->gender ?? '') == 'other') ? 'selected' : '' }}>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Blood Group</label>
                                            <select name="blood_group" class="form-select">
                                                <option value="">Select Blood Group</option>
                                                <option value="A+" {{ (old('blood_group', $patient->blood_group ?? '') == 'A+') ? 'selected' : '' }}>A+</option>
                                                <option value="A-" {{ (old('blood_group', $patient->blood_group ?? '') == 'A-') ? 'selected' : '' }}>A-</option>
                                                <option value="B+" {{ (old('blood_group', $patient->blood_group ?? '') == 'B+') ? 'selected' : '' }}>B+</option>
                                                <option value="B-" {{ (old('blood_group', $patient->blood_group ?? '') == 'B-') ? 'selected' : '' }}>B-</option>
                                                <option value="AB+" {{ (old('blood_group', $patient->blood_group ?? '') == 'AB+') ? 'selected' : '' }}>AB+</option>
                                                <option value="AB-" {{ (old('blood_group', $patient->blood_group ?? '') == 'AB-') ? 'selected' : '' }}>AB-</option>
                                                <option value="O+" {{ (old('blood_group', $patient->blood_group ?? '') == 'O+') ? 'selected' : '' }}>O+</option>
                                                <option value="O-" {{ (old('blood_group', $patient->blood_group ?? '') == 'O-') ? 'selected' : '' }}>O-</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Address</label>
                                            <textarea name="address" class="form-control" rows="2" placeholder="Enter your address">{{ old('address', $patient->address ?? '') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="mt-4 d-flex gap-3">
                                        <button type="submit" class="profile-btn"><i class="bi bi-check-circle me-2"></i>Save Changes</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Security Tab -->
                            <div class="tab-pane fade" id="security">
                                <form action="{{ route('patient.profile.password') }}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" name="current_password" class="form-control" placeholder="Enter current password" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">New Password</label>
                                            <input type="password" name="new_password" class="form-control" placeholder="Enter new password" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Confirm New Password</label>
                                            <input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm new password" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="alert alert-info">
                                                <i class="bi bi-info-circle me-2"></i>
                                                Password must be at least 8 characters and include a number and special character.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="profile-btn"><i class="bi bi-shield-check me-2"></i>Change Password</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Sidebar Info -->
            <div class="col-lg-4">
                <div class="info-sidebar">
                    <h5 class="fw-bold mb-3"><i class="bi bi-info-circle me-2" style="color: var(--primary);"></i>Account Info</h5>

                    <div class="info-item">
                        <i class="bi bi-person"></i>
                        <div>
                            <div class="info-label">Patient ID</div>
                            <p class="info-value">#{{ $patient->id ?? 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="bi bi-calendar-check"></i>
                        <div>
                            <div class="info-label">Member Since</div>
                            <p class="info-value">{{ $user->created_at ? $user->created_at->format('d M Y') : 'N/A' }}</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="bi bi-heart-pulse"></i>
                        <div>
                            <div class="info-label">Assigned Doctor</div>
                            <p class="info-value">{{ $patient->doctor->doctor_name ?? 'Not Assigned' }}</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="bi bi-envelope"></i>
                        <div>
                            <div class="info-label">Email</div>
                            <p class="info-value" style="font-size: 14px;">{{ $user->email }}</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="bi bi-shield-check"></i>
                        <div>
                            <div class="info-label">Account Status</div>
                            <p class="info-value"><span class="badge bg-success">Active</span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    document.getElementById('photoInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profilePreview').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection