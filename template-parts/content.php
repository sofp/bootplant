<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BootPlant
 */

?>
<div class="row">
  <a href="<?php the_permalink(); ?>">
	<div class="col-md-6">
	  <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
	</div>
	<div class="col-md-6">
	  <h3 class="archive-title"><?php the_title(); ?></h3>
	  <div class="date"><?php the_time('Y.m.d'); ?></div>
	  <?php
		 if (is_archive()) {
		 the_excerpt();
		 } else {
		 the_content();
		 }
		 ?>
	</div>
  </a>
</div>
<hr>
