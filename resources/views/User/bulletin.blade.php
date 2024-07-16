@include('Components.header')
<!DOCTYPE html>
<html lang="en">
<link href="css/bulletin.css" rel="stylesheet" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Services Box</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        .service-block {
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            height: 100%;
        }

        .service-icon img, .service-icon i {
            width: 50px;
            height: 50px;
        }

        .color-bg {
            background-color: #f8f9fa;
        }
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Montserrat', sans-serif;
}

p {
    margin: 0;
}

.topnav a {
    float: left;
    display: block;
    color: #8d8b8b;
    font-weight: 800;
    font-size: 14px;
    text-transform: uppercase;
    padding: 14px 10px;
    text-decoration: none;
    border-bottom: 3px solid transparent;
}

.topnav a:hover {
    color: black;
    border-bottom: 3px solid red;
}

.topnav .active {
    color: black;
    border-bottom: 3px solid red;
}

.category .job {
    height: 280px;
    border: 1px solid transparent;
    padding: 30px 19px 25px 19px;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.category .job:hover {
    border: 1px solid #0d6efd;
}

.category .job span {
    padding: 6px 20px;
    font-weight: 400;
    border-radius: 26px;
    display: inline-block;
}

.category .job .colors1 {
    font-weight: 800;
    color: #F27E42;
    background: #f27e4242;
}

.category .job .colors2 {
    font-weight: 800;
    color: #4294F2;
    background: rgba(66, 148, 255, 0.26);
}

.category .job .colors3 {
    font-weight: 800;
    color: #2EB98D;
    background: rgba(46, 185, 141, 0.03);
}

.category .job .colors4 {
    font-weight: 800;
    color: #6A42F2;
    background: rgba(106, 66, 242, 0.07);
}

.category .job .colors5 {
    font-weight: 800;
    color: #F162BC;
    background: rgba(241, 98, 188, 0.07);
}

.category .job .colors2 {
    font-weight: 800;
    color: #4294F2;
    background: rgba(66, 148, 255, 0.26);
}

a {
    text-decoration: none;
    font-size: 20px;
    font-weight: 600;
    color: #071112;
    text-transform: capitalize;
    margin-bottom: 17px;
    display: block;
}

.place {
    display: flex;
    align-items: center;
    font-size: 12px;
    padding-left: 0px;
    color: #76787A;
}

.left {
    font-weight: 800;
}

.category .job span.time {
    font-weight: 900;
}

.btn.btn-primary {
    width: 150px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}


.mt-30 {
    margin-top: 30px;
}

.mb-30 {
    margin-bottom: 30px;
}
/* Ensure the job card background is white and text is black */
.category .job {
    background-color: white;
    color: black;
    height: 280px;
    border: 1px solid transparent;
    padding: 30px 19px 25px 19px;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

/* Ensure all nested text inside the job card is black */
.category .job * {
    color: black;
}

    </style>
</head>

<body>
    <section class="services">
        <div class="container">
            <div class="row justify-content-center">
                <!-- section title -->
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center">
                        <h2>Philippine Holidays</h2>
                        <p>In the Philippines, "Regular Holidays" are special days when Filipino workers typically enjoy paid leave. These holidays are not only a time for relaxation but also hold deep cultural and historical significance, bringing the nation together in celebration and reflection.</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->
            </div>
            <div class="row no-gutters">

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 color-bg text-center">
                        <div class="service-icon text-center">
                            <i class="fa-regular fa-clone"></i>
                        </div>
                        <h3>Regular Holiday</h3>
                        <h4>Holidays for 2024 include:</h4>
                        <h6>New Year’s Day – January 1 (Monday)</h6>
                        <h6>Maundy Thursday – March 28 (Thursday)</h6>
                        <h6>Good Friday – March 29 (Friday)</h6>
                        <h6>Araw ng Kagitingan (Day of Valor) – April 9 (Tuesday)</h6>
                        <h6>Eid’l Fitr – April 10 (Wednesday)</h6>
                        <h6>Labor Day – May 1 (Wednesday)</h6>
                        <h6>Independence Day – June 12 (Wednesday)</h6>
                        <h6>Eid’l Adha – June 17 (Monday)</h6>
                        <h6>National Heroes Day – August 26 (Monday)</h6>
                        <h6>Bonifacio Day – November 30 (Saturday)</h>
                        <h6>Christmas Day – December 25 (Wednesday)</>
                        <h6>Rizal Day – December 30 (Monday)</h6>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 text-center">
                        <div class="service-icon text-center">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <h3 style="color:white">Special Non-Working Holidays</h3>
                        <h6 style="color:white"> Chinese New Year – February 10 (Saturday)</h6>
                        <h6 style="color:white">Black Saturday – March 30 (Saturday)</h6>
                        <h6 style="color:white">Ninoy Aquino Day – August 21 (Wednesday)</h6>
                        <h6 style="color:white">All Saints’ Day – November 1 (Friday)</h6>
                        <h6 style="color:white">All Soul’s Day – November 2 (Saturday)</h6>
                        <h6 style="color:white">Feast of the Immaculate Conception of Mary – December 8 (Sunday)</h6>
                        <h6 style="color:white">All Souls’ Day – November 2 (Saturday)</h6>
                        <h6 style="color:white">Christmas Eve – December 24 (Tuesday)</h6>
                        <h6 style="color:white">Last day of the year (New Year’s Eve) – December 31 (Tuesday)</h6>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 color-bg text-center">
                        <div class="service-icon text-center">
                        <img src="Social_Security_System_(SSS).svg.png" alt="Logo" style="width: 50px; height: 50px;">
                        </div>
                        <h3>SSS/GSIS</h3>
                        <p>The Social Security System (SSS) in the Philippines provides social insurance benefits for private sector employees. Recent changes under Republic Act No. 11199 increased the SSS contribution rate from 11% to 12%, raised the Monthly Salary Credits (MSC) to P2,000, and set the maximum MSC at P20,000. Contributions for employees earning P2,250 or less are P80, with employers contributing P160, totaling P240. For those earning P19,750 or more, employees contribute P800, with employers adding P1,600, making a total of P2,400. The Government Service Insurance System (GSIS) applies a simpler calculation: employees contribute 9% of their compensation, while employers contribute 12%. Constitutional commissioners and judiciary officers contribute 3% each, with their employers matching that amount</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4  text-center">
                        <div class="service-icon text-center">
                        <img src="pagibig-removebg-preview.png" alt="Logo" style="width: 50px; height: 50px;">
                        </div>
                        <h3>Pag-ibig</h3>
                        <p>Under PhilHealth Circular No. 2017-2004, effective January 2018, the total monthly premium for health insurance is 2.75% of an employee’s basic salary, split equally between employee and employer. Employees earning up to P10,000 pay a minimum of P137.50 each, while those earning P40,000 or more pay a maximum of P1,100, with both employee and employer contributing up to P550 each. Contributions are rounded to two decimal places and matched equally between employee and employer.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 color-bg text-center">
                        <div class="service-icon text-center">
                        <img src="philhealth.jpg" alt="Logo" style="width: 50px; height: 50px;">
                        </div>
                        <h3>Philhealth</h3>
                        <p>
PhilHealth, the Philippine Health Insurance System, mandates that all employees have health insurance coverage. Employers must deduct part of employees' salaries for PhilHealth and remit the payments.

As of January 2018, under PhilHealth Circular No. 2017-2004, the total monthly premium is 2.75% of the employee's basic salary, split equally between employee and employer. Employees with a gross monthly salary of P10,000 or less pay a minimum of P137.50, while those earning P40,000 or more pay a maximum of P1,100, with both the employee and employer each contributing up to P550. Contributions are rounded to the nearest hundredth, with equal shares from both employee and employer.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="service-block p-4 text-center">
                        <div class="service-icon text-center">
                        <img src="13.jpg" alt="Logo" style="width: 50px; height: 50px;">
                        </div>
                        <h3>13th Month Pay</h3>
                        <p>Under Presidential Decree 851, employers in the Philippines are required to provide a 13th month pay to all rank-and-file employees who have worked for more than one month during the year. This payment, equivalent to one-twelfth of the employee’s gross basic annual salary, must be given by December 24 each year.

Leaves without pay are not included in the annual salary calculation for the 13th month pay. While the 13th month pay is taxable, it is exempt from tax if the total, including other benefits, does not exceed P90,000. Any amount above this threshold is subject to tax.</p>
                    </div>
                </div>
                <!-- End Single Service Item -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
    <style>
    .containere {
        width: 90%;
        margin: 0 auto;
    }

    .rowd {
        display: flex;
        flex-wrap: wrap;
    }

    .col-lg-4, .col-md-6, .col-sm-6 {
        flex: 1 0 33.3333%; /* Equal width for all columns */
        max-width: 33.3333%;
        padding: 15px;
        box-sizing: border-box;
    }

    .categorys {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        height: 100%; /* Ensures each category occupies full height */
        display: flex;
        flex-direction: column; /* Stack content vertically */
    }

    .job {
        padding: 15px;
        flex: 1; /* Ensure job content takes full height of category */
        display: flex;
        flex-direction: column; /* Stack content vertically */
    }

    .job h5 a {
        text-decoration: none;
        color: #333;
    }

    .job .description {
        overflow: hidden;
        text-overflow: ellipsis; /* Optionally truncate text */
    }
</style>

<div class="containere">
    <div class="rowd">
        @foreach($bulletins as $board)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="categorys mb-30">
                <div class="job">
                    <h5><a href="{{ $board->link }}">{{ $board->title }}</a></h5>
                    <p class="description">{{ $board->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

            
            
      
    <!-- footer section -->
    @include('Components.footer')
    <!-- footer section -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
