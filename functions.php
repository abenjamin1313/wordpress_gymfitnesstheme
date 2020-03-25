<?php 

// Link to the queries file
require get_template_directory() . '/inc/queries.php';

// Creates the menus
function gymfitness_menus() {
    // WordPress Function
    register_nav_menus( array(
       'primary' => esc_html__( 'Primary Menu', 'gymfitness' ),
    ) );
}

// Hook
add_action('init', 'gymfitness_menus' );
remove_all_filters( 'gymfitness_menus' );

// Adds Stylesheets and Scripts
function gymfitness_scripts() {
    // Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(),'8.0.1' );
    
    // Google font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:400,600,700|Staatliches&display=swap', array(), '1.0.0' );
    
    // Slicknav
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');
    if( basename( get_page_template() ) === 'gallery.php'):
        // Lightbox CSS
        wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.1.11');
    endif;
    // bx slider 
    if(is_front_page()): 
        wp_enqueue_style('bxslidercss', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');
    endif;
    // Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0' );

    wp_enqueue_script('jquery');

    /* Load JS Files */
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    if( basename( get_page_template() ) === 'gallery.php'):
        // Lightbox JS
        wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.1.11', true);
    endif;
    if(is_front_page()): 
        wp_enqueue_script('bxsliderjs', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array('jquery'), '4.2.12'. true);
    endif;

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts', 10);

// Enable Feature Images and other stuff
function gymfitness_setup() {
    // Register new image sizes
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);

    // Add feature image
    add_theme_support('post-thumbnails');

    // SEO Tiles
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup'); // When the thtme is activated and ready!

// Creates a Widget Zone
function gymfitness_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-primary">',
        'after_title' => '</h3>'
    ) );
}
add_action('widgets_init', 'gymfitness_widgets');