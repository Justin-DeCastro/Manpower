<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include header -->
    @include('Components.aboutheader')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
    <!-- Styles for modal and animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* Modal Background */
       
.row{
    margin-top:100px;
}
.section-title{
    margin-top:200px;
}
    </style>
</head>
<!-- <div class="row justify-content-center text-center" style="color: white; background-color: #343a40; padding: 50px 0;">
    <div class="col-lg-10">
        <h2 class="title">Our JOB FAIRS</h2>
    </div>
</div>

<div class="text-box-one">
    <div class="row">
        @foreach ($Jobs as $index => $job)
            @if ($index % 3 == 0 && $index != 0)
                </div><div class="row">
            @endif
            <div class="col-lg-4 col-md-6">
                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                    @if ($job->companyimage)
                    <a href="{{ $job->link }}" data-lightbox="{{ $job->companyname }}" data-title="{{ $job->companyname }}">
                        <img src="{{ asset('images/' . $job->companyimage) }}" alt="{{ $job->companyname }}" class="img-fluid uniform-image">
                        <h5 class="text-secondary hover-text-success py-3 m-0" style="background-color: white;">
                            {{ $job->companyname }}
                        </h5>
                    </a>
                    @else
                    <p>No image available</p>
                    @endif
                 
                </div>
            </div>
        @endforeach
    </div>
</div> -->
<section id="portfolio" class="portfolio" style="background-color:#F7FBFE;">
      <div class="container">

        <div class="section-title">
          <h2>Our Certificates</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-participation">Certificate of Participation</li>
              <li data-filter=".filter-appreciation">Certificate of Appreciation</li>
              <li data-filter=".filter-accreditation">Certificate of Accreditation</li>
              <li data-filter=".filter-certification">Certification</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
@foreach ($awards as $award)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $award->description }} wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
              <img src="{{ asset('images/' . $award->companyimage) }}" class="img-fluid" alt="{{ $award->companyname }}">
<a href="{{ asset('images/' . $award->companyimage) }}" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" ><i class="bx bx-plus"></i></a>


              </figure>

              <div class="portfolio-info">
                <!-- <h4><a href="{{$job->link}}">{{$job->companyname}}</a></h4> -->
               
              </div>
            </div>
          </div>
@endforeach
         
        </div>

      </div>
    </section>


<body>
<!--  -->
<section id="team" class="team" style="background-color: white;">
      <div class="container">

        <div class="section-title">
          <h2> Our Team</h2>
          <p></p>
        </div>

        <div class="row">
    @foreach($executives as $executive)
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="executive-card">
            <img src="{{ asset('images/' . $executive->companyimage) }}" alt="{{ $executive->companyname }} Image" class="executive-image">
            <h4>{{ $executive->companyname }}</h4>
            <span>{{ $executive->position }}</span>
            <p>
                <!-- Assuming you have a description field for executives -->
                {{ $executive->description }}
            </p>
          
            <div class="awards-popup">
                Awards:<br>
                @php
                    $awards = explode(',', $executive->awards);
                @endphp
                @foreach($awards as $award)
                    {{ $award }} <br>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>


<style>
    .awards-popup {
    display: none;
    position: absolute;
    background-color: white;
    padding: 10px;
    border: 1px solid #ccc;
    z-index: 1;
}
.executive-image {
    max-width: 300px; /* Adjust this value as per your requirement */
    height: auto; /* Maintain aspect ratio */
}


.executive-card:hover .awards-popup {
    display: block;
}

</style>
    
<!-- 
    <div class="executive">
        <img src="john-doe-photo.jpg" alt="John Doe">
        <div class="details">
            <h3>John Doe</h3>
            <p>CEO</p>
            <p>John Doe is the Chief Executive Officer of our company...</p>
        </div>
    </div>

    <div class="executive">
        <img src="jane-smith-photo.jpg" alt="Jane Smith">
        <div class="details">
            <h3>Jane Smith</h3>
            <p>CFO</p>
            <p>Jane Smith serves as our Chief Financial Officer...</p>
        </div>
    </div>

    Add more executives as needed -->

</section>
    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" alt="" style="width: 100%;" />
            <p id="modalCaption"></p>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        function openModal(imageSrc, captionText) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modalCaption').innerText = captionText;
            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        // Close the modal when clicking outside of the modal content
        window.onclick = function(event) {
            if (event.target == document.getElementById('myModal')) {
                closeModal();
            }
        }
    </script>
@include('Components.footer')
    <!-- Other scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
