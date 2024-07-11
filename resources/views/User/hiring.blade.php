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

    <title>ABIC MANPOWER SERVICE CORP</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
        rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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

                        {{-- <a href="" class="contact_link2">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                Call : +01 1234567890
                            </span>
                        </a> --}}
                        {{-- <a href="mailto:abic.talentteams@gmail.com" class="contact_link3">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                abic.talentteams@gmail.com
                            </span>
                        </a> --}}

                    </div>
                </div>
                <div class="social-buttons-container">
                    <div class="social-buttons">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100090318514723"><i class="fa-brands fa-facebook-f fa-lg"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram fa-lg"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-telegram fa-lg"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter fa-lg"></i></a></li>

                        </ul>
                    </div>
                </div>

            </div>

            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="/">
                            <img src="images/logo-removebg-preview.png" alt="Logo"
                                style="height: 100px; margin-right: 10px;">
                            {{-- <span>Abic Manpower Service Corp</span> --}}
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
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Job Seekers
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="careers">Careers</a>
                                        <a class="dropdown-item" href="ojtform">OJT</a>
                                        {{-- <a class="dropdown-item" href="#">Manpower Requisition</a>
                            <a class="dropdown-item" href="#">Labor Standard Checklist</a> --}}
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Corporate Partners
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="profile">Profile</a>
                                        <a class="dropdown-item" href="requisition">Manpower Requisition</a>
                                        <a class="dropdown-item" href="labor">Labor Standard Checklist</a>
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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
</head>

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
            <th>Location</th>
            <th>Position</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <!-- Existing static row -->
   

    <!-- Dynamic rows from $joboffer -->
    @foreach($joboffer as $job)
    <tr>
        <td>{{ $job->location }}</td>
        <td>{{ $job->title }}</td>
        <td>
            <button type="button" class="btn btn-primary mb-2 apply-btn" data-toggle="modal" data-target="#Request" style="width: 80%;">Apply Now</button>
        </td>
    </tr>
    @endforeach
</tbody>

</table>

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
                            <label for="job-category">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Contact Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="job-name">Position Applied</label>
                            <input type="text" class="form-control" id="position" name="position" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3">{{ old('message', 'Default Message') }}</textarea>
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

  <!-- info section -->
  @include('Components.footer')

<!-- JavaScript Section -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    // SweetAlert script to show message if session has 'message' key
    $(document).ready(function () {
        @if(session()->has('message'))
            swal("Message", "{{ session()->get('message') }}", 'success', {
                button: "OK",
            });
        @endif
    });
</script>
<script>
    // SweetAlert script to show message if session has 'message' key
    $(document).ready(function () {
        @if(session()->has('message'))
            swal("Message", "{{ session()->get('message') }}", 'Failed', {
                button: "OK",
            });
        @endif
    });
</script>