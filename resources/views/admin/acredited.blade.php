<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Avatars - Kaiadmin Bootstrap 5 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="Admin/assets/img/kaiadmin/favicon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="Admin/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Public Sans:300,400,500,600,700"]},
			custom: {"families":["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['Admin/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="Admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="Admin/assets/css/plugins.min.css">
	<link rel="stylesheet" href="Admin/assets/css/kaiadmin.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="Admin/assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!-- Sidebar -->
	@include('Components.admin.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="main-header">
				<div class="main-header-logo">
					<!-- Logo Header -->
					<div class="logo-header" data-background-color="dark">

						<a href="../index.html" class="logo">
							<img src="Admin/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20">
						</a>
						<div class="nav-toggle">
							<button class="btn btn-toggle toggle-sidebar">
								<i class="gg-menu-right"></i>
							</button>
							<button class="btn btn-toggle sidenav-toggler">
								<i class="gg-menu-left"></i>
							</button>
						</div>
						<button class="topbar-toggler more">
							<i class="gg-more-vertical-alt"></i>
						</button>

					</div>
					<!-- End Logo Header -->
				</div>
				<!-- Navbar Header -->
				<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">

					<div class="container-fluid">


						<ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
							<li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
								<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
									<i class="fa fa-search"></i>
								</a>
								<ul class="dropdown-menu dropdown-search animated fadeIn">
									<form class="navbar-left navbar-form nav-search">
										<div class="input-group">
											<input type="text" placeholder="Search ..." class="form-control">
										</div>
									</form>
								</ul>
							</li>





							<li class="nav-item topbar-user dropdown hidden-caret">
								<a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
									<div class="avatar-sm">
										<img src="Admin/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
									</div>
									<span class="profile-username">
										<span class="op-7">Hi,</span> <span class="fw-bold">ABIC MANPOWER</span>
									</span>
								</a>
								<ul class="dropdown-menu dropdown-user animated fadeIn">
									<div class="dropdown-user-scroll scrollbar-outer">
										<li>
											<div class="user-box">
												<div class="avatar-lg"><img src="Admin/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
												<div class="u-text">
													<h4>Hizrian</h4>
													<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
												</div>
											</div>
										</li>
										<li>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">My Profile</a>
											<a class="dropdown-item" href="#">My Balance</a>
											<a class="dropdown-item" href="#">Inbox</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Account Setting</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">Logout</a>
										</li>
									</div>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<!-- End Navbar -->
			</div>

			<div class="container">
                <div class="page-inner">
                    <div class="page-header d-flex justify-content-between align-items-center">
                        <ul class="breadcrumbs mb-3">
                            <!-- Breadcrumb items can be added here if needed -->
                        </ul>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                Upload Company Details
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Job Application Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Company Name</th>
                                                    <th>Company Image</th>
                                                    <!-- Add more table headings as needed -->
                                                </tr>
                                            </thead>
                                            <!-- Uncomment and adjust the tbody section when ready to display data -->
                                            <tbody>
                                                @foreach($companies as $company)
                                                <tr>
                                                    <td>{{ $company->name }}</td>
                                                    <td><img src="{{ asset($company->image) }}" alt="Company Image" style="max-width: 100px;"></td>
                                                </tr>
                                                @endforeach
                                            </tbody>



                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<!-- Add this code inside the <body> tag, preferably after the main panel div -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload Company Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" name="companyname" placeholder="Enter company name">
                        </div>
                        <div class="mb-3">
                            <label for="companyImage" class="form-label">Company Image</label>
                            <input type="file" class="form-control" id="companyImage" name="companyimage">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Company Details</button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Add this button where you want to trigger the modal -->



	<script src="Admin/assets/js/core/jquery-3.7.1.min.js"></script>
	<script src="Admin/assets/js/core/popper.min.js"></script>
	<script src="Admin/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="Admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Moment JS -->
	<script src="Admin/assets/js/plugin/moment/moment.min.js"></script>
	<!-- Chart JS -->
	<script src="Admin/assets/js/plugin/chart.js/chart.min.js"></script>
	<!-- jQuery Sparkline -->
	<script src="Admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
	<!-- Chart Circle -->
	<script src="Admin/assets/js/plugin/chart-circle/circles.min.js"></script>
	<!-- Datatables -->
	<script src="Admin/assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Bootstrap Notify -->
	<script src="Admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
	<!-- jQuery Vector Maps -->
	<script src="Admin/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
	<script src="Admin/assets/js/plugin/jsvectormap/world.js"></script>
	<!-- Sweet Alert -->
	<script src="Admin/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

	<!-- Kaiadmin JS -->
	<script src="Admin/assets/js/kaiadmin.min.js"></script>

	<!-- Kaiadmin DEMO methods, don't include it in your project! -->
	<script src="Admin/assets/js/setting-demo2.js"></script>
</body>
</html>
