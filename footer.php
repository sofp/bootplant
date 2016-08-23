<!-- Footer -->

<section  class="footer-block">
  <div class="container">
	<div class="row">
	  <div class="col-md-4">
		<ul>
		  <li><strong>Navigation</strong></li>
		  <?php wp_nav_menu( array('theme_location' => 'footer-left')); ?>
		</ul>
	  </div>
	  <div class="col-md-4">
		<ul>
		  <p><strong>Address</strong></p>
		  <p>
			<i class="fa fa-leaf"></i> Sofplant ソフプラント<br>
			<i class="fa fa-phone" aria-hidden="true"></i> 050-5806-6424<br>
			<i class="fa fa-map-marker" aria-hidden="true"></i> 〒183-0026 東京都府中市南町5-17-1
		  </p>
		</ul>
	  </div>
	  <div class="col-md-4">
		<ul>
		  <p><strong>Follow US</strong></p>
		  <p style="font-size: 1.3em;">
			<a href="https://www.facebook.com/sofplant-103415573083307/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://twitter.com/sofpl"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
		  </p>
		</ul>
	  </div>
	</div>
  </div>
</section>

<footer>
  
  <div class="container">
    <div class="col-lg-12">
	  <p>Copyright &copy; SOFPlANT <?php echo date('Y'); ?></p>
    </div>
  </div>
</footer>

  <?php wp_footer(); ?>

  </body>
</html>
