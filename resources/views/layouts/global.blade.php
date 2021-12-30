<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INPROSULA | @yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('storage/img/logo.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('users/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('users/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('users/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('users/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('users/vendor/owl.carousel/users/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('users/vendor/aos/aos.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

  <!-- Template Main CSS File -->
  <link href="{{asset('users/css/style.css')}}" rel="stylesheet">
  <style>
    .carousel-inner{
      width:100%;
      max-height: 500px !important;
    }
    .card-img-top {
      width: 100%;
      height: 15vw;
      object-fit: cover;
    }

    .embed-responsive .card-img-top {
      object-fit: cover;
    }

    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:20px;
        left:20px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-float{
        margin-top:16px;
    }

  </style>

  <!-- =======================================================
  * Template Name: Rapid - v2.2.0
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top topbar-transparent">
    <div class="container d-flex justify-content-end">
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.facebook.com/inprosula.inprosula" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.instagram.com/inprosula/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('/') }}">INPROSULA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="" class="logo mr-auto"><img src="users/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('/') ? 'active' : ''}}"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="#faq">About Us</a></li>
          <li><a href="#footer">Contact Us</a></li>
          <li class="{{ Request::is('/product') ? 'active' : ''}}"><a href="{{ route('product') }}">Product</a></li>
          <li class="drop-down {{ (Request::is('photos') or Request::is('videos')) ? 'active' : '' }}"><a href="">Gallery</a>
            <ul>
                <li><a href="{{ route('photos') }}">Photos</a></li>
                <li><a href="{{ route('videos') }}">Videos</a></li>
            </ul>
          </li>
            <li class="drop-down {{ Request::is('news') ? 'active' : ''}}"><a href="">News</a>
                <ul>
                    <li><a href="{{ route('media') }}">Media</a></li>
                    <li><a href="{{ route('news') }}">News InProSuLA</a></li>
                </ul>
            </li>
           <li class="drop-down {{ Request::is('activity') ? 'active' : ''}}"><a href="">Program</a>
            <ul>
                @foreach (Strategi::get() as $item)
                    <li><a href="{{ route('program', [$item->slug]) }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
          </li>
          <li class="drop-down"><a href="">Others</a>
            <ul>
                @foreach (Sertifikat::get() as $item)
                    <li><a href="{{ route('certificate', [$item->id]) }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
          </li>
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->

  @yield('carousel')

  <main id="main">
    @yield('content')
  </main><!-- End #main -->
  @php
      $message = "*Nama:* \r\n*Alamat:* \r\n*Email:* \r\n*Keperluan:* \r\n\r\nTerima kasih telah menghubungi admin inprosula.org";
  @endphp
  <a href="javascript:void(0)" class="float" onclick="window.open('https://api.whatsapp.com/send?phone={{ Phone::whatsapp()->kode_negara }}{{ Phone::whatsapp()->nomor }}&text={{ urlencode(utf8_encode($message)) }}')">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>INPROSULA</h3>
                  <p>InProSuLA (Institute for Promoting Sustainable Livelihood Approach) is an association that promotes sustainable livelihoods for communities.</p>
                </div>

                <div class="footer-newsletter">
                  <h4>Sector</h4>
                  <p>Agriculture, Fishery & Forestry</p>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4>Contact Us</h4>
                  <p>
                    Jl Magelang Km 4.3<br>
                    Gg. Jatimulyo Tri/373A<br>
                    Yogyakarta 55242  <br>
                    <strong>Phone:</strong> +62 274 562370 <br>
                    <strong>Email:</strong> inprosula@yahoo.com<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/inprosula.inprosula" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/inprosula" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <form action="{{ route('contact-us.store') }}" method="post" class="php-email-form">
                @csrf
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>

                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message" style="background-color: palegreen !important"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>InProSuLA</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('users/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('users/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
  <script src="{{asset('users/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('users/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('users/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('users/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('users/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('users/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('users/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('users/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('users/js/main.js')}}"></script>

  <script>
      $(document).ready(function() {
        $('body').bind('cut copy', function(e) {
            e.preventDefault();
        });
        $("body").on("contextmenu",function(e){
            return false;
        });
      });
  </script>
  @yield('script')
</body>

</html>
