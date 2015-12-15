<?php get_header(); 
/*
Template Name: Recent Page
*/
?>
<div class="container" style="background-color:white; padding-bottom:30px; height: 100vh;">

	<h1>RECENT POSTS</h1>
<?php $recent = new WP_Query([
	'post_type'=>'landscape-image',
]);
	if($recent->have_posts()): while ($recent->have_posts()) : $recent->the_post(); ?>
		<?php echo get_the_post_thumbnail(); ?>

	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>