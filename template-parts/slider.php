<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">

<!-- Wrapper for slides -->
<?php
$the_query = new WP_Query("post_type=slider&showposts=-1");
if ( $the_query->have_posts() ) {
?>
<div class="carousel-inner">
<?php
    $active_str = "active";        /* first active */
    while ( $the_query->have_posts() ) {
        $the_query->the_post(); 
?>
  <div class="item <?php echo $active_str; ?>">
<?php
        $image_id = get_post_thumbnail_id();
        $image_url = wp_get_attachment_image_src($image_id, true);
?>
    <div class="fill" style="background-image:url('<?php echo $image_url[0]; ?>');"></div>
    <div class="carousel-caption caption-bg">
   <h2><?php the_title(); ?></h2>
   <?php the_content(); ?>
    </div>
  </div>
<?php
    $active_str = "";               // second no acitve
    } // while loop

?>
</div>
<?php
} // --- if ($the_query....
wp_reset_postdata();

?>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>

</header>
