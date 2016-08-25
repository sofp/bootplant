<!-- Sidebar Column -->
<div class="col-md-4">
  <section class="sidebar">
	<div class="panel panel-default">
      <div class="panel-heading">
		Menu
      </div>
      <ul class="nav nav-pills nav-stacked">
		<?php wp_list_pages('title_li='); ?>
      </ul>
	</div>

	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
	<div class="panel panel-default">
      <div class="panel-heading">
		Menu
      </div>
      <ul class="nav nav-pills nav-stacked">
		<?php wp_list_pages('title_li='); ?>
      </ul>
	</div>
	<div class="well">
      <h4>Search</h4>
      <div class="input-group">
		<input type="text" class="form-control">
		<span class="input-group-btn">
          <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
		</span>
      </div>
      <!-- /.input-group -->
	</div>

	<!-- Blog Categories Well -->
	<div class="well">
      <h4>Blog Categories</h4>
      <ul class="list-unstyled">
		<li><a href="#">Category Name</a>
		</li>
		<li><a href="#">Category Name</a>
		</li>
		<li><a href="#">Category Name</a>
		</li>
		<li><a href="#">Category Name</a>
		</li>
      </ul>
	</div>

	<!-- Side Widget Well -->
	<div class="well">
      <h4>Side Widget Well</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
	</div>
	<?php endif; ?>
  </section>
</div>
