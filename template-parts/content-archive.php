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
<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<hr>
</article><!-- #post-## -->

