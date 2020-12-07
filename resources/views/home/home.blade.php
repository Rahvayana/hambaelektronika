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
       <div class="slide slide-0 active" style="background-image:url('img/slide0.jpg')">
          <div class="slide__bg"></div>
          <div class="slide__content">
             <div class="slide__overlay">
             </div>
             <!-- slide text-->
             <div class="slide__text">
                <h1 class="slide__text-heading">Welcome to PETZ</h1>
                <div class="hidden-mobile">
                   <p class="lead">Petz is a fun HTML5 Pet Template with many elements for your Pet related website</p>
                   <a href="services.html" class="btn btn-default">our services</a>
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
                <h1 class="slide__text-heading">We Love Pets!</h1>
                <div class="hidden-mobile">
                   <p class="lead">We offer all the best quality products for your best friend.</p>
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
    <path d="M0 100 C 20 0 50 0 100 100 Z"/>
 </svg>    
 <!-- Section Services-index -->
 <section id="services-index">
    <!-- container -->
    <div class="container">
       <div class="section-heading">
          <h2>Our Services</h2>
       </div>
       <!-- /section-heading-->
       <div class="col-md-10 col-md-offset-1 text-center">
          <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus vi tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
       </div>
       <!-- /col-md-10-->
    </div>
    <!-- /container-->
    <div class="container-fluid bg-pattern margin1"  data-bottom-top="background-position: 0px 70%,99% 70%;"
       data-top-bottom="background-position: 0px -50%,99% -50%;">
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
                            <img src="{{asset('img/service1.jpg')}}" class="img-responsive" alt="">
                         </div>
                         <div class="info">
                            <h4>Exotic Pets</h4>
                            <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
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
                            <img src="{{asset('img/service2.jpg')}}" class="img-responsive" alt="">
                         </div>
                         <div class="info">
                            <h4>Vet Services</h4>
                            <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
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
                            <img src="{{asset('img/service3.jpg')}}" class="img-responsive" alt="">
                         </div>
                         <div class="info">
                            <h4>Great Products</h4>
                            <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
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
                            <img src="{{asset('img/service4.jpg')}}" class="img-responsive" alt="">
                         </div>
                         <div class="info">
                            <h4>Pet Hotel</h4>
                            <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
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
                            <img src="{{asset('img/service5.jpg')}}" class="img-responsive" alt="">
                         </div>
                         <div class="info">
                            <h4>Dog Walking</h4>
                            <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
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
 <section id="about-index" class="bg-lightcolor1" >
    <div class="container">
       <div class="section-heading text-center">
          <h2>About Us</h2>
       </div>
       <!-- row -->
       <div class="row">
          <div class="col-md-6 col-lg-7 text-center">
             <h3>For your best friend</h3>
             <p>
                Pat a lorem ipsuet nibh fusce mollis imperdie tlorem ipuset phas ellus ac sodales Lorem ipsum dolor  Phas ellus ac sodales felis tiam non metus.
                vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id iprum omnis.
             </p>
             <!-- Accordion -->
             <div class="panel-group" id="accordion">
                <!-- Question 1 -->
                <div class="panel">
                   <div class="panel-heading">
                      <h5 class="panel-title">
                         <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Social Responsability</a>
                      </h5>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                         <p>Patatemp dolupta orem retibusam qui commolu 
                            les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                         </p>
                      </div>
                   </div>
                </div>
                <!-- Question 2 -->
                <div class="panel">
                   <div class="panel-heading">
                      <h5 class="panel-title">
                         <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Mission Statement</a>
                      </h5>
                   </div>
                   <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                         <p>Patatemp dolupta orem retibusam qui commolu 
                            les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                         </p>
                      </div>
                   </div>
                </div>
                <!-- Question 3 -->
                <div class="panel">
                   <div class="panel-heading">
                      <h5 class="panel-title">
                         <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Value Added Services</a>
                      </h5>
                   </div>
                   <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                         <p>Patatemp dolupta orem retibusam qui commolu 
                            les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                         </p>
                      </div>
                   </div>
                </div>
             </div>
             <!-- /.accordion -->
          </div>
          <!-- /col-md-7-->
          <!-- Parallax object -->
          <div class="parallax-object1 hidden-sm hidden-xs"  data-100-start="right: 0%;" 
             data-center-bottom="right:30%;"  >
             <!-- Image -->
             <img src="img/illustrations/petbowl.png" alt="">
          </div>
          <!-- /parallax-object1-->
          <div class="col-md-6 col-lg-5" >
             <img src="img/about-index.png" class="img-responsive" alt="">
          </div>
          <!-- /col-md-5-->
       </div>
       <!-- /row -->
       <div class="row margin1 text-center">
          <!-- item 1 -->
          <div class="features col-lg-3 col-sm-6 col-xs-12">
             <div class="col-xs-12 big-icon">
                <!-- icon -->
                <i class="flaticon-dog-and-pets-house"></i>
             </div>
             <div class="col-xs-12">
                <h5>Housing</h5>
                <p>Aenean lacinia bibendum nulla sed consectetur ras mattis consectetur purus sit amet fermentum sociis natoque penatibus et magnis.</p>
             </div>
          </div>
          <!-- /col-md-3 -->
          <!-- item 2 -->
          <div class="features col-lg-3 col-sm-6 col-xs-12">
             <div class="col-xs-12 big-icon">
                <!-- icon -->
                <i class="flaticon-dog-in-front-of-a-man"></i>
             </div>
             <div class="col-xs-12">
                <h5>High Quality</h5>
                <p>Aenean lacinia bibendum nulla sed consectetur ras mattis consectetur purus sit amet fermentum sociis natoque penatibus et magnis.</p>
             </div>
          </div>
          <!-- /col-md-3 -->
          <!-- item 3 -->
          <div class="features col-lg-3 col-sm-6 col-xs-12">
             <div class="col-xs-12 big-icon">
                <!-- icon -->
                <i class="flaticon-veterinarian-hospital"></i>
             </div>
             <div class="col-xs-12">
                <h5>Vet Services</h5>
                <p>Aenean lacinia bibendum nulla sed consectetur ras mattis consectetur purus sit amet fermentum sociis natoque penatibus et magnis.</p>
             </div>
          </div>
          <!-- /col-md-3 -->
          <!-- item 1 -->
          <div class="features col-lg-3 col-sm-6 col-xs-12">
             <div class="col-xs-12 big-icon">
                <!-- icon -->
                <i class="flaticon-animals-3"></i>
             </div>
             <div class="col-xs-12">
                <h5>Special Care</h5>
                <p>Aenean lacinia bibendum nulla sed consectetur ras mattis consectetur purus sit amet fermentum sociis natoque penatibus et magnis.</p>
             </div>
          </div>
          <!-- /col-md-3 -->
       </div>
       <!-- /row -->
    </div>
    <!-- /container -->
 </section>
 <!-- /section ends -->
 <div class="container-fluid">
    <!-- Section Call to action -->
    <section class="call-to-action small-section bg1" data-stellar-background-ratio="0.2">
       <div class="container text-center">
          <!-- well -->
          <div class="col-md-5 bg-darkcolor well">
             <div class="col-md-12">
                <h4>Subscribe to our newsletter</h4>
                <p>Ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem.</p>
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
 <section id="reviews">
    <div class="container">
       <div class="section-heading text-center">
          <h2>Clients Reviews</h2>
       </div>
       <!-- Parallax object -->
       <div class="parallax-object2 hidden-sm hidden-xs hidden-md" 
          data-100-start="transform:rotate(-0deg); left:20%;" 
          data-top-bottom="transform:rotate(-370deg);">
          <!-- Image -->
          <img src="img/illustrations/toy.png" alt="">
       </div>
       <!-- /col-md-3 -->
       <div class="col-md-9 col-md-offset-3">
          <!-- Reviews -->
       <div id="owl-reviews" class="owl-carousel margin1">
          <!-- review 1 -->
          <div class="review">
             <div class="col-xs-12">
                <!-- caption -->
                <div class="review-caption">
                   <h5>Sue Shei</h5>
                   <div class="small-heading">
                      Dog Lover
                   </div>
                   <blockquote>
                      Patatemp dolupta orem retibusam qui commolu 
                      Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, 
                      vest ibulum orci eget, viverra.
                   </blockquote>
                </div>
                <!-- Profile image -->
                <div class="review-profile-image">
                   <img src="img/review1.jpg" alt=""/>
                </div>
                <!--/review profile image -->
             </div>
             <!-- /col-xs-12 ends -->
          </div>
          <!-- /review-->
          <!-- review 2 -->
          <div class="review">
             <div class="col-xs-12">
                <!-- caption -->
                <div class="review-caption">
                   <h5>Jonas Smith</h5>
                   <div class="small-heading">
                      Cat Specialist
                   </div>
                   <blockquote>
                      Patatemp dolupta orem retibusam qui commolu 
                      Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, 
                      vest ibulum orci eget, viverra.
                   </blockquote>
                </div>
                <!-- Profile image -->
                <div class="review-profile-image">
                   <img src="img/review2.jpg" alt=""/>                      
                </div>
                <!--/review profile image -->
             </div>
             <!-- /col-xs-12 ends -->
          </div>
          <!-- /review-->
          <!-- review 3 -->
          <div class="review">
             <div class="col-xs-12">
                <!-- caption -->
                <div class="review-caption">
                   <h5>Maria Silva</h5>
                   <div class="small-heading">
                      Exotic Birds Vet
                   </div>
                   <blockquote>
                      Patatemp dolupta orem retibusam qui commolu 
                      Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, 
                      vest ibulum orci eget, viverra.
                   </blockquote>
                </div>
                <!-- Profile image -->
                <div class="review-profile-image">
                   <img src="img/review3.jpg" alt=""/>                       
                </div>
                <!--/review profile image -->
             </div>
             <!-- /col-xs-12 ends -->
          </div>
          <!-- /review-->
          <!-- review 4 -->
          <div class="review">
             <div class="col-xs-12">
                <!-- caption -->
                <div class="review-caption">
                   <h5>Lou Lou</h5>
                   <div class="small-heading">
                      Veterinarian
                   </div>
                   <blockquote>
                      Patatemp dolupta orem retibusam qui commolu 
                      Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, 
                      vest ibulum orci eget, viverra.
                   </blockquote>
                </div>
                <!-- Profile image -->
                <div class="review-profile-image">
                   <img src="img/review4.jpg" alt=""/>                       
                </div>
                <!--/review profile image -->
             </div>
             <!-- /col-xs-12 ends -->
          </div>
          <!-- /review-->
          <!-- review 4 -->
          <div class="review">
             <div class="col-xs-12">
                <!-- caption -->
                <div class="review-caption">
                   <h5>James Doe</h5>
                   <div class="small-heading">
                      Pet Lover
                   </div>
                   <blockquote>
                      Patatemp dolupta orem retibusam qui commolu 
                      Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, 
                      vest ibulum orci eget, viverra.
                   </blockquote>
                </div>
                <!-- Profile image -->
                <div class="review-profile-image">
                   <img src="img/review5.jpg" alt=""/>                       
                </div>
                <!--/review profile image -->
             </div>
             <!-- /col-xs-12 ends -->
          </div>
          <!-- /review-->
       </div>
       <!-- /owl-carousel -->
       </div>
       <!-- /col-md-10 -->
    </div>
    <!-- /.container -->
 </section>
 <!-- /Section ends -->
 <!-- callout-->		   
 <section class="callout container-fluid no-padding">
   <!-- row-fluid -->
    <div class="row-fluid">
       <div class="col-lg-8 col-md-12 no-padding" data-start="right: 20%;" 
          data-center="right:0%;">
          <!-- image  -->
          <img src="{{asset('img/call1.jpg')}}" class="img-responsive img-rounded" alt="">
       </div>
       <!-- text box  -->
       <div class="callout-box col-lg-6 col-lg-offset-6 bg-darkcolor"  data-start="left: 20%;" 
          data-center="left:0%;">
          <h3>We Love Pets</h3>
          <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus vi tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
          <a href="contact.html" class="btn">Contact us</a>
       </div>
       <!-- /callout-box  -->
    </div>
    <!-- /row-fluid -->
 </section>
 <!-- /callout -->
 <!-- Section Stats -->	
 <section id="stats" class="bg-lightcolor2">
    <div class="section-heading text-center">
          <h2>Our Stats</h2>
       </div>
    <div class="container">
       <div class="col-lg-9 col-md-8 col-sm-8">
          <div class="text-center">
             <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Number 1 -->
                <div class="numscroller" data-slno='1' data-min='0' data-max='180' data-delay='20' data-increment="19">0</div>
                <h5>Customers</h5>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Number 2 -->
                <div class="numscroller" data-slno='1' data-min='0' data-max='16' data-delay='10' data-increment="9">0</div>
                <h5>Professionals</h5>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Number 3 -->
                <div class="numscroller" data-slno='1' data-min='0' data-max='67' data-delay='20' data-increment="19">0</div>
                <h5>Pets Hosted</h5>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- Number 4 -->
                <div class="numscroller" data-slno='1' data-min='0' data-max='50' data-delay='10' data-increment="9">0</div>
                <h5>Products</h5>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Section Ends-->

 <!-- Section Contact  -->
 <section id="contact-index">
    <div class="container">
       <div class="section-heading">
          <h2>Contact Us</h2>
       </div>
       <div class="col-lg-7 col-lg-offset-5 col-md-8 col-md-offset-2">
          <!-- contact info -->
          <h4>Information </h4>
          <ul class="list-inline">
             <li><i class="fa fa-envelope"></i><a href="mailto:youremailaddress">youremail@site.com</a></li>
             <li><i class="fa fa-phone margin-icon"></i>Call Us +1 456 7890</li>
             <li><i class="fa fa-map-marker margin-icon"></i>Lorem Ipsum 505</li>
          </ul>
          <!-- address info -->
          <p>Elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset phas ellus ac sodales Lorem ipsum dolor Phas ellus 
          </p>
          <h4 class="margin1">Send us a Message</h4>
          <!-- Form Starts -->
          <div id="contact_form">
             <div class="form-group">
                <label>Name<span class="required">*</span></label>
                <input type="text" name="name" class="form-control input-field" required="">                    
                <label>Email Adress <span class="required">*</span></label>
                <input type="email" name="email" class="form-control input-field" required="">           
                <label>Subject</label>
                <input type="text" name="subject" class="form-control input-field" required="">                            
                <label>Message<span class="required">*</span></label>
                <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
             </div>
             <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Send message</button>
          </div>
          <!-- Contact results -->
          <div id="contact_results"></div>
       </div>
       <!-- Contact -->
       <!-- /col-lg-5-->
    </div>
    <!-- /container -->
 </section>
 <!-- /Section ends -->	
 <div class="container-fluid">
    <!-- map-->
    <div id="map-canvas"></div>
 </div>

@endsection