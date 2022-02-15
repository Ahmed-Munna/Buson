<?php
    function buson_support(){
        load_theme_textdomain( 'buson', get_template_directory_uri(). '/languages' );
        add_theme_support('title-tag');
        register_nav_menus([
            'primary-menu'  => __('Primary Menu','buson'),
            'footer-menu'   => __('Footer Menu','buson')
        ]);
        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 300,
            'flex-width' => true,
            'flex-height' => true,
        ));
        add_theme_support('post-thumbnails', array('post','slider','trust','service','case','team'));
    }
    add_action( 'after_setup_theme', 'buson_support');
    function buson_assets(){
        // -- CSS here --
        wp_enqueue_style( 'bootstrap',get_theme_file_uri('/assets/css/bootstrap.min.css'),[],'4.1.3', 'all');
        wp_enqueue_style( 'owl-carousel',get_theme_file_uri('/assets/css/owl.carousel.min.css'),[],'2.2.1', 'all');
        wp_enqueue_style( 'slicknav',get_theme_file_uri('/assets/css/slicknav.css'),[],'1.0.10', 'all');
        wp_enqueue_style( 'fontawesome',get_theme_file_uri('/assets/css/fontawesome-all.min.css'),[],'5.0.6', 'all');
        wp_enqueue_style( 'slick',get_theme_file_uri('/assets/css/slick.css'),[],'1.0.0', 'all');
        wp_enqueue_style( 'style',get_stylesheet_directory_uri() . '/assets/css/style.css' ,[],'1.0.0', 'all');
        wp_enqueue_style( 'main-style',get_stylesheet_directory_uri(),[],'1.0.0', 'all');
        // 	-- JS here --
        wp_enqueue_script( 'popper-js',get_theme_file_uri('/assets/js/popper.min.js'),[],'4.1.3', true);
        wp_enqueue_script( 'bootstrap-js',get_theme_file_uri('/assets/js/bootstrap.min.js'),[],'4.1.3', true);
        wp_enqueue_script( 'slicknav-js',get_theme_file_uri('/assets/js/jquery.slicknav.min.js'),['jquery'],'1.0.10', true);
        wp_enqueue_script( 'carousel-js',get_theme_file_uri('/assets/js/owl.carousel.min.js'),['jquery'],'2.2.1', true);
        wp_enqueue_script( 'slick-js',get_theme_file_uri('/assets/js/slick.min.js'),['jquery'],'1.0.0', true);
        wp_enqueue_script( 'sticky-js',get_theme_file_uri('/assets/js/jquery.sticky.js'),['jquery'],'1.0.4', true);
        wp_enqueue_script( 'main-js',get_theme_file_uri('/assets/js/main.js'),['jquery'],'1.0.0', true);
    }
    add_action('wp_enqueue_scripts','buson_assets');

    // Sidebar register

    function buson_sidebar() {
        //main sidebar

        register_sidebar( array(
            'name'          => __( 'sidebar', 'buson' ),
            'id'            => 'sidebar',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer widget 1', 'buson' ),
            'id'            => 'footer-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer widget 2', 'buson' ),
            'id'            => 'footer-2',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'buson' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );
    }
    add_action( 'widgets_init', 'buson_sidebar' );

    // slider

    function buson_slider() {
        $labels = array(
            'name'                  => _x( 'Sliders', 'Post type general name', 'buson' ),
            'singular_name'         => _x( 'Slider', 'Post type singular name', 'buson' ),
            'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'buson' ),
            'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'buson' ),
            'add_new'               => __( 'Add New', 'buson' ),
            'add_new_item'          => __( 'Add New Slider', 'buson' ),
            'new_item'              => __( 'New Slider', 'buson' ),
            'edit_item'             => __( 'Edit Slider', 'buson' ),
            'view_item'             => __( 'View Slider', 'buson' ),
            'all_items'             => __( 'All Sliders', 'buson' ),
            'search_items'          => __( 'Search Sliders', 'buson' ),
            'parent_item_colon'     => __( 'Parent Sliders:', 'buson' ),
            'not_found'             => __( 'No Sliders found.', 'buson' ),
            'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'buson' ),
            'featured_image'        => _x( 'Slider cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buson' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'slider' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title','thumbnail'),
            'show_in_rest'       => true
        );
     
        register_post_type( 'slider', $args );
    }
     
    add_action( 'init', 'buson_slider' );

    //Services

    function buson_service() {
        $labels = array(
            'name'                  => _x( 'Services', 'Post type general name', 'buson' ),
            'singular_name'         => _x( 'Service', 'Post type singular name', 'buson' ),
            'menu_name'             => _x( 'Services', 'Admin Menu text', 'buson' ),
            'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'buson' ),
            'add_new'               => __( 'Add New', 'buson' ),
            'add_new_item'          => __( 'Add New Service', 'buson' ),
            'new_item'              => __( 'New Service', 'buson' ),
            'edit_item'             => __( 'Edit Service', 'buson' ),
            'view_item'             => __( 'View Service', 'buson' ),
            'all_items'             => __( 'All Services', 'buson' ),
            'search_items'          => __( 'Search Services', 'buson' ),
            'parent_item_colon'     => __( 'Parent Services:', 'buson' ),
            'not_found'             => __( 'No Services found.', 'buson' ),
            'not_found_in_trash'    => __( 'No Services found in Trash.', 'buson' ),
            'featured_image'        => _x( 'Trust cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buson' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'service' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title','editor','thumbnail', 'excerpt'),
            'show_in_rest'       => true
        );
     
        register_post_type( 'service', $args );
    }
     
    add_action( 'init', 'buson_service' );

    // cases

    function buson_case() {
        $labels = array(
            'name'                  => _x( 'cases', 'Post type general name', 'buson' ),
            'singular_name'         => _x( 'case', 'Post type singular name', 'buson' ),
            'menu_name'             => _x( 'Cases', 'Admin Menu text', 'buson' ),
            'name_admin_bar'        => _x( 'case', 'Add New on Toolbar', 'buson' ),
            'add_new'               => __( 'Add New', 'buson' ),
            'add_new_item'          => __( 'Add New Service', 'buson' ),
            'new_item'              => __( 'New Service', 'buson' ),
            'edit_item'             => __( 'Edit Service', 'buson' ),
            'view_item'             => __( 'View Service', 'buson' ),
            'all_items'             => __( 'All cases', 'buson' ),
            'search_items'          => __( 'Search cases', 'buson' ),
            'parent_item_colon'     => __( 'Parent cases:', 'buson' ),
            'not_found'             => __( 'No cases found.', 'buson' ),
            'not_found_in_trash'    => __( 'No cases found in Trash.', 'buson' ),
            'featured_image'        => _x( 'Trust cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buson' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'case' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title','editor','thumbnail', 'excerpt'),
            'show_in_rest'       => true
        );
     
        register_post_type( 'case', $args );
    }
     
    add_action( 'init', 'buson_case' );

    // Teams

    function buson_teams() {
        $labels = array(
            'name'                  => _x( 'Teams', 'Post type general name', 'buson' ),
            'singular_name'         => _x( 'team', 'Post type singular name', 'buson' ),
            'menu_name'             => _x( 'Teams', 'Admin Menu text', 'buson' ),
            'name_admin_bar'        => _x( 'team', 'Add New on Toolbar', 'buson' ),
            'add_new'               => __( 'Add New', 'buson' ),
            'add_new_item'          => __( 'Add New team', 'buson' ),
            'new_item'              => __( 'New team', 'buson' ),
            'edit_item'             => __( 'Edit team', 'buson' ),
            'view_item'             => __( 'View team', 'buson' ),
            'all_items'             => __( 'All teams', 'buson' ),
            'search_items'          => __( 'Search teams', 'buson' ),
            'parent_item_colon'     => __( 'Parent teams:', 'buson' ),
            'not_found'             => __( 'No teams found.', 'buson' ),
            'not_found_in_trash'    => __( 'No teams found in Trash.', 'buson' ),
            'featured_image'        => _x( 'Trust cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buson' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'team' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title','editor','thumbnail', 'excerpt'),
            'show_in_rest'       => true
        );
     
        register_post_type( 'team', $args );
    }
     
    add_action( 'init', 'buson_teams' );

    // theme option

    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> __('Theme General Settings'),
            'menu_title'	=> __('Theme Settings'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> __('edit_posts'),
            'redirect'		=> false
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Header Settings'),
            'menu_title'	=> __('Header'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme About Settings'),
            'menu_title'	=> __('About'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme CTA Settings'),
            'menu_title'	=> __('Call To Action'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Cases Settings'),
            'menu_title'	=> __('Cases'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Contact Settings'),
            'menu_title'	=> __('Contact'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Footer Settings'),
            'menu_title'	=> __('Footer'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        
    }
    function alter_comment_form_fields($fields){
        unset($fields['comment_notes_before']);
        return $fields;
        }
        add_filter('comment_form_default_fields','alter_comment_form_fields');
        