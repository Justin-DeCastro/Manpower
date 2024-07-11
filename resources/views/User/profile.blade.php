<!DOCTYPE html>
<html lang="en">

<head>
    @include('Components.header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h3>Form</h3>
                    </div>
                    <div class="card-body bg-light">
                        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="form_name" class="form-label">Company Name*</label>
                                    <input id="form_name" type="text" name="name" class="form-control"
                                        placeholder="Enter company name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="form_website" class="form-label">Company Website Link *</label>
                                    <input id="form_website" type="url" name="website" class="form-control"
                                        placeholder="Enter company website" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="form_phone">Contact Phone *</label>
                                    <input id="form_phone" type="tel" pattern="[0-9]{11}" name="phone"
                                        class="form-control" placeholder="Please enter your phone number *"
                                        required="required" data-error="Phone number must be 11 digits." maxlength="11">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="form_position" class="form-label">Position *</label>
                                    <input id="form_position" type="text" name="position" class="form-control"
                                        placeholder="Enter position" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="form_email" class="form-label">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="Enter email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="form_phone" class="form-label">Contact Person *</label>
                                    <input id="form_phone" type="text" name="person" class="form-control"
                                        placeholder="Contact person" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="form_sec_certificate" class="form-label">Copy of SEC/DTI CERTIFICATE
                                        *</label>
                                    <input id="form_sec_certificate" type="file" name="sec_certificate"
                                        class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="form_business_permit" class="form-label">Copy of Business Permit
                                        *</label>
                                    <input id="form_business_permit" type="file" name="business_permit"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include SweetAlert JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        // SweetAlert script to show message if session has 'message' key
        document.addEventListener('DOMContentLoaded', function () {
            @if(session()->has('message'))
                swal("Message", "{{ session()->get('message') }}", 'success');
            @endif
        });
    </script>
</body>

</html>
