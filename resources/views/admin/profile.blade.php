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
        <div class="page-header">
            <h3 class="fw-bold mb-3">Company Profile Applications</h3>
            <ul class="breadcrumbs mb-3">
                <!-- Breadcrumbs can be added here if needed -->
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Company Profile Application Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Website</th> <!-- Example addition based on your fields -->
                                        <th>Person</th> <!-- Example addition based on your fields -->
                                        <th>Phone Number</th>
                                        <th>Position</th> <!-- Example addition based on your fields -->
                                        <th>SEC Certificate</th> <!-- Example addition based on your fields -->
                                        <th>Business Permit</th> <!-- Example addition based on your fields -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($profile as $prof)
                                    <tr>
                                        <td>{{ $prof->name }}</td>
                                        <td>{{ $prof->email }}</td>
                                        <td>{{ $prof->website }}</td>
                                        <td>{{ $prof->person }}</td>
                                        <td>{{ $prof->phone }}</td>
                                        <td>{{ $prof->position }}</td>
                                        <td><a href="{{ asset('storage/' . $prof->sec_certificate) }}">Download SEC Certificate</a></td>
                                        <td><a href="{{ asset('storage/' . $prof->business_permit) }}">Download Business Permit</a></td>
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
