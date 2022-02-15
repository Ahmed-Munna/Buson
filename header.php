<!doctype html>
<html class="no-js" <?php language_attributes()?>>
    <head>
        <meta <?php bloginfo( 'charset' )?>>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico">

        <?php 
            wp_head();
            global $post;
        ?>
   </head>

   <body <?php body_class()?>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><i class="fas fa-map-marker-alt"></i><?php the_field('header_location', 'option'); ?></li>
                                        <li><i class="fas fa-envelope"></i><?php the_field('header_email', 'option'); ?></li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social"> 
                                        <?php 
                                            $header_social_icon = get_field('header_social_icon','option');
                                            foreach($header_social_icon as $header_social){ ?>
                                                <li><a href="<?php echo $header_social['social_link']?>"><i class="<?php echo $header_social['social_icon']['value']?>"></i></a></li>
                                        <?php } ?>   
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="index.html"><?php if(has_custom_logo('custom-logo')){
                                      the_custom_logo( 'custom-logo' );
                                  }?></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                    <nav> 
                                    <div class="main-menu f-right d-none d-lg-block">
                                    <?php
                                        wp_nav_menu(array(
                                            'theme_location'    => "primary-menu", // (string) Theme location to be used. Must be registered 
                                            'menu_id'           => "navigation",
                                        ) );
                                    ?>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>