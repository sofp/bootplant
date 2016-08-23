<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BootPlant
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><?php the_title(); ?></h2>

<p class="text-right">
  <small><?php the_time('Y.m.d'); ?></small>
</p>

<p>
  <?php the_tags(); ?>
</p>


  
  <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
  <hr>
  
  <?php
	 if (is_archive()) {
		 the_excerpt();
	 } else {
		 the_content();
	 }


wp_link_pages( array(
	'before' => '<div class="page-links">' . __( 'Pages:', 'bootplant' ),
	'after'  => '</div>') );
?>
  


<?php
	if ( comments_open() || pings_open() || get_comments_number() ) {
		comments_template( '', true );
	}
?>



</article><!-- #post-## -->

