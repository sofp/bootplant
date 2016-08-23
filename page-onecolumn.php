<?php
/**
 * Template name: One Column
 */
?><?php get_header(); ?>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><?php the_title(); ?>
        <!-- <small>Subheading</small> -->
      </h1>
      <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>
  </div>
  <!-- /.row -->

  <!-- Content Row -->
  <div class="row">

    <!-- Content Column -->
    <div class="col-md-6 col-md-offset-3">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- /.row -->
  <hr>
  <?php get_template_part('template-parts/footer-block'); ?>

</div>
<!-- /.container -->


<?php get_footer(); ?>
