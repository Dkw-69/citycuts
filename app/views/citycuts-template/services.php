<?php $this->view('citycuts-template/header', $data); ?>
  
  <!-- ================ start banner area ================= -->
	<section class="banner-area service" id="service">
		<div class="container h-100">
			<div class="banner-area__content text-center">
        <h1>Our Services</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Best Styles</li>
          </ol>
        </nav>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= --> 


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

  <!-- ================ video section start ================= -->	
  <section class="section-padding--large bg-soapstone">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Gallery</h4>
          <h2 class="section-intro__subtitle">View Some of Our <span class="d-block">Bespoke Work</span></h2>
        </div>

        <div class="row">
        <?php if(is_array($data['images'])): ?>
          <?php foreach($data['images'] as $gallery_images): ?>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <div class="card card-team">
                <div class="card-team__img">
                  <img class="card-img rounded-0" src="<?=$gallery_images->image?>" alt="">
                </div>
                <div class="card-team__position">
                  <div class="card-footer d-flex justify-content-between align-items-center">
                    <div class="card-team__bio">
                      <h6><?=$gallery_images->title?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif;?>  
        </div>
      </div>
  </section>
  <!-- ================ video section end ================= -->	

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


  <?php $this->view('citycuts-template/footer', $data); ?>