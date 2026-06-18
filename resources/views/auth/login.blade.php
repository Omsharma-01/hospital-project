@extends('layouts.app')
@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f5f7fb;
        }

        .login-section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 900px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
            display: flex;
        }

        .left-side {
            width: 50%;
            background: #e63946;
            color: white;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left-side h1 {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .left-side p {
            font-size: 18px;
            line-height: 30px;
        }

        .right-side {
            width: 50%;
            padding: 50px;
        }

        .right-side h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #e63946;
            font-weight: bold;
        }

        .form-control {
            height: 50px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .btn-login {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 10px;
            background: #e63946;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #c1121f;
        }

        .register-text {
            text-align: center;
            margin-top: 20px;
        }

        .register-text a {
            color: #e63946;
            text-decoration: none;
            font-weight: bold;
        }

        @media(max-width:768px) {

            .login-box {
                flex-direction: column;
                width: 95%;
            }

            .left-side,
            .right-side {
                width: 100%;
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
