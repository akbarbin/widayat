<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>www.widayat.com</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="http://fonts.googleapis.com/css?family=Cardo:400italic,400|Lato:400,400italic,700" rel="stylesheet">

    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- favicon.ico and apple-touch-icon.png -->
    <link rel="shortcut icon" href="favicon.ico" >
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57-iphone.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72-ipad.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114-iphone4.png"> 

    <link rel="stylesheet" href="<?php echo base_url() ?>application/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>application/assets/css/screen.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>application/assets/css/custom.css">

    <!-- All JavaScript at the bottom, except this Modernizr build.  -->
    <script src="<?php echo base_url(); ?>application/assets/js/libs/modernizr-2.5.3.min.js"></script>
    <script src="<?php echo base_url(); ?>application/assets/js/libs/respond.min.js"></script>					 

    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="<?php echo base_url(); ?>application/assets/js/libs/jquery.min.js"></script>

    <!-- scripts  -->
    <script src="<?php echo base_url(); ?>application/assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>application/assets/js/general.js"></script>
    <!-- carousel -->
    <script src="<?php echo base_url(); ?>application/assets/js/jquery.jcarousel.min.js"></script>

    <!-- sliders -->
    <script src="<?php echo base_url(); ?>application/assets/js/slides.min.jquery.js"></script>
    <!--/ sliders -->

    <!-- shortcode: Lightbox prettyPhoto -->
    <link rel="stylesheet" href="<?php echo base_url() ?>application/assets/css/prettyPhoto.css" media="all">
    <script src="<?php echo base_url(); ?>application/assets/js/jquery.prettyPhoto.js"></script>
  </head>
  <body style="background-color:#580000; background-image:url(<?php echo base_url(); ?>application/assets/images/pattern_3.png)">
    <div class="body_wrap">
      <div class="header_container">
        <div class="flash-message">
          <div class="inner">
            <p class="flash_succes"><?php $this->session->flashdata('succes') ?></p>
          </div>
        </div>
        <header>
          <div class="header_left">
            <div class="logo">
              <a href="index.html"><img src="<?php echo base_url(); ?>application/assets/images/logo.png" alt=""></a>
              <h1>Law Office - Premium WordPress Theme</h1>
            </div>
          </div>
          <div class="header_right">
            <nav id="topmenu">
              <ul class="dropdown">
                <li class="menu-item-home <?= ($this->router->fetch_class() == "welcome" and $this->router->fetch_method() == "index") ? "current-menu-ancestor" : "" ?>"><a href="<?php echo base_url("index.php/"); ?>"><span>Beranda</span></a></li>
                <li class="<?= ($this->router->fetch_method() == "profil") ? "current-menu-ancestor" : "" ?>"><a href="<?php echo base_url("index.php/welcome/profil"); ?>"><span>Profil</span></a></li>
                <li class="<?= ($this->router->fetch_method() == "padangan_isi_hati_nurani") ? "current-menu-ancestor" : "" ?>"><a href="<?php echo base_url("index.php/welcome/padangan_isi_hati_nurani"); ?>"><span>Pandangan Isi Hati Nurani</span></a></li>
                <li class="<?= ($this->router->fetch_class() == "news") ? "current-menu-ancestor" : "" ?>"><a href="<?php echo base_url("index.php/news/"); ?>"><span>Kabar Berita</span></a></li>
                <li class="<?= ($this->router->fetch_method() == "gallery") ? "current-menu-ancestor" : "" ?>"><a href="<?php echo base_url("index.php/welcome/gallery"); ?>"><span>Gallery</span></a></li>
                <li class="<?= ($this->router->fetch_class() == "contacts") ? "current-menu-ancestor" : "" ?>"><a href="<?php echo base_url("index.php/contacts"); ?>"><span>Kontak</span></a></li>
                <!--<li><a href="service.html"><span>Service</span></a></li>-->
              </ul>                
            </nav>
            <!--/ topmenu -->
          </div>
          <div class="clear"></div>
        </header>
        <?php $class_router = $this->router->fetch_class(); ?>
        <?php $method_router = $this->router->fetch_method(); ?>
        <?php $data2 = new $class_router ?>
        <?php $data2->load->view($class_router . '/' . $method_router); ?>
        <footer>
          <div class="container">
            <div class="fcol f_col_1">
              <!-- widget contacts -->
              <div class="widget-container widget_contact">                    
                <h3>Kontak saya:</h3>
                <div class="contact-address">
                  <div class="address">Jalan Buk Serang No. 107 Kedung Pakis Kec. Pasirian, Lumajang - Jawa Timur 47371.</div>
                  <div class="phone">Phone: <span>0852 5874 9056</span></div>
                  <div class="mail">Email: <a href="mailto:hello@LawOffice.org">irhmwidayat@gmail.com</a></div>
                </div>    
              </div>
              <!--/ widget contacts -->  
            </div>
            <div class="divider_space_thin"></div>
            <div class="copyright">
              <p>copyright 2013 - <strong>Marketing Website Company</strong> <br> made by <a href="http://akbarbin-stagingapps.tk">akbarbin</a></p>
            </div>
          </div>
        </footer>
      </div>
  </body>
</html>