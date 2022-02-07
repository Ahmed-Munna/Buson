<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                            <a href="index.html"><?php if(has_custom_logo('custom-logo')){
                                      the_custom_logo( 'custom-logo' );
                                  }?></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php the_field('footer_excerpt','option') ?></p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                            <?php 
                                            $header_social_icon = get_field('header_social_icon','option');
                                            foreach($header_social_icon as $header_social){ ?>
                                                <a href="<?php echo $header_social['social_link']?>"><i class="<?php echo $header_social['social_icon']['value']?>"></i></a>
                            <?php }?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
                                    <ul>
                                        <?php dynamic_sidebar('footer-1'); ?>
                                    </ul>
                                <?php } ?>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                           <?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
                                    <ul>
                                        <?php dynamic_sidebar('footer-2'); ?>
                                    </ul>
                                <?php } ?>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Get in Touch</h4>
                               <ul>
                                   <?php 
                                    $get_in_touch   = get_field('get_in_touch','option');
                                    if($get_in_touch){
                                        foreach($get_in_touch as $single){?>
                                                <li><a href="#"><?php echo $single['footer_contact_list'];?></a></li>
                                            <?php } } ?>
                                </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><?php $get_in_touch   = the_field('copyright','option');?></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   

        <?php wp_footer()?>
        
    </body>
</html>