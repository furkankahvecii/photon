<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>
  <?php if(isset($error)) { ?>
	 <div class="alert alert-danger text-center" role="alert"><?php echo $error;?></div>;
  <?php } else { ?>
	
  <div class="site-section"  data-aos="fade">
	<div class="container-fluid"> 
	  <div class="row justify-content-center"> 
		<div class="col-md-7">
		  <div class="row mb-5">
			<div class="col-12 ">
			  <h2 class="site-section-heading text-center"><?php echo $gallery_name;?> Gallery</h2>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="row" id="lightgallery">
		<?php foreach($image_paths as $image){ ?>
		<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="<?php echo $image;?>" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
		  <img src="<?php echo $image;?>" alt="IMage" class="img-fluid">
		</div>
		<?php } ?>
	  </div>
	</div>
  </div>
		<?php } ?>
  <?php $this->load->view('footer'); ?>