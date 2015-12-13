<?php get_header();
/*
Template Name: About Page
*/
?>
<div class="container-full">
	<div class="title-top-section">
		<h1 class="title-section-text"><?php the_title();?></h1>
	</div>
</div>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default panel-body">
			<?php while (have_posts()) : the_post(); ?>
				<div class="row center-box">
					<div class="center-box thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
				</div>
				<div class="row center-box">
					<p><?php the_content(''); ?></p>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</div>



<?php get_footer(); ?>