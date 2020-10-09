<body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-3 border-bottom" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="<?php echo base_url();?>" class="text-black h2 mb-0">Photon</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="<?php if($this->uri->segment(1) == "") echo "active"; ?>"><a href="<?php echo base_url();?>">Home</a></li>
                <li class="has-children <?php if($this->uri->segment(1) == "gallery") echo "active"; ?>">
                  <a href="<?php echo base_url("gallery/".$folders[0]);?>">Gallery</a>
                  <ul class="dropdown">
                  
                    <?php foreach($folders as $folder) {?>
                    <li><a href="<?php echo base_url("gallery/".$folder);?>"><?php echo $folder;?></a></li>
                    <?php }?>
                  </ul>
                </li>
                <!-- <li><a href="<?php echo base_url();?>">Services</a></li> -->
                <li class="<?php if($this->uri->segment(1) == "about") echo "active"; ?>"><a href="<?php echo base_url("about");?>">About</a></li>
                <li class="<?php if($this->uri->segment(1) == "contact") echo "active"; ?>"><a href="<?php echo base_url("contact");?>">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
            
                <li>
                  <a href="https://twitter.com/kahveciifurkan" class="pl-3 pr-3" target="_blank"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="https://github.com/furkankahvecii" class="pl-3 pr-3" target="_blank" ><span class="icon-github"></span></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/furkankahvecii/" class="pl-3 pr-3" target="_blank"><span class="icon-linkedin"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

