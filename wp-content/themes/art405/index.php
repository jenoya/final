<?php get_header(); ?>

<div class="row">

	<div class="col-xs-12" id="bgimg">
		<!-- <img class="bgimg" src="<?php bloginfo('template_directory'); ?>/images/land.jpg" alt="background img" /> -->
		<div class="col-xs-12 searchbar">
			<div class="sidebar-php"><?php if( dynamic_sidebar('home_page_search_bar') ) : else : endif; ?></div>
		</div>
	</div>

</div>




<?php get_footer(); ?>