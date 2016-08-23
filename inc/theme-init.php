<?php

/* Slider */
function my_post_type_slider() {
	register_post_type( 'slider',
                        array(
                            'label'               => __("Slides", 'bootplant'),
                            'singular_label'      => __("Slides", 'bootplant'),
                            // 'exclude_from_search' => true, // Exclude from Search Results
                            'capability_type'     => 'post',
                            // 'public'              => false, // default faluse
                            'show_ui'             => true,
                            // 'show_in_nav_menus'   => false,
                            'rewrite' => array(
                                'slug'       => 'slide-view',
                                'with_front' => FALSE,
                            ),
                            'query_var' => 'slide', // This goes to the WP_Query schema
                            'menu_icon' =>  'dashicons-slides',
                            'supports'  => array(
								'title',
                                'editor',
								'thumbnail',
							)
                        )
	);


    
}
add_action('init', 'my_post_type_slider');

