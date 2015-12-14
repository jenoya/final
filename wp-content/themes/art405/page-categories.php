<?php get_header(); 
/*
Template Name: Categories Page
*/
?>
<div class="container" style="background-color:white;">
	<?php $category = new WP_Query(['post_type'=>'category-box']);
	 	if ($category->have_posts()) : while ($category->have_posts()) : $category->the_post(); ?>
	 		<div class="col-xs-12">
	 			<a href="#">
		 			<img style="margin-top:30px;"src="<?php the_field('background_image'); ?>" class="img-responsive">
					<div class="carousel-caption" style="padding-bottom:0px;">
						<h3 style="color: rgba(0,128,185,1);"><?php the_title();?></h3>
						<p><?php the_content(''); ?></p>
					</div>
				</a>
			</div>

	<?php endwhile; else: ?>
	    <p>Sorry, no Category Boxes match your criteria</p>
	<?php endif; ?>
</div>


<?php get_footer(); ?>