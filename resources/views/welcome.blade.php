<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>e-Chilimba - Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <meta content="iamwchanda@gmail.com" name="author">

  <!-- Favicons -->
  <link href="landing/assets/img/favicon.png" rel="icon">
  <link href="landing/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="{{ asset('landing/assets/css/style.css') }}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent navbar-dark bg-dark shadow-sm p-2">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h2 class="text-light"><a href="/">e Chilimba</a></h2>
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero">Home</a></li>
         
          <li><a href="#about">About</a></li>

          <li><a href="#contact">Contact Us</a></li>

          <li class="get-started"><a href="/login">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Welcome to e-Chilimba</h1>
            <h2>“Do not save what is left after spending; instead spend what is left after saving.”
               <strong> ― Warren Buffett</strong></h2>
            <a href="#" class="download-btn"> Join Savings Group</a>
            <a href="#" class="download-btn"> Create Savings Group</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="landing/assets/img/hero.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Get Intouch</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info" data-aos="fade-up">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p>Kamwala South,<br>Lusaka Zambia</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+260 969 525 359</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>iamwchanda@gmail.com</p>
              </div>
              <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  
   
    <div class="container py-4">
      <div class="copyright">
        &copy;{{date('Y')}} Copyright <strong><span>e-Chilimba</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing/assets/vendor/jquery/jquery.min.js') }}" defer></script>
  <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
  <script src="{{ asset('landing/assets/vendor/jquery.easing/jquery.easing.min.js') }}" defer></script>
  <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js') }}" defer></script>
  <script src="{{ asset('landing/assets/vendor/owl.carousel/owl.carousel.min.js') }}" defer></script>
  <script src="{{ asset('landing/assets/vendor/venobox/venobox.min.js') }}" defer></script>
  <script src="{{ asset('landing/assets/vendor/aos/aos.js') }}" defer></script>

  <!--  Main JS File -->
  <script src="{{ asset('landing/assets/js/main.js') }}" defer></script>


</body>

</html>