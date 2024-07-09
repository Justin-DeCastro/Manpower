<!DOCTYPE html>
<html>

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

  <title>Abic Manpower</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<style>
    .about_section {
      padding: 10px 0;
    }

    .about_section .container {
  display: flex;
  flex-direction: column;
  align-items: flex-start; /* Align items to the left */
}

    .about_section .card {
      display: flex;
      justify-content: space-between;
      align-items: left;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 5px;
      margin: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%; /* Full width */
      max-width: 600px; /* Max width for the card */
      background: #f9f9f9;
      height: 40px; /* Same height as the button */
    }

    .about_section .card-content {
      display: flex;
      align-items: left;
    }

    .about_section .card-title-wrapper {
      margin-right: 20px;
    }

    .about_section .card-title {
      font-size: 1em;
      font-weight: bold;
      margin: 0;
    }

    .about_section .card-text {
      font-size: 0.8em;
      margin: 0;
    }

    .about_section .btn-accept {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      font-size: 0.8em;
      cursor: pointer;
      border-radius: 5px;
      transition: 0.4s ease-in-out;
      height: 30px;
      line-height: 20px;
    }

    .about_section .btn-accept:hover,
    .about_section .btn-accept:active,
    .about_section .btn-accept:focus {
      background-color: #45a049;
    }

    .about_section .card-content,
    .about_section .btn-accept {
      flex: none;
    }

    .about_section .card-title-wrapper {
      flex: 1;
      display: flex;
      justify-content: flex-start;
    }

    @media (max-width: 768px) {
      .about_section .card {
        flex-direction: column;
        align-items: flex-start;
        width: 100%; /* Full width in mobile view */
        max-width: none; /* No max width in mobile view */
      }

      .about_section .btn-accept {
        align-self: flex-end;
        margin-top: 10px;
      }
    }

    </style>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/hero-bg.jpg" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Lorem ipsum dolor sit amet,
              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
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
                <span>Abic Manpower</span>
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
                <li class="nav-item">
                    <a class="nav-link" href="careers"> Careers </a>
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
    <!-- end header section -->
  </div>

  <!-- about section -->
<br>
<br>
<br>
  <section class="about_section layout_padding">
    <div class="container">
        <h1 style="text-align: center;">We Are Hiring!</h1>


        <table class="job-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Name of Job</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <tr data-category="Human Resource" data-job="Human Resource STAFF">
                    <td>Human Resource</td>
                    <td>Human Resource STAFF</td>
                    <td><button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button></td>
                </tr>
                <tr data-category="Human Resource" data-job="Human Resource INTERNS">
                    <td>Human Resource</td>
                    <td>Human Resource INTERNS</td>
                    <td><button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button></td>
                </tr>
                <tr data-category="HR ASSISTANT TIMEKEEPING AND PAYROLL" data-job="HR ASSISTANT TIMEKEEPING AND PAYROLL STAFF">
                    <td>HR ASSISTANT TIMEKEEPING AND PAYROLL</td>
                    <td>HR ASSISTANT TIMEKEEPING AND PAYROLL STAFF</td>
                    <td><button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button></td>
                </tr>
                <tr data-category="ENGINEERING" data-job="ELECTRICAL ENGINEERING">
                    <td> ENGINEERING</td>
                    <td>ELECTRICAL ENGINEERING</td>
                    <td><button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button></td>
                </tr>
                <tr data-category="ACCOUNTING" data-job="GENERAL ACCOUNTING">
                    <td> ACCOUNTING</td>
                    <td>GENERAL ACCOUNTING </td>
                    <td><button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button></td>
                </tr>
                <tr data-category="ACCOUNTING" data-job="TAX ASSISTANT">
                    <td> ACCOUNTING</td>
                    <td>TAX ASSISTANT </td>
                    <td><button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button></td>
                </tr>
                <tr data-category="ADMIN" data-job="ADMIN STAFF">
                    <td> ADMIN</td>
                    <td>ADMIN STAFF</td>
                    <td><button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button></td>
                </tr>
                <tr data-category="MARKETING" data-job="ADMIN STAFF">
                    <td> MARKETING</td>
                    <td>FINANCE STAFF</td>
                    <td><button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button></td>
                </tr>
                <tr data-category="HUMAN RESOURCES" data-job="HR GENERALIST">
                    <td> HUMAN RESOURCES</td>
                    <td>HR GENERALIST</td>
                    <td><button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Request" tabindex="-1" role="dialog" aria-labelledby="requestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="requestModalLabel">Apply for Job</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('apply.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="job-category">Category</label>
                                <input type="text" class="form-control" id="job-category" name="job_category" readonly value="{{ old('job_category', 'Default Category') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="job-name">Name of Job</label>
                                <input type="text" class="form-control" id="job-name" name="job_name" readonly value="{{ old('job_name', 'Default Job Name') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="full-name">Full Name</label>
                                <input type="text" class="form-control" id="full-name" name="full_name" required value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" required value="{{ old('address') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" required value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resume">Upload Resume</label>
                            <input type="file" class="form-control-file" id="resume" name="resume" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('.apply-btn').forEach(button => {
      button.addEventListener('click', function() {
        const row = this.closest('tr');
        const category = row.getAttribute('data-category');
        const job = row.getAttribute('data-job');

        document.getElementById('job-category').value = category;
        document.getElementById('job-name').value = job;
      });
    });
  });
</script>

<style>
  .job-table {
    width: 100%;
    border-collapse: collapse;
  }
  .job-table th, .job-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }
  .job-table th {
    background-color: #f2f2f2;
  }
  .btn-accept {
    background-color: #4CAF50; /* Green */
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
  }
  .modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
  }
  .modal-dialog-centered .modal-content {
    margin: auto;
  }
</style>







  <!-- end about section -->

  <!-- info section -->
 @include('Components.footer')
  <!-- footer section -->
  <script src="Admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
  <script src="Admin/assets/js/demo.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
