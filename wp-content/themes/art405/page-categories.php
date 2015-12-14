<?php get_header(); 
/*
Template Name: Categories Page
*/
?>
<div class="container" style="background-color:white;">
	<?php $category = new WP_Query(['post_type'=>'category-box']);
	 	if ($category->have_posts()) : while ($category->have_posts()) : $category->the_post(); ?>
		<div class="container" style="padding: 0px;">
			<div class="col-md-12" style="padding: 0px;">
				<img style="margin-top:30px; padding right:30px;"src="<?php the_field('background_image'); ?>" class="img-responsive">
				<div class="carousel-caption">
					<h3><?php the_title();?></h3>
					<p><?php the_content(''); ?></p>
				</div>
			</div>
		
		</div>
	<?php endwhile; else: ?>
	    <p>Sorry, no Category Boxes match your criteria</p>
	<?php endif; ?>
</div>


<?php get_footer(); ?>