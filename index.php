<?php get_header(); ?>

<?php get_template_part('template-parts/slider'); ?>
  
<section class="topbox bg-white">
	  <!-- Page Content -->
      <div class="container">

		

		<div class="widget widget-contentblock">
          <h1 class="page-header">あなたの街のWordPress工房</h1>

          <div class="jumbotron">
			
			<p>
              WordPressを使ってホームページを作りたいけど、デザインをよいものにしたい、すでに使っているけど、ほしい機能がプラグインで実現できない等、WordPressに関する事でなにかお困りの事があれば是非ご相談ください。
			</p>
			
			<p class="text-center">
              <a class="btn btn-warning btn-lg" href="/contact">お気軽にご相談ください</a>
			</p>  
			
          </div> <!-- jumbotron -->

		</div>
	  </div>
	</section>

	<section class="bg-white">

	  <div class="container">
		<div class="col-lg-12">
		  <h2 class="page-header">お知らせ</h2>
          
<?php 
// The Query
$the_query = new WP_Query('posts_per_page=5');

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_the_time('Y.m.d') . ' <a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
		</div>
	  </div>
	  
	</section>
	
	<section class="topbox bg-green" style="margin-top: 30px; padding: 40px 5px;">
	  <div class="container">
		<div class="col-lg-12">
		  <div class="col-md-6">
			<div class="service-cons">
			  <i class="fa fa-wordpress" aria-hidden="true"></i>
			  <i class="fa fa-sitemap" aria-hidden="true"></i>
			  <i class="fa fa-plug" aria-hidden="true"></i>
			  <i class="fa fa-cogs" aria-hidden="true"></i>
			</div>
		  </div>
		  <div class="col-md-6">
			<h3>WordPressを利用したウェブサービス</h3>
			<p>
			  ソフプラントではWordPress（ワードプレス）基盤にサイトを構築し安価でメンテナンスのしやすい、お客様自身が管理できるサイトを制作しています。</p>
			  <ul>
				<li>WordPressでのホームページ制作</li>
				<li>WordPressベースのシステム開発・プラグイン作成</li>
				<li>バックアップ・運営サポート</li>
				<li>カスタマズ</li>
			  </ul>
			</p>
			<p class="text-center">
              <a class="btn btn-warning btn-lg" href="/services/">サービスの説明をみる</a>
			</p>  
		  </div>
		</div>
	  </div>
	</section>
	<section class="topbox bg-white">
	  <div class="container" >
		<div class="col-lg-12">
		  <h2 class="page-header">サイト制作サービス</h2>
        </div>
        <div class="col-lg-12">


		  <div class="col-md-4">
            <div class="panel panel-default">
			  <div class="panel-heading">
                <h4><i class="fa fa-fw fa-check"></i> ベーシックプラン</h4>
			  </div>
			  <div class="panel-body">
                <p>シンプル構成のホームページ。企業ブログに。</p>
                <p><span class="price">168,000<sup>円</sup></span></p>
                <p><a class="btn btn-default" href="<?php echo get_page_link(87); ?>#basic">詳しくはコチラ</a></p>
			  </div>
            </div>
		  </div>
		  <div class="col-md-4">
            <div class="panel panel-default">
			  <div class="panel-heading">
                <h4><i class="fa fa-fw fa-gift"></i> ビジネスプラン</h4>
			  </div>
			  <div class="panel-body">
				<p>本格的なホームページ構築に</p>
                <p><span class="price">210,000<sup>円</sup></span></p>
				<p>
                  <a class="btn btn-default" href="<?php echo get_page_link(87); ?>#basic">詳しくはコチラ</a>
				</p>
			  </div>
            </div>
		  </div>
		  <div class="col-md-4">
            <div class="panel panel-default">
			  <div class="panel-heading">
                <h4><i class="fa fa-fw fa-compass"></i> デザイン入稿プラン</h4>
			  </div>
			  <div class="panel-body">
                <p>制作会社やデザイナーの方向けのプランです。</p>
                <p><span class="price">126,000<sup>円</sup></span></p>
                <p><a class="btn btn-default" href="<?php echo get_page_link(87); ?>#design">詳しくはコチラ</a></p>
			  </div>
            </div>
		  </div>

        </div>
	  </div>
	  
	  <div class="container">
        <div class="col-lg-12">
		  <h2 class="page-header">制作事例</h2>
        </div>
        <div class="row">
		  <div class="col-md-4 col-sm-6"><a href="/case/#01"><img class="img-responsive img-portfolio img-hover" src="/wp-content/uploads/2015/10/polyshop_screenshot700x450.png" alt="" />
		  </a></div>
		  <div class="col-md-4 col-sm-6"><a href="/case/#02">
			  <img class="img-responsive img-portfolio img-hover" src="/wp-content/uploads/2015/10/joshiryu_screnshot700x450.png" alt="" />
		  </a></div>
		  <div class="col-md-4 col-sm-6">&nbsp;</div>
        </div>
	  </div>
	</section>
	<?php get_template_part('template-parts/footer-block'); ?>

<?php 
get_footer();

