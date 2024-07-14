<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>ABIC MANPOWER SERVICE CORP</title>

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <style>
        .job-table {
            width: 1000px;
            height: 500px;
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
            background-color: #4CAF50;
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
            align-items: flex-start;
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
            width: 100%;
            max-width: 600px;
            background: #f9f9f9;
            height: 40px;
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
                width: 100%;
                max-width: none;
            }

            .about_section .btn-accept {
                align-self: flex-end;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    @include('Components.calendar-header')

    <!-- Main Content -->
    <section class="about_section layout_padding">
        <div class="container">
            <h1 class="text-center">We Are Hiring!</h1>
            <table class="job-table">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
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
        </div>
    </section>

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
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
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
                                <label for="position">Position Applied</label>
                                <input type="text" class="form-control" id="position" name="position">
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

    <!-- Footer -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Custom Scripts -->
    <script>
       

        $(document).ready(function () {
            @if(session()->has('message'))
                swal("Message", "{{ session()->get('message') }}", 'success', {
                    button: "OK",
                });
            @endif
        });
    </script>
</body>
@include('Components.footer')
</html>
