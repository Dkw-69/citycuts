<?php $this->view('citycuts-template/header', $data); ?>
  
  <main class="site-main">
    
    <!-- ================ start hero banner Area ================= -->    
    <section class="hero-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="hero-banner__img">
              <img class="img-fluid" src="<?=ASSETS?>citycuts-template/img/banner/hero-banner.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6 pl-xl-4">
            <div class="hero-banner__content">
              <h1>We Specialize In All Types Of hair</h1>
              <p>Citycuts prides itself in observing professionalism when it comes to taking care of men and all hair styles. 
                Trust us take care of your every need when it comes to grooming.</p>
              <a href="<?=ROOT?>contact"><button class="button button-hero">Get in touch</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end hero banner Area ================= -->    


    <!-- ================ start about section ================= -->    
    <section class="section-margin about-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <div class="about__content">
              <div class="section-intro">
                <h4 class="section-intro__title">About Us</h4>
                <h2 class="section-intro__subtitle">We Are Artists,Hair Is Our Canvas</h2>
              </div>
              <p>For over 5 years, we have made it our mission to be at the forefront when it comes to hair cuts. 
                Our team of highly experienced professionals make sure that the needs of all clients are taken care 
                of. Visit us today to experience perfection!
              </p>
              <a class="button" href="<?=ROOT?>about">Learn More</a>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-2">
            <div class="about__img">
              <img class="img-fluid" src="<?=ASSETS?>citycuts-template/img/home/barber-frame.jpg" alt="">
              <img src="<?=ASSETS?>citycuts-template/img/home/barber-work.jpg" alt="" class="about__img--small img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end about section ================= -->    

    
    <!-- ================ start feature section ================= -->    
    <section class="section-margin--large">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Visit Us Today</h4>
          <h2 class="section-intro__subtitle">Allow Us To Transform<span class="d-block">Your Look</span></h2>
        </div>

        <div class="row gutters-48">
          <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
            <div class="card text-center card-feature border-style">
              <div class="card-feature__icon"><i class="flaticon-barber-chair"></i></div>
              <h3 class="card-feature__title">Best Shop</h3>
              <p>Step inside Citycuts barber shop and you will be guranteed a
                relaxed and calm environment while we take care of you
              </p>
            </div>
          </div>
          
          <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
            <div class="card text-center card-feature border-style">
              <div class="card-feature__icon"><i class="flaticon-cut"></i></div>
              <h3 class="card-feature__title">Clean Equipment</h3>
              <p>We use only the best new equipments to take care of the customer's hair,
                while regularly cleaning and disinfecting
              </p>
            </div>
          </div>
          
          <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
            <div class="card text-center card-feature border-style">
              <div class="card-feature__icon"><i class="flaticon-mirror"></i></div>
              <h3 class="card-feature__title">Modern Styles</h3>
              <p>Our professional barbers have years of experience, hence they know all 
                the hair styles a customer needs
              </p>
            </div>
          </div>
          
          <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
            <div class="card text-center card-feature border-style">
              <div class="card-feature__icon"><i class="flaticon-barbershop"></i></div>
              <h3 class="card-feature__title">Expert Staff</h3>
              <p>Our staff always make sure to stay on top of new trends while maintaining
                high expertise in the field 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end feature section ================= -->    


    <!-- ================ video section start ================= --> 
    <section class="video-area section-margin--large">
      <div class="container">
        <div class="row justify-content-center align-items-center flex-column text-center">
          <h6>visit us today</h6>
          <h3>Clean, Relaxed Environment</h3>
        </div>
      </div>  
    </section>
    <!-- ================ video section end ================= --> 
    
    <!-- ================ service section start ================= -->      
    <section class="section-margin--large">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Our Services</h4>
          <h2 class="section-intro__subtitle">Years of experience <span class="d-block">In Hair Cuts</span></h2>
        </div>
        <div class="row gutters-48 card-service-wrapper">
          <div class="col-lg-4">
            <div class="card text-center card-service border-style">
              <div class="card-service__icon"><i class="flaticon-cut"></i></div>
              <h3 class="card-service__title">Bespoke Hair Cuts</h3>
              <p>We have all the tools and products neccessary to give you all the hair styles 
                you need.Trust us to take care of your beard too 
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-center card-service border-style">
              <div class="card-service__icon"><i class="flaticon-wellness"></i></div>
              <h3 class="card-service__title">Relaxing Leather Seats</h3>
              <p>In making sure that the customer is cormfortable and relaxed, we do not compromise 
                when it comes to where the customer seats 
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-center card-service border-style">
              <div class="card-service__icon"><i class="flaticon-shower"></i></div>
              <h3 class="card-service__title">Washing & Coloring</h3>
              <p>For all the hair coloring needed, we make sure that we thoroughly clean your
                hair before and after every coloring and styling session
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ service section end ================= -->      
    
    <!-- ================ team section start ================= -->      
    <section class="section-padding--large bg-soapstone">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Our Team</h4>
          <h2 class="section-intro__subtitle">Skilled Team To Transform <span class="d-block">Your Look</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="<?=ASSETS?>citycuts-template/img/team/Deontay.jpg" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Deontay W.</a></h4>
                    <p>Beard Specialist</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="<?=ASSETS?>citycuts-template/img/team/Ron.jpg" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Ron S.</a></h4>
                    <p>Hair Specialist</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="<?=ASSETS?>citycuts-template/img/team/Islam.jpg" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Islam M. A.</a></h4>
                    <p>Hair/Beard Specialist</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <!-- ================ team section end ================= -->      

    <!-- ================ pricing section start ================= -->      
    <section class="section-margin--large pricing-relative">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Pricing Plan</h4>
          <h2 class="section-intro__subtitle">Choose Your Favorite <span class="d-block">Package</span></h2>
        </div>
        <div class="row gutters-48">
        <?php if(is_array($data['packages'])): ?>
          <?php foreach($data['packages'] as $pricing_packages): ?>
            <div class="col-lg-4 col-md-6 mb-5 pb-xl-4">
              <div class="card text-center card-pricing border-style">
                <div class="card-pricing__header">
                  <h3><?=$pricing_packages->title?></h3>
                  <p><?=$pricing_packages->package_description?></p>
                </div>
                <div class="card-pricing__price">
                  <h2>$<?=$pricing_packages->price?></h2>
                </div>
                <ul class="card-pricing__list">
                  <li><?=$pricing_packages->service_1?></li>
                  <li><?=$pricing_packages->service_2?></li>
                  <li><?=$pricing_packages->service_3?></li>
                  <li><?=$pricing_packages->service_4?></li>
                  <li><?=$pricing_packages->service_5?></li>
                  <li><?=$pricing_packages->service_6?></li>
                  <li><?=$pricing_packages->service_7?></li>
                </ul>
                <div class="mb-5">
                  <a class="button button-pricing" href="<?=ROOT?>contact">Book Now</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        </div>
      </div>
    </section>
    <!-- ================ pricing section end ================= -->      


    <!-- ================ testimonial section start ================= -->      
    <section class="testimonial testimonial-position">
      <div class="container">
        <div class="testi_slider owl-carousel owl-theme">
          <div class="item">
            <div class="testi_item">
              <img class="testimonial-img" src="<?=ASSETS?>citycuts-template/img/home/mustache.jpg" alt="">
              <div class="testi_item_content">
                <p>
                  <i class="fas fa-quote-left"></i>
                  I trust Citycuts to take care of my mustache and hair. Since I started 
                  going to Citycuts, I have never been dissapointed.
                  Would recommend.
                </p>
                <h4>Carlos Ruiz</h4>    
                <p>Chicken Farmer</p>          
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testi_item">
              <img class="testimonial-img" src="<?=ASSETS?>citycuts-template/img/home/hair.jpg" alt="">
              <div class="testi_item_content">
                <p>
                  <i class="fas fa-quote-left"></i>
                  As a celebrity, I contstantly need my hair to be trated and styled according to 
                  my acting roles. Citycuts always makes sure that my hair is well taken care
                  of. Citycuts is the best barber shop.
                </p>
                <h4>Jason Brown</h4>    
                <p>Actor</p>          
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testi_item">
              <img class="testimonial-img" src="<?=ASSETS?>citycuts-template/img/home/beard.jpg" alt="">
              <div class="testi_item_content">
                <p>
                  <i class="fas fa-quote-left"></i>
                  I would not enstrust my beard to just anybody. Citycuts always ensures that
                  my beard looks dashy. I always trust citycuts for the best services.
                </p>
                <h4>Michael Anderson</h4>    
                <p>Chef</p>          
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- ================ testimonial section end ================= -->      
  </main>      


  <?php $this->view('citycuts-template/footer', $data); ?>