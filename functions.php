<?php

// setup
function bootplant_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-background', array( 'default-color' => '#f8f8f8' ) );

	
    load_theme_textdomain('bootplant', get_template_directory() . '/languages' );
    
}
add_action( 'after_setup_theme', 'bootplant_theme_setup' );


// includes stylesheet and javascript
function bootplant_one_script() {
    // stylesheet
    // bootstrap
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.5');
    wp_enqueue_style( 'modern-business', get_template_directory_uri() . '/css/modern-business.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');

	
    // Load our main stylesheet.
    wp_enqueue_style( 'general-style', get_stylesheet_uri() );

    // javascript
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.5' );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js');
	
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0.0' );

	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'wp_enqueue_scripts', 'bootplant_one_script' );


/* additional header */
function bootplant_add_header(){
    echo '
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->';
}

add_action( 'wp_head', 'bootplant_add_header' );


function bootplant_add_footer() {
    // menu script;

    echo '
<script>
      jQuery(function($) {
          $( "ul.nav li.dropdown" ).hover(function() {
              // you could also use this condition: $( window ).width() >= 768
              if ($(".navbar-toggle").css("display") === "none" 
                  && false === ("ontouchstart" in document)) {
                  $( ".dropdown-toggle", this ).trigger( "click" );
              }
          }, function() {
              if ($(".navbar-toggle").css("display") === "none"
                  && false === ("ontouchstart" in document)) {
                  
                  $( ".dropdown-toggle", this ).trigger( "click" );
              }
          });
      });
    </script>


<script>
  new WOW().init();
</script>

';

    
    // top slider
    if (is_home() || is_front_page()) {
        echo '
<!-- Script to Activate the Carousel -->
<script>
    jQuery(".carousel").carousel({
        interval: 5000 //changes the speed
    })
</script>



';
    }
}

add_action( 'wp_footer', 'bootplant_add_footer' );

function bootplant_one_setup() {
    register_nav_menus( array(
        'header-right' => 'Header Right Navi',
        'footer-left'  => 'Footer Left',
		'footer-center'  => 'Footer Center',
		'footer-right'  => 'Footer Right'));
}

add_action( 'after_setup_theme', 'bootplant_one_setup' );

/**
 * use wp_bootstrap_navwalker
  * GitHub URI: https://github.com/twittem/wp-bootstrap-navwalker
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

function bootplant_nav_menu($args)  {
    $args['container_class'] = 'collapse navbar-collapse bs-example-navbar-collapse-1';
    $args['menu_class'] = 'nav navbar-nav';
    $args['fallback_cb'] = 'wp_bootstrap_navwalker::fallback';
    $args['walker'] = new wp_bootstrap_navwalker();
    wp_nav_menu($args);
}

require get_template_directory() . '/inc/theme-init.php';

require get_template_directory() . '/inc/cunstom-header.php';


require get_template_directory() . '/inc/widget-init.php';
require get_template_directory() . '/inc/widget-content-block.php';
