<?php $this->view('citycuts-template/header', $data); ?>
  
  <!-- ================ start banner area ================= -->
	<section class="banner-area pricing" id="pricing">
		<div class="container h-100">
			<div class="banner-area__content text-center">
        <h1>Pricing Packages</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Best Prices</li>
          </ol>
        </nav>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= --> 


  <!-- ================ pricing section start ================= -->      
  <section class="section-margin--large">
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