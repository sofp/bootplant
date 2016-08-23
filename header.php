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
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php bootplant_header_logo(); ?>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <?php
             bootplant_nav_menu( array('theme_location' => 'header-right'));
          ?>
        </div><!-- /.container-fluid -->
      </nav>
    </div><!-- /.header -->
    <div class="margin" style="height: 50px;">&nbsp;</div>
