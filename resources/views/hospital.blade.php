@extends('layouts.app')
@section('content')
    <style>
        :root {
            --primary: #f64d86;
        }

        .hospital-tieup {
            background: #fff7fa;
        }

        .tieup-badge {
            background: rgba(246, 77, 134, .15);
            color: var(--primary);
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
        }

        .hospital-card {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            transition: .4s;
            height: 100%;
            border: 2px solid transparent;
        }

        .hospital-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 15px 40px rgba(246, 77, 134, .25);
        }

        .hospital-header {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, #f64d86, #ff8fb4);
            color: #fff;
            margin: auto;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            margin-bottom: 20px;
        }

        .hospital-card h4 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .hospital-address {
            color: #666;
        }

        .doctor-info {
            background: #fff7fa;
            padding: 12px;
            border-radius: 12px;
        }

        .doctor-info h6 {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 5px;
        }

        .btn-pink {
            background: var(--primary);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
        }

        .btn-pink:hover {
            background: #e23a72;
            color: white;
        }
    </style>
    <style>
        :root {
            --primary: #f64d86;
            --primary-light: #fff3f7;
        }

        .hospital-tieup {
            background: linear-gradient(180deg, #fff 0%, #fff7fa 100%);
            padding: 80px 0;
        }

        .tieup-badge {
            display: inline-block;
            padding: 10px 22px;
            border-radius: 50px;
            background: rgba(246, 77, 134, .12);
            color: var(--primary);
            font-weight: 700;
            font-size: 14px;
            letter-spacing: .5px;
        }

        .tieup-title {
            font-size: 42px;
            font-weight: 800;
            color: #222;
        }

        .tieup-subtitle {
            max-width: 700px;
            margin: auto;
            color: #666;
        }

        .tieup-card {
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .08);
            transition: .4s;
            height: 100%;
            border: 1px solid #f1f1f1;
            position: relative;
        }

        .tieup-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(246, 77, 134, .18);
        }

        .tieup-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #f64d86, #ff8cb2);
        }

        .hospital-top {
            padding: 30px;
            text-align: center;
        }

        .hospital-icon {
            width: 90px;
            height: 90px;
            margin: auto;
            border-radius: 50%;
            background: linear-gradient(135deg, #f64d86, #ff9aba);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 40px;
            margin-bottom: 18px;
        }

        .hospital-name {
            font-size: 24px;
            font-weight: 700;
            color: #222;
        }

        .location {
            color: #777;
            margin-bottom: 20px;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            background: var(--primary-light);
            padding: 15px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .stats div {
            text-align: center;
        }

        .stats h5 {
            color: var(--primary);
            font-weight: 800;
            margin: 0;
        }

        .stats span {
            font-size: 13px;
            color: #666;
        }

        .doctor-box {
            background: #fafafa;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 12px;
            text-align: left;
        }

        .doctor-box h6 {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 5px;
        }

        .doctor-box p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }

        .btn-tieup {
            width: 100%;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 12px;
            font-weight: 700;
            transition: .3s;
        }

        .btn-tieup:hover {
            background: #e33b74;
            color: #fff;
        }

        .network-counter {
            background: #fff;
            padding: 25px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            margin-bottom: 50px;
        }

        .network-counter h2 {
            color: var(--primary);
            font-weight: 800;
            margin-bottom: 5px;
        }

        .partnership-status {
            text-align: center;
            margin-bottom: 15px;
        }

        .status-badge {
            background: #e9fff0;
            color: #198754;
            padding: 8px 15px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
        }

        .hospital-actions {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 20px;
        }

        .action-btn {
            text-decoration: none;
            background: #fff7fa;
            border: 1px solid rgba(246, 77, 134, .2);
            color: #f64d86;
            padding: 12px;
            border-radius: 12px;
            text-align: center;
            font-weight: 600;
            transition: .3s;
        }

        .action-btn:hover {
            background: #f64d86;
            color: #fff;
            transform: translateY(-3px);
        }

        .payment-box {
            background: linear-gradient(135deg,
                    #f64d86,
                    #ff8db5);
            color: white;
            border-radius: 15px;
            padding: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .payment-box h5 {
            margin: 0;
            font-weight: 700;
        }

        .payment-status {
            background: white;
            color: #f64d86;
            padding: 8px 16px;
            border-radius: 30px;
            font-weight: 700;
        }

        .tieup-card {
            position: relative;
            overflow: hidden;
        }

        .tieup-card::after {
            content: "Mother Care Partner";
            position: absolute;
            top: 15px;
            right: -35px;
            background: #f64d86;
            color: #fff;
            padding: 6px 40px;
            font-size: 11px;
            font-weight: 700;
            transform: rotate(45deg);
        }
    </style>

    <section class="hospital-tieup">
        <div class="container">
            <div class="text-center mb-5">
                <span class="tieup-badge">
                    🤝 HEALTHCARE PARTNERS NETWORK
                </span>

                <h2 class="tieup-title mt-3">
                    Trusted Hospital Tie-Ups
                </h2>

                <p class="tieup-subtitle">
                    Mother Care Hospital collaborates with leading hospitals,
                    specialists and emergency care centers to ensure the best
                    treatment for mothers and newborns.
                </p>
            </div>

            <div class="network-counter">
                <h2>25+</h2>
                <p class="mb-0">Partner Hospitals & Specialists Across India</p>
            </div>

            <div class="row g-4">

                <div class="col-lg-4">
                    <div class="tieup-card">

                        <div class="hospital-top">
                            <div class="hospital-icon">
                                <i class="bi bi-hospital"></i>
                            </div>

                            <h4 class="hospital-name">
                                Apollo Hospital
                            </h4>

                            <div class="location">
                                Ranchi, Jharkhand
                            </div>

                            <div class="stats">
                                <div>
                                    <h5>12</h5>
                                    <span>Doctors</span>
                                </div>

                                <div>
                                    <h5>24×7</h5>
                                    <span>Emergency</span>
                                </div>

                                <div>
                                    <h5>15+</h5>
                                    <span>Years</span>
                                </div>
                            </div>

                            <div class="doctor-box">
                                <h6>Dr. Rajesh Kumar</h6>
                                <p>Senior Gynecologist</p>
                            </div>

                            <div class="doctor-box">
                                <h6>Dr. Priya Sharma</h6>
                                <p>Obstetric Specialist</p>
                            </div>

                            <button class="btn btn-tieup">
                                View Hospital
                            </button>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="tieup-card">

                        <div class="hospital-top">
                            <div class="hospital-icon">
                                <i class="bi bi-hospital"></i>
                            </div>

                            <h4 class="hospital-name">
                                Medanta Hospital
                            </h4>

                            <div class="location">
                                Patna, Bihar
                            </div>

                            <div class="stats">
                                <div>
                                    <h5>18</h5>
                                    <span>Doctors</span>
                                </div>

                                <div>
                                    <h5>24×7</h5>
                                    <span>Emergency</span>
                                </div>

                                <div>
                                    <h5>20+</h5>
                                    <span>Years</span>
                                </div>
                            </div>

                            <div class="doctor-box">
                                <h6>Dr. Anjali Singh</h6>
                                <p>Women Care Specialist</p>
                            </div>

                            <div class="doctor-box">
                                <h6>Dr. Vivek Kumar</h6>
                                <p>Neonatologist</p>
                            </div>

                            <button class="btn btn-tieup">
                                View Hospital
                            </button>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="tieup-card">

                        <div class="hospital-top">
                            <div class="hospital-icon">
                                <i class="bi bi-hospital"></i>
                            </div>

                            <h4 class="hospital-name">
                                Paras Hospital
                            </h4>

                            <div class="location">
                                Delhi NCR
                            </div>

                            <div class="stats">
                                <div>
                                    <h5>10</h5>
                                    <span>Doctors</span>
                                </div>

                                <div>
                                    <h5>24×7</h5>
                                    <span>Emergency</span>
                                </div>

                                <div>
                                    <h5>12+</h5>
                                    <span>Years</span>
                                </div>
                            </div>

                            <div class="doctor-box">
                                <h6>Dr. Neha Verma</h6>
                                <p>Maternal Care Expert</p>
                            </div>

                            <div class="doctor-box">
                                <h6>Dr. Amit Sinha</h6>
                                <p>Child Specialist</p>
                            </div>

                            <button class="btn btn-tieup">
                                View Hospital
                            </button>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="container mt-5">
            <div class="partnership-status">
                <span class="status-badge">
                    <i class="bi bi-patch-check-fill"></i>
                    Active Tie-Up
                </span>
            </div>


        </div>


    </section>
@endsection
