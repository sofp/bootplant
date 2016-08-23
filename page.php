<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><?php the_title(); ?>
        <!-- <small>Subheading</small> -->
      </h1>
     <ul class="breadcrumb">
      <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
	  </ul>
    </div>
  </div>
  <!-- /.row -->

  <!-- Content Row -->
  <div class="row">

    <!-- Content Column -->
    <div class="col-md-8 col-md-push-3">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>

      <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bootplant' ),
				'after'  => '</div>',
			) );
		?>

      <?php endwhile; ?>
    </div>
     <?php get_sidebar('page'); ?>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
<?php get_footer(); ?>
