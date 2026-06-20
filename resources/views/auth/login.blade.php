@extends('layouts.app')
@section('content')
    <style>
        {
            background: linear-gradient(135deg, #fff5f8, #ffe3ed);
        }

        .login-section {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-box {
            width: 950px;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(246, 77, 134, 0.15);
            display: flex;
        }

        .left-side {
            width: 50%;
            background: linear-gradient(135deg, #f64d86, #ff7aa8);
            color: white;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left-side h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .left-side p {
            font-size: 17px;
            line-height: 30px;
        }

        .right-side {
            width: 50%;
            padding: 50px;
        }

        .right-side h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #f64d86;
            font-weight: 700;
        }

        .form-control {
            height: 55px;
            border-radius: 12px;
            margin-bottom: 20px;
            border: 1px solid #e5e5e5;
        }

        .form-control:focus {
            border-color: #f64d86;
            box-shadow: 0 0 0 0.2rem rgba(246, 77, 134, 0.15);
        }

        .btn-login {
            width: 100%;
            height: 55px;
            border: none;
            border-radius: 12px;
            background: #f64d86;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #ec3f7c;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(246, 77, 134, 0.3);
        }

        .register-text {
            text-align: center;
            margin-top: 25px;
            color: #666;
        }

        .register-text a {
            color: #f64d86;
            text-decoration: none;
            font-weight: 700;
        }

        .register-text a:hover {
            color: #ec3f7c;
        }

        .alert-success {
            border-left: 4px solid #f64d86;
        }

        @media(max-width:768px) {
            .login-box {
                flex-direction: column;
                width: 100%;
            }

            .left-side,
            .right-side {
                width: 100%;
            }

            .left-side {
                padding: 40px;
                text-align: center;
            }
        }
    </style>
    <section class="login-section">

        <div class="login-box">

            <!-- Left Side -->

            <div class="left-side">

                <h1>Mother Care Hospital</h1>

                <p>
                    Welcome back to our hospital management portal.
                    Login to manage appointments, doctors, and patients.
                </p>

            </div>

            <!-- Right Side -->

            <div class="right-side">

                <h2>Login Here</h2>

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

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    <input type="email" class="form-control" placeholder="Enter Email" name="email">

                    <input type="password" class="form-control" placeholder="Enter Password" name="password">

                    <button class="btn-login">
                        Login
                    </button>

                </form>

                <div class="register-text">

                    Don't have an account ?
                    <a href="{{ route('register') }}">Register</a>

                </div>

            </div>

        </div>

    </section>
@endsection
