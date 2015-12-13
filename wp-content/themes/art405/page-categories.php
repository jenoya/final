<?php get_header(); 
/*
Template Name: Categories Page
*/
?>
<div>
	<?php $category = new WP_Query(['post_type'=>'category']);
	 	if ($category->have_posts()) : while ($category->have_posts()) : $category->the_post(); ?>
		<div class="container">
			<div class="col-md-12">
				<img src="<?php the_field('background-image');?>" class="img-responsive">
				<div class="carousel-caption">
					<h3><?php the_title();?></h3>
					<p><?php the_content(''); ?></p>
				</div>
			</div>
		
		</div>
	<?php endwhile; else: ?>
	    <p>Sorry, no ads matched your criteria.</p>
	<?php endif; ?>
</div>


<?php get_footer(); ?>