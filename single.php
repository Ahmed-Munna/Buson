<?php
    //Template Name: template-single-blog
    get_header();
?>
      
      <!-- bredcamp Area Start-->
      <?php get_template_part( 'partials/bredcamp', 'page')?>
      <!-- bredcamp Area End-->
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php echo the_post_thumbnail_url('shop_single')?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php the_title()?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                     </ul>
                     <?php the_content()?>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                        <?php
                           if (get_previous_post() ) :
                           $prev_post = get_previous_post();
                           $prev_thumb = get_the_post_thumbnail( $prev_post->ID, array( 60, 60) );
                           $prev_title = get_the_title( $prev_post->ID );
                        ?>
                           <div class="thumb">
                              <a href="<?php echo get_permalink($prev_post->ID) ?>">
                                 <!-- <img class="img-fluid" src="" alt=""> -->
                                 <?php echo $prev_thumb; ?>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                                 <h4><?php previous_post_link('%link', $prev_title); ?></h4>
                           </div>
                           <?php endif; ?>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <?php 
                              if (get_next_post()) :
                              $next_post     = get_next_post();
                              $next_thumb    = get_the_post_thumbnail($next_post->ID, array( 60, 60));
                              $next_title    = get_the_title( $next_post->ID );?>

                                 <div class="detials">
                                    <p>Next Post</p>
                                    <a href="#">
                                       <h4><?php next_post_link('%link', $next_title); ?></h4>
                                    </a>
                                 </div>
                                 <div class="arrow">
                                    <a href="#">
                                       <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                 </div>
                                 <div class="thumb">
                                    <a href="<?php echo get_permalink($next_post->ID) ?>">
                                    <?php echo $next_thumb; ?>
                                    </a>
                                 </div>
                              <?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="blog-author">
                     <?php
                        $author_id = $post->post_author;
                     ?>
                  <div class="media align-items-center">
                           <img src="<?php echo  get_avatar_url( $author_id )?>" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4><?php echo get_the_author_meta( 'display_name', $author_id );?></h4>
                        </a>
                        <p><?php echo get_the_author_meta( 'description', $author_id );?></p>
                     </div>
                  </div>
               </div>
               <div class="comments-area">

               <?php 
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                           comments_template();
                        endif;
                     ?>
               </div>
               
            </div>
            <?php get_template_part( 'partials/sidebar', 'page')?>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

<?php
    get_footer();
?>