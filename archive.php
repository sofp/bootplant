<?php
/**
 * The template for displaying archive pages
 * @package bootplant
 */
get_header(); ?>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
        <?php the_archive_title(); ?>
        <small><?php the_archive_description(); ?></small>
      </h1>
      <ul class="breadcrumb">
      <?php if(function_exists('bcn_display')) { bcn_display();} ?>
      </ul>
    </div>
  </div>
  <!-- /.row -->

  <!-- Content Row -->
  <div class="row">

    <!-- Content Column -->
    <div class="col-md-8">
      <div class="article">
      <?php while ( have_posts() ) : the_post(); ?>
      
      <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
      
      <?php endwhile; ?>
      <?php
      // Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'bootplant' ),
				'next_text'          => __( 'Next page', 'bootplant' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bootplant' ) . ' </span>',
			) );
      ?>
	  </div>
    </div>
     <?php get_sidebar(); ?>
  </div>
  <!-- /.row -->

  <hr>
</div>
<!-- /.container -->


<?php get_footer(); ?>
