<!DOCTYPE html>
<html>

<style>
    body {
        background-color: #E3F2FD;
    }

    .heading {
        font-size: 20px;
        font-weight: 600;
        color: #3D5AFE;

    }

    .line1 {
        color: #000;
        font-size: 12px;

    }

    .line2 {
        color: #000;
        font-size: 12px;

    }

    .line3 {
        color: #000;
        font-size: 12px;

    }

    .cards {

        transition: all 0.2s ease;
        cursor: pointer;


    }



    .cards:hover {

        box-shadow: 5px 6px 6px 2px #e9ecef;
        transform: scale(1.1);
    }
</style>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>Manpower</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
        rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <div class="hero_bg_box">
            <div class="img-box">
                <img src="manpower.png" alt="">
            </div>
        </div>
        <header class="header_section">
            <div class="header_top">

                <div class="container-fluid">
                    <div class="contact_link-container">
                        {{-- <li> <div id="google_translate_element"></div></li> --}}
                        <a href="https://www.google.com/maps/place/Unit+403,+Campos+Rueda+Building,+101+Urban+Ave,+Makati,+1206+Metro+Manila"
                            class="contact_link1">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                            <span>
                                Unit 403, Campos Rueda Building, 101 Urban Ave, Makati, 1206 Metro Manila

                            </span>
                        </a>

                        <a href="" class="contact_link2">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +01 1234567890
                            </span>
                        </a>
                        <a href="mailto:abic.talentteams@gmail.com" class="contact_link3">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                abic.talentteams@gmail.com
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="/">
                            <img src="images/logo-removebg-preview.png" alt="Logo"
                                style="height: 100px; margin-right: 10px;">
                            <span>Abic Manpower Service Corp</span>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""></span>
                        </button>

                        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                            <ul class="navbar-nav  ">
                                <li class="nav-item ">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about"> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service"> Services </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Job Seekers
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="careers">Careers</a>
                                        {{-- <a class="dropdown-item" href="#">Manpower Requisition</a>
                            <a class="dropdown-item" href="#">Labor Standard Checklist</a> --}}
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Corporate
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Profile</a>
                                        <a class="dropdown-item" href="requisition">Manpower Requisition</a>
                                        <a class="dropdown-item" href="#">Labor Standard Checklist</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="award"> Awards & Achievements </a>
                                </li>
                                {{-- <li class="nav-item">
                        <a class="nav-link" href="contact">Contact us</a>
                    </li> --}}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


        <style>
            .card {
                border: 1px solid #ccc;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin: 20px;
                padding: 20px;
                background-color: #f9f9f9;
                max-width: 600px;
                overflow: hidden;
            }

            .card-header {
                background-color: #007bff;
                color: #fff;
                padding: 10px;
                border-radius: 8px 8px 0 0;
            }

            .card-body {
                padding: 20px;
            }

            .company-info p {
                margin-bottom: 10px;
                font-size: 16px;
            }

            .company-info a {
                color: #007bff;
                text-decoration: none;
            }

            .documents {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
            }

            .sub-card {
                flex: 0 0 calc(50% - 10px);
                /* Two cards side by side with margin */
                border: 1px solid #ccc;
                border-radius: 8px;
                padding: 15px;
                background-color: #fff;
                box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            }

            .sub-card img {
                max-width: 100%;
                height: auto;
                display: block;
                margin-bottom: 10px;
                border-radius: 8px;
            }


        </style>
        </head>
        <div class="container">
            <div class=" text-center mt-5 ">

                <h1> Form</h1>


            </div>


            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class = "container">
                                <form id="contact-form" role="form">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Company Name*</label>
                                                    <input id="form_name" type="text" name="name"
                                                        class="form-control"
                                                        placeholder="Please enter your firstname *"
                                                        required="required" data-error="Firstname is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Company Website Link *</label>
                                                    <input id="form_lastname" type="text" name="surname"
                                                        class="form-control"
                                                        placeholder="Please enter your lastname *" required="required"
                                                        data-error="Lastname is required.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Contact Person *</label>
                                                    <input id="form_email" type="email" name="email"
                                                        class="form-control" placeholder="Please enter your email *"
                                                        required="required" data-error="Valid email is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Position*</label>
                                                    <input id="form_email" type="email" name="email"
                                                        class="form-control" placeholder="Please enter your email *"
                                                        required="required" data-error="Valid email is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Email *</label>
                                                    <input id="form_email" type="email" name="email"
                                                        class="form-control" placeholder="Please enter your email *"
                                                        required="required" data-error="Valid email is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Phone Number *</label>
                                                    <input id="form_email" type="email" name="email"
                                                        class="form-control" placeholder="Please enter your email *"
                                                        required="required" data-error="Valid email is required.">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Copy of SEC/DTI CERTIFICATE *</label>
                                                    <input id="form_email" type="file" name="email"
                                                        class="form-control" placeholder="Please enter your email *"
                                                        required="required" data-error="Valid email is required.">

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Copy of Business Permit *</label>
                                                    <input id="form_email" type="file" name="email"
                                                        class="form-control" placeholder="Please enter your email *"
                                                        required="required" data-error="Valid email is required.">

                                                </div>
                                            </div>

                                            <div class="col-md-12">

                                                <input type="submit"
                                                    class="btn btn-success btn-send  pt-2 btn-block
                        "
                                                    value="Send Message">

                                            </div>

                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                    <!-- /.8 -->

                </div>
                <!-- /.row-->

            </div>
        </div>



        <section style="background-color: darkblue; padding: 50px 0;">
            <div class="main text-center mt-5"></div>
            <div class="container mt-4 d-flex justify-content-center">
                <div class="row g-0">
                    <div class="col-md-4 border-right">
                        <div class="cards">
                            <div class="first bg-white p-4 text-center">
                                <img src="https://img.icons8.com/clouds/100/000000/box.png" />
                                <h5>1000+ Ready Applicants</h5>
                                <p class="line1">No limitation - Its got everything that you 'll need as you grow</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 border-right">
                        <div class="cards">
                            <div class="second bg-white p-4 text-center">
                                <img src="https://img.icons8.com/clouds/100/000000/groups.png"/>
                                <h5>100 Accredited Company</h5>
                                <p class="line2">$50/month gets you 10 users, and you can add more $10 per user</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="cards">
                            <div class="third bg-white p-4 text-center">
                                <img src="https://img.icons8.com/fluent/100/000000/trophy.png"/>
                                <h5>8000+ Successful Applicants</h5>
                                <p class="line3">We'll help you get started and be there when you have questions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="card">
            <div class="card-header">
                <h3>Company Details</h3>
            </div>
            <div class="card-body">
                <div class="company-info">
                    <p><strong>Company Name:</strong> Example Company</p>
                    <p><strong>Company Website:</strong> <a href="http://example.com" target="_blank">example.com</a>
                    </p>
                    <p><strong>Contact Person/Position:</strong> John Doe, CEO</p>
                    <p><strong>Email Address:</strong> john.doe@example.com</p>
                    <p><strong>Phone Number:</strong> +1 234 567 890</p>
                </div>
                <div class="documents">
                    <div class="sub-card">
                        <h4>Copy of Certificate</h4>
                        <img src="certificate.jpg" alt="Certificate">
                    </div>
                    <div class="sub-card">
                        <h4>Copy of Business Permit</h4>
                        <img src="permit.jpg" alt="Business Permit">
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row justify-content-center text-center" style="color: white; background-color: #343a40; padding: 50px 0;">
            <div class="col-lg-10">
                <h2 class="title">Our Accredited Companies</h2>
                <p class="sub-title">We address the complex workforce challenges organizations face today, from contingent and permanent staffing to talent management, outsourcing, and talent development. We deliver the solutions that drive your business forward.</p>
            </div>
        </div>
        {{-- <div class="container mt-4">
            <div class="row justify-content-center">
                @foreach($companies as $key => $company)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <img alt="{{ $company->name }}" class="card-img-top" src="{{ asset($company->image) }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $company->name }}</h5>
                            <p class="card-text">{{ $company->description }}</p>

                        </div>
                    </div>
                </div>
                @if (($key + 1) % 4 == 0)
            </div>
            <div class="row justify-content-center">
                @endif
                @endforeach
            </div>
        </div> --}}
        <div class="row justify-content-center text-center" style="color: white; background-color: #343a40; padding: 50px 0;">
            <div class="col-lg-10">
                <h2 class="title">Our JOB FAIRS</h2>

            </div>
        </div>
                {{-- <div class="text-box-one">
                    <div class="row">
                        @foreach ($Jobs as $company)
                        <div class="col-lg-4 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                <a href="{{ asset($company->companyimage) }}" data-lightbox="{{ $company->companyname }}" data-title="{{ $company->companyname }}">
                                    <img src="{{ asset($company->companyimage) }}" alt="{{ $company->companyname }}" class="img-fluid">
                                    <h5 class="text-secondary hover-text-success py-3 m-0">
                                        {{ $company->companyname }}
                                    </h5>
                                </a>
                                <!-- Add other sale details here -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- end info_section -->




        <!-- footer section -->

        <!-- footer section -->

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>
