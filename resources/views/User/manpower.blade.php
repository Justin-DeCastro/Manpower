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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

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
                <img src="images/manbackground3.jpg" alt="">
            </div>
        </div>
  <header class="header_section">
    <div class="header_top">

        <div class="container-fluid">
            <div class="contact_link-container">
                {{-- <li> <div id="google_translate_element"></div></li> --}}
                <a href="https://www.google.com/maps/place/Unit+403,+Campos+Rueda+Building,+101+Urban+Ave,+Makati,+1206+Metro+Manila" class="contact_link1">
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
                    <img src="images/logo-removebg-preview.png" alt="Logo" style="height: 100px; margin-right: 10px;">
                    <span>Abic Manpower Service Corp</span>
                  </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Job Seekers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="careers">Careers</a>
                            {{-- <a class="dropdown-item" href="#">Manpower Requisition</a>
                            <a class="dropdown-item" href="#">Labor Standard Checklist</a> --}}
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
<br>
<br>
    <style>
        /* Container styles */
        .form-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            font-family: Arial, sans-serif;
        }

        /* Label styles */
        label {
            font-weight: bold;
            margin-bottom: 8px; /* Adjusted margin for labels */
            display: block;
        }

        /* Input and select styles */
        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px; /* Adjusted margin for inputs */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-control-lg {
            padding: 12px;
            font-size: 16px;
        }

        /* Checkbox styles */
        .form-checkbox {
            margin-bottom: 10px;
        }

        /* Submit button styles */
        .btn-submit {
            background-color: #4CAF50;
            color: white;
            padding: 12px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }

        /* Two columns layout */
        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 10px; /* Adjusted margin for rows */
        }

        .form-group {
            flex: 0 0 calc(50% - 10px);
        }

        @media (max-width: 768px) {
            .form-group {
                flex: 0 0 100%;
            }
        }

        /* Side by side inputs */
        .side-by-side {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .side-by-side .form-control {
            width: calc(50% - 5px); /* Adjust width for two inputs */
            margin-right: 5px;
            margin-bottom: 10px; /* Adjusted margin for side-by-side inputs */
        }

        /* Adjustments for smaller screens */
        @media (max-width: 576px) {
            .side-by-side .form-control {
                width: 100%; /* Full width on smaller screens */
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        /* Salary range section */
        .salary-range {
            margin-top: 20px; /* Adjusted margin for separation */
        }

        .salary-range .side-by-side .form-control {
            width: calc(33.33% - 5px); /* Adjust width for three inputs */
        }

        @media (max-width: 576px) {
            .salary-range .side-by-side .form-control {
                width: 100%; /* Full width on smaller screens */
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        /* New styles for additional rows */
        .form-row-three {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 10px; /* Adjusted margin for rows */
        }

        .form-group-three {
            flex: 0 0 calc(33.33% - 10px);
        }

        @media (max-width: 768px) {
            .form-group-three {
                flex: 0 0 100%;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <form action="/submit_job_form" method="post">

            <!-- First row -->
            <div class="form-row-three">
                <div class="form-group-three">
                    <label for="work_type">Employment Type:</label>
                    <select id="work_type" name="work_type" class="form-control form-control-lg">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Project Based">Project Based</option>
                        <option value="Contractual">Contractual</option>
                    </select>
                </div>

                <div class="form-group-three">
                    <label for="vacant_position">Vacant Position:</label>
                    <input type="text" id="vacant_position" name="vacant_position" class="form-control form-control-lg" placeholder="Vacant Position" required>
                </div>

                <div class="form-group-three">
                    <label for="job_category">Job Category:</label>
                    <input type="text" id="job_category" name="job_category" class="form-control form-control-lg" placeholder="Job Category" required>
                </div>
            </div>

            <!-- Second row -->
            <div class="form-row-three">
                <div class="form-group-three">
                    <label for="no_of_vacancy">Number of Vacancies:</label>
                    <input type="number" id="no_of_vacancy" name="no_of_vacancy" class="form-control form-control-lg" placeholder="Number of Vacancies" required>
                </div>

                <div class="form-group-three">
                    <label for="years_experience">Years of Experience Required:</label>
                    <input type="text" id="years_experience" name="years_experience" class="form-control form-control-lg" placeholder="Years of Experience" required>
                </div>

                <div class="form-group-three">
                    <label for="working_location">Working Location:</label>
                    <input type="text" id="working_location" name="working_location" class="form-control form-control-lg" placeholder="Working Location" required>
                </div>
            </div>

            <!-- Third row -->
            <div class="form-row-three">
                <div class="form-group-three">
                    <label for="working_schedule">Working Schedule:</label>
                    <div class="side-by-side">
                        <input type="text" id="working_schedule_hours" name="working_schedule_hours" class="form-control" placeholder="Hours">
                        <input type="text" id="working_schedule_days" name="working_schedule_days" class="form-control" placeholder="Days">
                    </div>
                </div>

                <div class="form-group-three">
                    <label for="payout">Payout:</label>
                    <div class="side-by-side">
                        <input type="text" id="payout_hours" name="payout_hours" class="form-control" placeholder="Hours">
                        <input type="text" id="payout_days" name="payout_days" class="form-control" placeholder="Days">
                    </div>
                </div>

                <div class="form-group-three">
                    <label for="preferred_gender">Preferred Gender:</label>
                    <select id="preferred_gender" name="preferred_gender" class="form-control form-control-lg">
                        <option value="">Select Gender</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
            </div>

            <!-- Fourth row: Job requirements, qualifications, and other requirements -->
            <div class="form-row-three">
                <div class="form-group-three">
                    <label for="job_requirements">Job Requirements:</label>
                    <textarea id="job_requirements" name="job_requirements" class="form-control" rows="4" placeholder="Job Requirements"></textarea>
                </div>

                <div class="form-group-three">
                    <label for="qualifications">Qualifications:</label>
                    <textarea id="qualifications" name="qualifications" class="form-control" rows="4" placeholder="Qualifications"></textarea>
                </div>

                <div class="form-group-three">
                    <label for="other_requirements">Other Requirements:</label>
                    <textarea id="other_requirements" name="other_requirements" class="form-control" rows="4" placeholder="Other Requirements"></textarea>
                </div>
            </div>

            <!-- Fifth row: Target date of deployment, screening method, and job description -->
            <div class="form-row-three">
                <div class="form-group-three">
                    <label for="target_date">Target Date of Deployment:</label>
                    <input type="date" id="target_date" name="target_date" class="form-control">
                </div>

                <div class="form-group-three">
                    <label for="screening_method">Screening Method:</label>
                    <select id="screening_method" name="screening_method" class="form-control">
                        <option value="Face-to-Face">Face-to-Face</option>
                        <option value="Virtual">Virtual</option>
                        <option value="Both">Both</option>
                    </select>
                </div>

                <div class="form-group-three">
                    <label for="job_description">Job Description:</label>
                    <textarea id="job_description" name="job_description" class="form-control" rows="4" placeholder="Job Description" required></textarea>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-submit">Submit</button>
        </form>
    </div>





<!-- end team section -->

<!-- info section -->


<!-- end info_section -->




<!-- footer section -->
@include('Components.footer')
<!-- footer section -->

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
