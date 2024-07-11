<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Avatars - Kaiadmin Bootstrap 5 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="Admin/assets/img/kaiadmin/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="js/dd/datatables.css">
	<link rel="stylesheet" href="js/dd/datatables.min.css">
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
                        <h3 class="fw-bold mb-3">Job Applications</h3>
                        <ul class="breadcrumbs mb-3">

                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Job Application Details</h4>
									<div class="dt-buttons btn-group d-flex justify-content-end gap-2 ">
										<div class="dropdown">
											<button type="button" class="btn btn-primary dropdown-toggle"
												data-bs-toggle="dropdown" aria-expanded="false">
												<i class='bx bx-export'></i> Export
											</button>
											<ul class="dropdown-menu">
												<li><button type="button" id="copyBtn" class="btn dropdown-item"><i
															class='bx bx-copy'></i> Copy</button></li>
												<li><button type="button" id="printBtn" class="btn dropdown-item"><i
															class='bx bx-printer'></i> Print</button></li>
												<li><button type="button" id="excelBtn" class="btn dropdown-item"><i
															class='bx bx-file'></i>Excel</button></li>
												<li><button type="button" id="pdfBtn" class="btn dropdown-item"><i
															class='bx bxs-file-pdf'></i> Pdf</button></li>
											</ul>
										</div>
										<div class="dropdown">


										</div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="myDataTable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
													<th>Position</th>
													<th>Message</th>
                                                    <th>Resume</th>
                                                    <th>Assign the Date of Interview</th>
													<th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($applications as $application)
                                                <tr>
                                                    <td>{{ $application->name}}</td>
                                                    <td>{{ $application->email }}</td>
													<td>{{ $application->address }}</td>
                                                    <td>{{ $application->phone }}</td>
                                                    <td>{{ $application->position}}</td>
													<td>{{ $application->message }}</td>
                                                    <td><a href="{{ asset($application->resume) }}">Download Resume</a></td>
                                                    <td>
                                                        <form method="POST" action="{{ url('assign-date', $application->id) }}" id="assignDateForm">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="date">Choose Interview Date and Time:</label>
                                                                <input type="datetime-local" id="date" name="date" class="form-control" required>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Assign Date</button>
                                                        </form>

                                                    </td>
													<td>{{ $application->status }}</td>
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
	<script src="js/dd/datatables.min.js"></script>
					<script src="js/dd/datatables.js"></script>

					<script>
                       $(document).ready(function () {
    var dataTable = $('#myDataTable').DataTable({
        responsive: true, // Enable Responsive extension
        inlineEditing: true,
        buttons: [
            'print', 'copy', 'csv', 'pdf',
            {
                extend: 'excelHtml5',
                text: '<i class="bx bx-file"></i> Excel',
                className: 'btn btn-primary dropdown-item',
                exportOptions: {
                    format: {
                        body: function (data, row, column, node) {
                            // If column is resume, return the URL
                            if (column === 6) { // Adjust column index based on your data
                                return data;
                            } else {
                                return node.innerText;
                            }
                        }
                    }
                },
                customize: function(xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                    $('row c[r^="G"]', sheet).each(function() {
                        var $cell = $(this);
                        var href = $cell.text();
                        $cell.empty().append('<a href="' + href + '">' + href + '</a>');
                    });
                }
            }
        ],
        "language": {
            "search": "Search: ",
            "searchPlaceholder": "Search here..."
        }
    });

    // Button click events
    $('#printBtn').on('click', function () {
        dataTable.button('.buttons-print').trigger();
    });
    $('#copyBtn').on('click', function () {
        dataTable.button('.buttons-copy').trigger();
    });
    $('#excelBtn').on('click', function () {
        dataTable.button('.buttons-excelHtml5').trigger();
    });
    $('#pdfBtn').on('click', function () {
        dataTable.button('.buttons-pdf').trigger();
    });
});

                    </script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

</body>
</html>
