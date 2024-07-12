@include('Components.header')



<style>
    .uniform-image {
    width: 100%;
    height: 200px; /* or any desired uniform height */
    object-fit: cover;
}
</style>

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




  <!-- info section -->


  <!-- end info_section -->




  <!-- footer section -->
  @include('Components.footer')
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
