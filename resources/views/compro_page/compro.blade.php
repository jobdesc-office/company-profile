<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hyperdata</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{URL::asset('landing-page/logo.png')}}" rel="icon">
  <link href="{{URL::asset('landing-page/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{URL::asset('landing-page/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{URL::asset('landing-page/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('landing-page/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('landing-page/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('landing-page/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('landing-page/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{URL::asset('landing-page/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{URL::asset('landing-page/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">
  <!--==========================
    Header
  ============================-->
  @include('compro_page.components._header')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
  @foreach($title as $in)
    <div class="intro-content">
      {!!$in->descriptions!!}
    </div>
    <div id="intro-carousel" class="owl-carousel" >
      <div class="item">
        <img src="{{ URL::to('/') }}/files/{{ $in->filename }}"alt="">
      </div>
    </div>
    @endforeach
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    @include('compro_page.content.about')
    <!--==========================
      Services Section
    ============================-->
    @include('compro_page.content.service')
    <!--==========================
      Clients Section
    ============================-->
    @include('compro_page.content.partner')

    <!--==========================
      Our Portfolio Section
    ============================-->
    @include('compro_page.content.portofolio')

    <!--==========================
      Testimonials Section
    ============================-->
    @include('compro_page.content.testimonials')

    <!--==========================
      Call To Action Section
    ============================-->

    <!--==========================
      Our Team Section
    ============================-->
    @include('compro_page.content.team')

    <!--==========================
      Contact Section
    ============================-->
    @include('compro_page.content.contact')

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Hyperdata|2021</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{URL::asset('landing-page/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('landing-page/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{URL::asset('landing-page/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('landing-page/lib/easing/easing.min.js')}}"></script>
  <script src="{{URL::asset('landing-page/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{URL::asset('landing-page/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{URL::asset('landing-page/lib/wow/wow.min.js')}}"></script>
  <script src="{{URL::asset('landing-page/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('landing-page/lib/magnific-popup/magnific-popup.min.js')}}"></script>
  <script src="{{URL::asset('landing-page/lib/sticky/sticky.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{URL::asset('landing-page/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{URL::asset('landing-page/js/main.js')}}"></script>

</body>
</html>
