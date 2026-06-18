@extends('layouts.app')
@section('content')
    <style>
        body { background: #f5f7fb; }
        .register-section { min-height: 100vh; display: flex; justify-content: center; align-items: center; }
        .register-box { width: 900px; background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1); display: flex; }
        .left-side { width: 50%; background: #1d4ed8; color: white; padding: 50px; display: flex; flex-direction: column; justify-content: center; }
        .right-side { width: 50%; padding: 50px; }
        .form-control { height: 50px; margin-bottom: 20px; border-radius: 10px; }
        .btn-register { width: 100%; height: 50px; border: none; border-radius: 10px; background: #1d4ed8; color: white; font-size: 18px; font-weight: bold; }
        .btn-register:hover { background: #143d8f; }
        .login-text { text-align: center; margin-top: 20px; }
        .login-text a { color: #1d4ed8; text-decoration: none; font-weight: bold; }
        @media(max-width:768px) { .register-box { flex-direction: column; width: 95%; } .left-side, .right-side { width: 100%; }}
    </style>

    <section class="register-section">
        <div class="register-box">
            <div class="left-side">
                <h1>Register</h1>
                <p>Create your patient account to book appointments and ambulance services.</p>
            </div>
            <div class="right-side">
                <h2>Register Here</h2>
                @if ($errors->any())
                    <div class="alert alert-danger"><ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                @endif
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf
                    <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                    <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">
                    <input type="number" class="form-control" name="age" placeholder="Age" value="{{ old('age') }}">
                    <select class="form-control" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') === 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    <input type="text" class="form-control" name="blood_group" placeholder="Blood Group" value="{{ old('blood_group') }}">
                    <textarea class="form-control" name="address" placeholder="Address">{{ old('address') }}</textarea>
                    <button class="btn-register">Register</button>
                </form>
                <div class="login-text">
                    Already have an account? <a href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>
    </section>
@endsection
