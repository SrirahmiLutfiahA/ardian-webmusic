<!DOCTYPE html>
<html lang="en">

@include('master.header')

<body>
  @include('master.navbar')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <br><br><br><br>
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">It's Time To Make Your Content To The Next Level !</h2><br><br><br>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="122" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="201" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1053" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Support</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="192" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Ratings</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          {{-- <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt=""> --}}
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
<div class="section-header">
  <h2>Our Services</h2>
</div>
    
    @include('main.service')

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Call To Action</h3>
            <p>Find Out More Information and Start Creating </p>
            <a class="cta-btn"
              href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=ardiandproduction@gmail.com">Call To
              Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    @include('main.portofolio')


    @include('main.review2')
  </main><!-- End #main -->
  @include('master.footer')
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  @include('master.vendorjs')
</body>

</html>