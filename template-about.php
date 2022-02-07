<?php
    //Template Name: template-about
    get_header();
?>
    <main>

        <!-- bredcamp Area Start-->
        <?php get_template_part( 'partials/bredcamp', 'page')?>
        <!-- bredcamp Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part( 'partials/trusted', 'page')?>
        <!-- We Trusted End-->
      
        <!-- Testimonial Start -->
        <?php get_template_part( 'partials/testimonial', 'page')?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part( 'partials/blog', 'page')?>
        <!-- Recent Area End-->

    </main>
<?php
    get_footer();
?>