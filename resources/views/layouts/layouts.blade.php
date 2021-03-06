<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Page title -->
   <title>HambaElektronika - @yield('title')</title>
   <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
   <!-- Bootstrap Core CSS -->
   <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
   <!-- Icon fonts -->
   <link href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
   <link href="{{asset('fonts/flaticons/flaticon.css')}}" rel="stylesheet" type="text/css">
   <link href="{{asset('fonts/glyphicons/bootstrap-glyphicons.css')}}" rel="stylesheet" type="text/css">
   <!-- Google fonts -->
   <link href="https://fonts.googleapis.com/css?family=Lato:400,800" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
   <!-- Style CSS -->
   <link href="{{asset('css/style.css')}}" rel="stylesheet">
   <!-- Plugins CSS -->
   <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
   <!-- Color Style CSS -->
   <link href="{{asset('styles/maincolors.css')}}" rel="stylesheet">
   <!-- Favicons-->
   <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-icon-72x72.png')}}">
   <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-icon-114x114.png')}}">
   <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
</head>

<body id="page-top">
   <!-- Preloader -->
   {{-- <div id="preloader">
      <div class="spinner">
         <div class="bounce1"></div>
      </div>
   </div> --}}
   <!-- Preloader ends -->
   <!-- Preloader ends -->
   <nav class="navbar navbar-custom navbar-fixed-top">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
            <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-brand navbar-brand-centered page-scroll">
               <a href="#page-top">
                  <!-- logo  -->
                  <img src="img/download.webp" class="img-responsive" alt="">
               </a>
            </div>
         </div>
         <!--/navbar-header -->
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav">
               <li class="active"><a href="index.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="adoption.html">Adoption</a></li>
               <li><a href="adopt-single.html">Adoption Single</a></li>
                     <li><a href="services.html">Our Services</a></li>
                     <li><a href="services-single.html">Services Single</a></li>
                     <li><a href="team.html">Our Team</a></li>
                     <li><a href="pricing.html">Pricing</a></li>
                     <li><a href="testimonials.html">Testimonials</a></li>
                     <li><a href="elements.html">Elements</a></li>
                  </ul>
               </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="gallery.html">Gallery</a></li>
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="blog.html">Blog Home</a></li>
                     <li><a href="blog-single.html">Blog Post</a></li>
                  </ul>
               </li>
               <li><a href="contact.html">Contact</a></li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>
   <!-- /navbar ends -->
   <!-- /navbar ends -->
   @yield('container')

   <!-- Footer -->
   <footer>
      <!-- Contact info -->
      <div class="container">
         <div class="col-md-4 text-center">
            <!-- Footer logo -->
            <img src="{{asset('img/download.webp')}}" alt="" class="center-block img-responsive">
         </div>
         <!-- /.col-md-4 -->
         <div class="col-md-4 text-center res-margin">
            <ul class="list-unstyled">
               <li><i class="fa fa-phone"></i>0822 8977 6544</li>
               <li><i class="fa fa-envelope"></i>Email: <a href="mailto:hambaelektronika@gmail.com">hambaelektronika@gmail.com</a></li>
               <li><i class="fa fa-map-marker"></i>Jl Basuki Rahmat no 59 Lamongan</li>
            </ul>
         </div>
         <!-- /.col-md-4 -->
         <div class="col-md-4 text-center res-margin">
            <h5>Follow us</h5>
            <!--Social icons -->
            <div class="social-media">
               <a href="#" title=""><i class="fa fa-twitter"></i></a>
               <a href="#" title=""><i class="fa fa-facebook"></i></a>
               <a href="#" title=""><i class="fa fa-google-plus"></i></a>
               <a href="#" title=""><i class="fa fa-instagram"></i></a>
            </div>
         </div>
         <!-- /.col-md-4 -->
      </div>
      <!-- /.container -->
      <!-- Credits-->
      <div class="credits col-md-12 text-center">
         Copyright © <?= date('Y')?> - Designed by <a href="http://lizart.my.id">Lizart</a>
         <!-- Go To Top Link -->
         <div class="page-scroll hidden-sm hidden-xs">
            <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
         </div>
      </div>
      <!-- /credits -->
   </footer>
   <!-- /footer ends -->
   <!-- Core JavaScript Files -->
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <!-- Main Js -->
   <script src="{{asset('js/main.js')}}"></script>
   <!-- Contact form -->
   <script src="{{asset('js/contact.js')}}"></script>
   <!--Other Plugins -->
   <script src="{{asset('js/plugins.js')}}"></script>
   <!-- Prefix free CSS -->
   <script src="{{asset('js/prefixfree.js')}}"></script>
   <!--Mail Chimp validator -->
   <script src='{{asset('js/mc-validate.js')}}'></script>
   <!-- Open street maps-->
   <script src="{{asset('js/map.js')}}"></script>
</body>

</html>