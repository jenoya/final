<?php get_header();
/*
Template Name: About Page
*/
?>
<div class="container-full">
	<div class="row title-top-section text-center">
		<h1 class="title-section-text"><?php the_title();?></h1>
	</div>
</div>
<div class="container">
	<div class="col-xs-12">
		<div class="panel panel-default panel-body">
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(''); ?>
			<?php endwhile; wp_reset_query(); ?> 
		</div>
	</div>
</div>





<?php get_footer(); ?>

