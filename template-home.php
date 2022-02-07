<?php
    //Template Name: template-home
    get_header();
?>

    <main>

    <div class="slider-area ">
            <div class="slider-active">
                <?php
                    $args   = [
                        'post_type' => 'slider',
                        'posts_per_page'         => '4'
                    ];
                    $query = new WP_Query($args);
                    while($query->have_posts()){
                        $query->the_post();
                        $slider_sub_title = get_field('slider_sub_title');
                        $slider_button_text = get_field('slider_button_text');
                        $slider_button_url = get_field('slider_button_url');
                        ?>
                        
                <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url()?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 mx-auto">
                                <div class="hero__caption">
                                    <?php if($slider_sub_title):?>
                                    <p><?php echo $slider_sub_title ;?></p>
                                    <?php endif?>
                                    <h1><?php the_title();?></h1>
                                    <!-- Hero-btn -->
                                    <?php if($slider_button_text):?>
                                        <div class="hero__btn">
                                            <a href="<?php if($slider_button_url):
                                                echo $slider_button_url;
                                        endif?>" class="btn hero-btn"><?php echo $slider_button_text ;?></a>
                                        </div>
                                    <?php endif?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  
                      wp_reset_postdata();
                    }?>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part( 'partials/trusted', 'page')?>
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $args   = [
                            'post_type' => 'service',
                            'posts_per_page'         => '6'
                        ];
                        $query  = new WP_Query($args);
                        while($query->have_posts()){
                            $query->the_post();
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-services text-center">
                                    <div class="services-icon">
                                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                    </div>
                                    <div class="services-caption">
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            wp_reset_postdata();
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- services Area End-->

        <!-- Request Back Start -->
                    <div class="request-back-area section-padding30">
                        <div class="container">
                            <div class="row d-flex justify-content-between">
                                <div class="col-xl-8 mx-auto text-center">
                                    <div class="request-content">
                                        <h3><?php the_field('cta_title','option') ?></h3>
                                        <p><?php the_field('cta_discription','option') ?></p>
                                        <a href="#" class="btn trusted-btn"><?php the_field('cta_button','option') ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3><?php the_field('case_title','option') ?></h3>
                            <p><?php the_field('case_discription','option') ?>.</p>
                            <a href="<?php the_field('button_url','option') ?>" class="border-btn border-btn2"><?php the_field('case_button','option') ?></a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 
                        <?php
                                $args  =  [
                                    'post_type' => 'case',
                                    'posts_per_page'         => 3
                                ];
                                $query = new WP_Query($args);
                                while($query->have_posts(  )){
                                    $query->the_post(  ); 
                                    $case_post  = get_field( 'case_post' );
                                    ?>
                            <div class="single-cases-img">
                                <img src="<?php echo the_post_thumbnail_url( ) ?>" alt="<?php the_title()?>">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                    <h4><a href="<?php the_permalink( )?>"><?php the_title( )?></a></h4>
                                    <p><?php
                                        $excerpt    = get_the_excerpt();
                                        $excerpt = wp_trim_words( $excerpt, 8 );
                                        echo $excerpt;
                                    ?></p>
                                    <span><?php echo $case_post ;?></span>
                               </div>
                            </div>
                            <?php
                            } wp_reset_postdata(  );?>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Teams</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $args    = [
                            'post_type'     => 'team',
                            'posts_per_page'=> 4
                        ];
                        $query = new WP_Query($args);
                        while($query->have_posts()){
                            $query->the_post(  ); ?>
                                <div class="col-xl-3 col-lg-3 col-md-4">
                                    <div class="single-profile mb-30">
                                        <!-- Front -->
                                        <div class="single-profile-front">
                                            <div class="profile-img">
                                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                            </div>
                                            <div class="profile-caption">
                                                <h4><?php the_title()?> <span><?php the_content()?></span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            wp_reset_postdata(  );
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- Testimonial Start -->
        <?php get_template_part( 'partials/testimonial', 'page')?>
        <!-- Testimonial End -->

        <?php get_template_part( 'partials/blog', 'page')?>

        

    </main>
<?php
    get_footer();
?>