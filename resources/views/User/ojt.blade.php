@include('Components.header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<Style>


h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	margin-left: 10px;
	margin-right: 10px;
}

    </style>
<div class="container">
    <div class="text-center mt-5">
        <h1>OJT Form</h1>
    </div>

    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <form id="contact-form" role="form">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_fullname">Full Name *</label>
                                    <input id="form_fullname" type="text" name="fullname" class="form-control" placeholder="Please enter your full name *" required="required" data-error="Full name is required.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email *</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_school">School/University *</label>
                                    <input id="form_school" type="text" name="school" class="form-control" placeholder="Please enter your school/university *" required="required" data-error="School/university is required.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_course">Course/Program*</label>
                                    <input id="form_course" type="text" name="course" class="form-control" placeholder="Please enter your course/program or phone number *" required="required" data-error="Course/program or phone number is required.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_phone">Phone Number *</label>
                                    <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Please enter your phone number *" required="required" data-error="Phone number is required.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_ojt_hours">OJT Hours *</label>
                                    <input id="form_ojt_hours" type="text" name="ojt_hours" class="form-control" placeholder="Please enter your OJT hours *" required="required" data-error="OJT hours are required.">
                                </div>
                            </div>
                        </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_resume">Upload Resume *</label>
                                    <input id="form_resume" type="file" name="resume" class="form-control-file" required="required" data-error="Please upload your resume.">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send pt-2 btn-block" value="Send Message">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@include('Components.footer')
<!-- footer section -->

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
