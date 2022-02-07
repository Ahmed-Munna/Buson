<?php
    //Template Name: template-blog
    get_header();
?>
   <!-- Preloader Start -->
   <div id="preloader-active">
         <div class="preloader d-flex align-items-center justify-content-center">
               <div class="preloader-inner position-relative">
                  <div class="preloader-circle"></div>
                  <div class="preloader-img pere-text">
                     <img src="assets/img/logo/logo.png" alt="">
                  </div>
               </div>
         </div>
      </div>
      <!-- Preloader Start-->
    <main>

        <!-- bredcamp Area Start-->
        <?php get_template_part( 'partials/bredcamp', 'page')?>
        <!-- bredcamp Area End-->

     


    </main>
<?php
    get_footer();
?>