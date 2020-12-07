@extends('layouts.layouts')
@section('title', 'Home')
@section('container')

<!-- Full Page Image Background Slider -->
<div class="slider-container">
   <!-- Controls -->
   <div class="slider-control left inactive"></div>
   <div class="slider-control right"></div>
   <ul class="slider-pagi"></ul>
   <!--Slider -->
   <div class="slider">
      <!-- Slide 0 -->
      <div class="slide slide-0 active" style="background-image:url('img/slider0.jpg')">
         <div class="slide__bg"></div>
         <div class="slide__content">
            <div class="slide__overlay">
            </div>
            <!-- slide text-->
            <div class="slide__text">
               <h1 class="slide__text-heading">Hamba Elektronika</h1>
               <div class="hidden-mobile">
                  <p class="lead">Hamba Elektronika adalah toko elektronik yang memiliki kualitas terbaik dengan harga terjangkau</p>
                  <a href="services.html" class="btn btn-default">Produk Kami</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Slide 1 -->
      <div class="slide slide-1" style="background-image:url('img/slider1.jpg')">
         <div class="slide__bg"></div>
         <div class="slide__content">
            <div class="slide__overlay">
            </div>
            <!-- slide text-->
            <div class="slide__text">
               <h1 class="slide__text-heading">Kualitas Produk</h1>
               <div class="hidden-mobile">
                  <p class="lead">Tidak ada yang perlu diragukan dari produk yang kami jual</p>
                  <a href="blog.html" class="btn btn-default">our Blog</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Slide 2 -->
      <div class="slide slide-2" style="background-image:url('img/slider2.jpg')">
         <div class="slide__bg"></div>
         <div class="slide__content">
            <div class="slide__overlay">
            </div>
            <!-- slide text-->
            <div class="slide__text">
               <h1 class="slide__text-heading">Amazing Services</h1>
               <div class="hidden-mobile">
                  <p class="lead">We offer all the best quality products for your best friend.</p>
                  <a href="about.html" class="btn btn-default">About Us</a>
               </div>
            </div>
         </div>
      </div>
      <!--/Slide2 -->
   </div>
   <!--/Slider-->
</div>
<!--/ Slider ends -->
<!-- SVG Curve Up -->
<svg id="curveUp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff">
   <path d="M0 100 C 20 0 50 0 100 100 Z" />
</svg>
<!-- Section Services-index -->
<section id="services-index">
   <div class="container-fluid bg-pattern margin1"  data-bottom-top="background-position: 0px 70%,99% 70%;" data-top-bottom="background-position: 0px -50%,99% -50%;">
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
   <!-- Services -->
         <div id="owl-services" class="owl-carousel">
            <!-- Feature Box 1  -->
            <div class="col-xs-12">
               <div class="box_icon">
                  <div class="icon">
                     <!-- icon -->
                     <div class="image">
                        <img src="img/laptop.jpg" class="img-responsive" alt="">
                     </div>
                     <div class="info">
                        <h4>Laptop & Komputer</h4>
                        <p>Kami memiliki beragam jenis laptop dari berbagai merk yang terkenal di dunia, semuanya asli dan bergaransi langsung dari pabriknya.</p>
                        <!-- Button-->
                        <a class="btn" href="services-single.html">Read More</a>
                     </div>
                  </div>
               </div>
               <!-- /box_icon -->
            </div>
            <!-- /col-xs-12 ends -->
            <!-- Feature Box 2 -->
            <div class="col-xs-12">
               <div class="box_icon">
                  <div class="icon">
                     <!-- icon -->
                     <div class="image">
                        <img src="img/printer.jpg" class="img-responsive" alt="">
                     </div>
                     <div class="info">
                        <h4>Printer</h4>
                        <p>Kami memiliki berbagai macam printer dari berbagai macam merk printer di Indonesia, selain printer kami juga memiliki spare partnya apabila pembeli membutuhkannya.</p>
                        <!-- Button-->
                        <a class="btn" href="services-single.html">Read More</a>
                     </div>
                  </div>
               </div>
               <!-- /box_icon -->
            </div>
            <!-- /col-xs-12 ends -->
            <!-- Feature Box 3  -->
            <div class="col-xs-12">
               <div class="box_icon">
                  <div class="icon">
                     <!-- icon -->
                     <div class="image">
                        <img src="img/part.jpg" class="img-responsive" alt="">
                     </div>
                     <div class="info">
                        <h4>Part Komputer</h4>
                        <p>Selain berjualan Komputer kami juga berjualan part komputer apabila kalian ingin merakit komputer atau mau dirakitkan kami siap membantu anda.</p>
                        <!-- Button-->
                        <a class="btn" href="services-single.html">Read More</a>
                     </div>
                  </div>
               </div>
               <!-- /box_icon -->
            </div>
            <!-- /col-xs-12 ends -->
            <!-- Feature Box 4  -->
            <div class="col-xs-12">
               <div class="box_icon">
                  <div class="icon">
                     <!-- icon -->
                     <div class="image">
                        <img src="img/service.jpg" class="img-responsive" alt="">
                     </div>
                     <div class="info">
                        <h4>Services</h4>
                        <p>Kami juga menyediakan jasa service apabila kalian membutuhkannya, kami melayani servis mulai dari laptop & komputer, printer dan lain-lain.</p>
                        <!-- Button-->
                        <a class="btn" href="services-single.html">Read More</a>
                     </div>
                  </div>
               </div>
               <!-- /box_icon -->
            </div>
            <!-- /col-xs-12 ends -->
            <!-- Feature Box 5  -->
            <div class="col-xs-12">
               <div class="box_icon">
                  <div class="icon">
                     <!-- icon -->
                     <div class="image">
                        <img src="img/cek_service.jpg" class="img-responsive" alt="">
                     </div>
                     <div class="info">
                        <h4>Cek Service</h4>
                        <p>Apabila anda memiliki barang yang diservis ditoko kami, kalian bisa mengeceknya disini hanya perlu memasukkan nomor id struk servis kalian.</p>
                        <!-- Button-->
                        <a class="btn" href="services-single.html">Read More</a>
                     </div>
                  </div>
               </div>
               <!-- /box_icon -->
            </div>
            <!-- /col-xs-12 ends -->
         </div>
         <!-- /owl-services -->
      </div>
      <!-- /col-md-9 -->
   </div>
   <!-- /row -->
</div>
<!-- /container-fluid-->
</section>
<!-- Section About-index -->
<section id="about-index" class="bg-lightcolor1">
   <div class="container">
      <div class="section-heading text-center">
         <h2>About Us</h2>
         <p>
            Welcome to Hambaelektronika, your number one source for all things Electronic. We're dedicated to providing you the very best of Electronic.
            Founded in 2008, Hambaelektronika has come a long way from its beginnings in Lamongan.
            We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
         </p>
      </div>
   </div>
   <!-- /container -->
</section>
<!-- /section ends -->
<!-- /row -->
<div class="row margin1 text-center">
   <h2>Mengapa Harus Kami</h2>
   <!-- item 1 -->
   <div class="features col-lg-3 col-sm-6 col-xs-12">
      <div class="col-xs-12 big-icon">
         <!-- icon -->
         <i class="flaticon-smartphone"></i>
      </div>
      <div class="col-xs-12">
         <h6>Barang Asli</h6>
         <p class="font-fitur">Barang yang kami jual 100% asli dan memiliki garansi resmi dari berbagai merk.</p>
      </div>
   </div>
   <!-- /col-md-3 -->
   <!-- item 2 -->
   <div class="features col-lg-3 col-sm-6 col-xs-12">
      <div class="col-xs-12 big-icon">
         <!-- icon -->
         <i class="flaticon-laptop"></i>
      </div>
      <div class="col-xs-12">
         <h6>Toko Terlengkap</h6>
         <p class="font-fitur">Toko kami merupakan toko yang sangat lengkap dengan memiliki berbagai macam alat elektronik.</p>
      </div>
   </div>
   <!-- /col-md-3 -->
   <!-- item 3 -->
   <div class="features col-lg-3 col-sm-6 col-xs-12">
      <div class="col-xs-12 big-icon">
         <!-- icon -->
         <i class="flaticon-computer"></i>
      </div>
      <div class="col-xs-12">
         <h6>Services Center</h6>
         <p class="font-fitur">Selain menjual barang kami juga melayani service apa bila pelanggan kami memiliki masalah terhadap barang mereka.</p>
      </div>
   </div>
   <!-- /col-md-3 -->
   <!-- item 1 -->
   <div class="features col-lg-3 col-sm-6 col-xs-12">
      <div class="col-xs-12 big-icon">
         <!-- icon -->
         <i class="flaticon-keyboard"></i>
      </div>
      <div class="col-xs-12">
         <h6>Garansi Pabrik</h6>
         <p class="font-fitur">Barang yang kami jual memiliki garansi resmi dari pabrik sehingga dapat berlaku lama dan bisa ditukar baru.</p>
      </div>
   </div>
   <!-- /col-md-3 -->
</div>
<!-- /row -->
<div class="container-fluid">
   <!-- Section Call to action -->
   <section class="call-to-action small-section bg1" data-stellar-background-ratio="0.2">
      <div class="container text-center">
         <!-- well -->
         <div class="col-md-5 bg-darkcolor well">
            <div class="col-md-12">
               <h4>Berlangganan Dengan Kami</h4>
               <p>Dengan berlangganan Anda akan memperoleh notifikasi lewat email jika ada barang baru maupun ada event tertentu, segeralah daftar!!.</p>
               <!-- Form -->
               <div id="mc_embed_signup" class="margin1">
                  <!-- your form adresss in the line bellow -->
                  <form action="//yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                     <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                           <div class="input-group">
                              <input class="form-control input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                              <span class="input-group-btn">
                                 <button class="btn" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                              </span>
                           </div>
                           <!-- Subscription results -->
                           <div id="mce-responses" class="mailchimp">
                              <div class="alert alert-danger response" id="mce-error-response"></div>
                              <div class="alert alert-success response" id="mce-success-response"></div>
                           </div>
                        </div>
                        <!-- /mc-fiel-group -->
                     </div>
                     <!-- /mc_embed_signup_scroll -->
                  </form>
                  <!-- /form ends -->
               </div>
               <!-- /mc_embed_signup -->
            </div>
            <!-- /col-md-12 -->
         </div>
         <!-- /col-md-6 -->
      </div>
      <!-- /container -->
   </section>
   <!-- /Section ends -->
</div>
<!-- /container-fluid -->
<!-- Section Reviews -->

<!-- /Section ends -->
<!-- callout-->
<div class="text-center bg-lightcolor" style="padding: 10px; margin: 10px;">
   <h3>~DAFTAR MERK~</h3>
   <img src="{{asset('img/asus.png')}}" class="logo-merk" alt="">
   <img src="{{asset('img/samsung.png')}}" class="logo-merk" alt="">
   <img src="{{asset('img/lenovo.png')}}" class="logo-merk" alt="">
   <img src="{{asset('img/seagate.png')}}" class="logo-merk" alt="">
   <img src="{{asset('img/acer.png')}}" class="logo-merk" alt="">
   <img src="{{asset('img/toshiba.png')}}" class="logo-merk" alt="">
</div>
<!-- /callout -->
<!-- Section Ends-->
<div class="container-fluid">
   <!-- map-->
   <div id="map-canvas"></div>
</div>

@endsection