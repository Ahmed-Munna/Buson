<?php
    //Template Name: template-blog
    get_header();
?>

       <!-- bredcamp Area Start-->
    <?php get_template_part( 'partials/bredcamp', 'page')?>
        <!-- bredcamp Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php
                            $args   = [
                                'post_type'         => 'post',
                            ];
                            $query      = new WP_Query($args);
                            while($query->have_posts(  )){
                                $query->the_post(  );?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo the_post_thumbnail_url();?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo get_the_date('j');?></h3>
                                    <p><?php echo get_the_date('M');?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink()?>">
                                    <h2><?php the_title();?></h2>
                                </a>
                                <p>
                                    <?php
                                        $excerpt    = get_the_excerpt();
                                        $excerpt = wp_trim_words( $excerpt, 30 );
                                        echo $excerpt;
                                    ?>
                                </p>
                                <ul class="blog-info-link">
                                    <li><i class="fa fa-user"></i> <?php 
                                            the_category(', ')
                                        ?></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php 	
                                        echo get_comments_number($query->ID); ?> Comments</a></li>
                                </ul>
                            </div>
                        </article>
                           <?php } wp_reset_postdata()?>
                           <?php
                               $args = array(
                                    'mid_size'           => 1,
                                    'prev_text'          => _x( 'Previous', 'previous set of posts' ),
                                    'next_text'          => _x( 'Next', 'next set of posts' ),
                                    'aria_label'         => __( 'Posts' ),
                                    
                                );
                                $pages   = get_the_posts_pagination($args);
                                echo  $pages;

                            ?>
                        <nav class="blog-pagination justify-content-center d-flex">
                            
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <?php get_template_part( 'partials/sidebar', 'page')?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php
    get_footer();
?>