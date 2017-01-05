<?php

$defaults = array(
    'default-image'          => '',
    'random-default'         => false,
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'default-text-color'     => '',
    'header-text'            => true,
    'uploads'                => true,
    'wp-head-callback'       => 'softone_wp_head_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);

add_theme_support( 'custom-header' , $defaults);

function softone_wp_head_cb() {
    if(get_header_image() ) {
    ?>
        <style type="text/css">
        #logo .navbar-brand {
      padding: 0px;
    }
        </style>
    <?php
    }
}


function bootplant_header_logo() {
    ?>
<span id="logo">
  <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
    <?php if ( get_header_image() ) { ?>
    <img src="<?php header_image(); ?>" alt="logo" height="50" />
    <?php } else { ?>
    <span style="color: #8edb34"><i class="fa fa-leaf"></i> Sof</span>plant
    <?php }  ?>
  </a>
</span>
    <?php
}

/**
 * change title
 */
function custom_archive_title( $title ){
    if ( is_tax() ||  is_archive() || is_category()) {
        $title = single_term_title( '', false );
    } else if (is_single()) {
		$category = get_the_category();
		$title = count($category) > 0 ? $category[0]->cat_name : $title;
	}
    return $title;
}
add_filter( 'get_the_archive_title', 'custom_archive_title', 10 );

