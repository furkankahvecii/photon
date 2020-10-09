<?php $this->load->view('header'); ?>
<?php $this->load->view('menu'); ?>

  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
        <div class="swiper-wrapper">
            <?php foreach($folders as $folder){?>
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3"><?php echo $folder;?></h2>
                  <a href="<?php echo base_url("gallery/".$folder);?>" class="btn btn-outline-white py-2 px-4">More Photos</a>
                </div>
                <img src="https://wallpapercave.com/wp/wp3070851.jpg" alt="Image">
              </div>
            </div>
            <?php } ?>
           
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
  </div>

  <?php $this->load->view('footer'); ?>