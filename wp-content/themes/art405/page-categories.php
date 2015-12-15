<?php get_header(); 
/*
Template Name: Categories Page
*/
?>
<div class="container" style="background-color:white; padding-bottom: 30px;">
	<?php $category = new WP_Query(['post_type'=>'category-box']);
		if ($category->have_posts()) : while ($category->have_posts()) : $category->the_post(); ?>
			<div class="col-xs-12">
						<div class="hovereffect">
							<img style="margin-top:30px;"src="<?php the_field('background_image'); ?>" class="img-responsive">
							<div class="overlay" style="margin-top:30px;">
								<h2><?php the_field('title') ?></h2>
								<a class="info" href="<?php the_field('link') ?>">View</a>
							</div>
						</div>

			</div>

	<?php endwhile; else: ?>
	    <p>Sorry, no Category Boxes match your criteria</p>
	<?php endif; ?>
</div>


<?php get_footer(); ?>