@include('Components.header')
<br>
<br>
    <style>
        /* styles.css */
        .form-group-three {
        margin-bottom: 20px;
    }
    .form-group-three label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    .form-group-three .checkbox-group {
        display: flex;
        justify-content: space-between;
    }
    .form-group-three .checkbox-group label {
        flex: 1; /* Distribute labels evenly */
    }
    .form-group-three input[type="text"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
.custom-side-by-side {
    display: flex;
    gap: 10px; /* Adjust the gap between inputs as needed */
}

.custom-side-by-side input {
    flex: 1; /* Allow inputs to grow and take up equal space */
}

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
                    <select id="job_category" name="job_category" class="form-control form-control-lg" required>
                        <option value="">Select Job Category</option>
                        <option value="category1">Category 1</option>
                        <option value="category2">Category 2</option>
                        <option value="category3">Category 3</option>
                        <!-- Add more options as needed -->
                    </select>
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
                        <input type="text" id="payout_hours" name="payout_date1" class="form-control" placeholder="First Cut off">
                        <input type="text" id="payout_days" name="payout_date2" class="form-control" placeholder="Second Cut off">
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
                    <label>Qualifications:</label>
                    <div class="checkbox-row">
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="qualifications[]" value="qualification1"> Qualification 1</label>
                            <label><input type="checkbox" name="qualifications[]" value="qualification2"> Qualification 2</label>
                        </div>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="qualifications[]" value="qualification3"> Qualification 3</label>
                                <label><input type="checkbox" name="qualifications[]" value="qualification3"> Qualification 4</label>
                        </div>
                            <label>Others: <input type="text" name="others_qualification"></label>

                    </div>
                </div>



                <div class="form-group-three">
                    <label for="other_requirements">Other Requirements:</label>
                    <textarea id="other_requirements" name="other_requirements" class="form-control" rows="4" placeholder="Other Requirements"></textarea>
                </div>
            </div>

            <div class="form-group-three">
                <label for="salary_from">Salary Range:</label>
                <div class="custom-side-by-side">
                    <input type="text" id="salary_from" name="salary_from" class="form-control" placeholder="From">
                    <input type="text" id="salary_to" name="salary_to" class="form-control" placeholder="To">
                    <input type="text" id="salary_allowance" name="salary_allowance" class="form-control" placeholder="Allowance">
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
