<?php get_header(); ?>

<div class="col-xs-12" id="bgimg">
	<!-- <img class="bgimg" src="<?php bloginfo('template_directory'); ?>/images/land.jpg" alt="background img"/> -->
</div>
<div class="col-xs-12 searchbar">
	<?php if ( ! dynamic_sidebar('headerAdZone') ) : ?>
	<?php endif; ?>
</div>



<?php get_footer(); ?>