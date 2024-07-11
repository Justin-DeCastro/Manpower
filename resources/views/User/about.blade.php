@include('Components.header')


 

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-0">
<div class="img_container">
            <div class="img-box">
              <img src="images/logo.jpg" alt="" style="width: 90%; height: auto;" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Who Are We?
              </h2>
            </div>
            <p>
                A licensee of Department of Labor and Employment (DOLE) Manpower, ABIC MANPOWER SERVICE CORP is committed in linking exemptional talents with boundless career opportunities across the Philippines.
                With our determination to implement compulsory labor standards in the Philippines, our team ensure that the proper, updated and accurate information from Department of Labor and Employment (DOLE) were discussed, explained and communicated well to our clients. Ensuring that our exemptional talents will receive correct labor due and campaigning competitive package in the market.
                We are driven by our core ethics of accountability, beyond boundaries, integrity and customized client oriented. Through these principles, our inimitable execution of recruitment and selection has been producing client’s satisfactory and advancement of viability given the career choices.

            </p>
            <div class="btn-box">
              <a href="https://maps.app.goo.gl/bTTnNxiMSqZHaS6EA" target="_blank">
                403 Campos Rueda Bldg. Urban Avenue Brgy. Pio Del Pilar, Makati, Philippines, 1224
              </a>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="background-color: darkblue; padding: 50px 0;">
    <div class="main text-center mt-5"></div>
    <div class="container mt-4 d-flex justify-content-center">
        <div class="row g-0">
            <div class="col-md-4 border-right">
                <div class="cards">
                    <div class="first bg-white p-4 text-center">
                        <img src="https://img.icons8.com/clouds/100/000000/box.png" />
                        <h5>1000+ Ready Applicants</h5>
                        <p class="line1">No limitation - Its got everything that you 'll need as you grow</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 border-right">
                <div class="cards">
                    <div class="second bg-white p-4 text-center">
                        <img src="https://img.icons8.com/clouds/100/000000/groups.png"/>
                        <h5>100 Accredited Company</h5>
                        <p class="line2">$50/month gets you 10 users, and you can add more $10 per user</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cards">
                    <div class="third bg-white p-4 text-center">
                        <img src="https://img.icons8.com/fluent/100/000000/trophy.png"/>
                        <h5>8000+ Successful Applicants</h5>
                        <p class="line3">We'll help you get started and be there when you have questions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Additional content -->



  <div class="row justify-content-center text-center" style="color: white; background-color: #343a40; padding: 50px 0;">
    <div class="col-lg-10">
        <h2 class="title">Our Partner Companies</h2>
        <p class="sub-title">We address the complex workforce challenges organizations face today, from contingent and permanent staffing to talent management, outsourcing, and talent development. We deliver the solutions that drive your business forward.</p>
    </div>
</div>
<div class="container mt-4">
    <div class="row justify-content-center">
        @foreach($companies as $key => $company)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
                <img alt="{{ $company->name }}" class="card-img-top" src="{{ asset($company->image) }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $company->name }}</h5>
                    <p class="card-text">{{ $company->description }}</p>
                    {{-- Add more details or buttons as needed --}}
                </div>
            </div>
        </div>
        @if (($key + 1) % 4 == 0)
    </div>
    <div class="row justify-content-center">
        @endif
        @endforeach
    </div>
</div>
<div class="row justify-content-center text-center" style="color: white; background-color: #343a40; padding: 50px 0;">
    <div class="col-lg-10">
        <h2 class="title">Our JOB FAIRS</h2>
    </div>
</div>

<div class="text-box-one">
    <div class="row">
        @foreach ($Jobs as $job)
        <div class="col-lg-4 col-md-6">
            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                @if ($job->companyimage)
                <a href="{{ $job->link }}" data-lightbox="{{ $job->companyname }}" data-title="{{ $job->companyname }}">
                    <img src="{{ asset('images/' . $job->companyimage) }}" alt="{{ $job->companyname }}" class="img-fluid">
                    <h5 class="text-secondary hover-text-success py-3 m-0" style="background-color: white;">
                        {{ $job->companyname }}
                    </h5>
                </a>
                @else
                <p>No image available</p>
                @endif
                <!-- Additional job details here -->
            </div>
        </div>
        @endforeach
    </div>
</div>





  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <a class="navbar-brand" href="/">
              <span>
                Abic Manpower
              </span>
            </a>
            <p>
              dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="">
                  dolor sit amet, consectetur
                </a>
              </li>
              <li>
                <a href="">
                  magna aliqua. Ut enim ad
                </a>
              </li>
              <li>
                <a href="">
                  minim veniam,
                </a>
              </li>
              <li>
                <a href="">
                  quisdotempor incididunt r
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Contact Us
            </h5>
          </div>
          <div class="info_contact">
            <a href="" class="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Lorem ipsum dolor sit amet,
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="#">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->




  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="currentYear"></span> All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
