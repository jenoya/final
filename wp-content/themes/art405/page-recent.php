<?php get_header(); 
/*
Template Name: Recent Page
*/
?>
<div class="container" style="background-color:white;">

	<h1>RECENT POSTS</h1>
<?php $recent = new WP_Query([
	'post_type'=>'food-image',
	'post_type'=>'animal-image',
	'post_type'=>'illustration-image',
	'post_type'=>'landscape-image',
]);
	if($recent->have_posts()): while ($recent->have_posts()) : $recent->the_post(); ?>
		<img src="<?php the_post_thumbnail(); ?>">
				

	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>