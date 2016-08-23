<?php

function sofpone_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sideber 1', 'bootplant' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bootplant' ),
		'before_widget' => '<div id="%1$s" class="widget panel panel-default %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="panel-heading">',
		'after_title'   => '</div>',
	) );

    // add custom post_type 
    register_sidebar( array(
		'name'          => __( 'Top Block1', 'bootplant' ),
		'id'            => 'topblock-1',
		'description'   => __( 'Add widgets here to appear in your top block.', 'bootplant' ),
		// 'before_widget' => '',
		// 'after_widget'  => '',
		//'before_title'  => '',
		//'after_title'   => '',
	) );

    // wp_get_archives (default)
    // $wp_get_archives_args = array('type' => 'yearly');


    register_sidebar( array(
		'name'          => __( 'Sideber Archive', 'bootplant' ),
		'id'            => 'sidebar-archive',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bootplant' ),
		'before_widget' => '<div id="%1$s" class="widget panel panel-default %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="panel-heading">',
		'after_title'   => '</div>',
	) );



}
add_action( 'widgets_init', 'sofpone_widgets_init' );


function sofpone_widget_archives_args($args) {
    $args['type'] = 'yearly';
    return $args;
}

add_filter('widget_archives_args', 'sofpone_widget_archives_args');
