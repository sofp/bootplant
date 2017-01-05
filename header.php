<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php get_template_part('template-parts/analyticstracking'); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="header">
      <!-- <nav class="navbar navbar-inverse navbar-fixed-top">-->
      <nav class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php bootplant_header_logo(); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php bootplant_nav_menu( array('theme_location' => 'header-right')); ?>
          <form class="navbar-form navbar-right" action="<?php echo home_url('/'); ?>">
            <input type="text" name="s" class="form-control" placeholder="Search...">
	        <button type="submit" class="btn btn-success">Search</button>
          </form>
        </div>
      </nav>

    </div><!-- /.header -->
    <div class="margin" style="height: 50px;">&nbsp;</div>
