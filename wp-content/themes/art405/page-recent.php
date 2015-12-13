<?php get_header(); 
/*
Template Name: Recent Page
*/
?>
<div class="container">
	<h1>Recent Posts</h1>
	<hr>

	<?php if(have_posts()): while (have_posts()) : the_post(); ?>
		<img src="<?php the_field('image');?>"  style="max-height:300px;" />
		
		<h2>
			<a href="<?php the_permalink() ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		
		<hr>

	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>