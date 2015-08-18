<!-- Page Content -->
<section class="example">
	<div class="container">
		<!-- First Featurette -->
		<div class="row featurette-row">
		    <div class="featurette col-xs-12 col-sm-6 col-md-6" id="about">
		        <h2 class="featurette-heading">This First Heading
		            <span class="text-muted">Will Catch Your Eye</span>
		        </h2>
		        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				<a class="btn btn-success" href="#" role="button">LEARN MORE</a>
		    </div>
		    <div class="col-xs-12 col-sm-6 col-md-6">
		    	<img class="featurette-image img-circle img-responsive" src="http://placehold.it/500x500">
		    </div>
		</div>
	</div>
</section>

<section class="example">
	<div class="container">
		<!-- First Featurette -->
		<div class="row featurette-row">
			<div class="col-xs-12 col-sm-6 col-md-6">
		    	<img class="featurette-image img-circle img-responsive" src="http://placehold.it/500x500">
		    </div>
		    <div class="featurette col-xs-12 col-sm-6 col-md-6" id="about">
		        <h2 class="featurette-heading">This First Heading
		            <span class="text-muted">Will Catch Your Eye</span>
		        </h2>
		        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				<a class="btn btn-success" href="#" role="button">LEARN MORE</a>
		    </div>
		</div>
	</div>
</section>

<?php dynamic_sidebar('front-page-section-1'); ?>

<section class="example">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><h3>The Blog</h3>
			<h3><small>BLAH BLAH BLAH BLAH BLAH BLAH BLAH BLAH BLAH BLAH BLAH BLAH</small></h3></div>
			<div class="col-md-6"><a class="btn btn-success pull-right" href="#">LEARN MORE</a></div>
		</div>
	</div>
		<?php while (have_posts()) : the_post(); ?>
		  <?php get_template_part('templates/page', 'header-front-page'); ?>
		  <?php get_template_part('templates/content', 'content-front-page'); ?>
		<?php endwhile; ?>

		
</section>

