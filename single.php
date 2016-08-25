<?php get_header(); ?>

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
	<div class="col-md-8" >
	  <div class="article">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'single' . get_post_format() ); ?>
		<?php
		// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		?>
		<?php endwhile; ?>
	  </div>
    </div>
    <div class="col-md-4">
	  <div class="sidebar">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		<div class="panel panel-default">
		  <div class="panel-heading">
			Menu
		  </div>
		  <ul class="nav nav-pills nav-stacked">
			<?php wp_list_pages('title_li='); ?>
		  </ul>
		</div>
		<?php endif; ?>
	  </div>
	</div>
    <!-- Content Column -->
    
     
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->

<?php get_footer(); ?>
