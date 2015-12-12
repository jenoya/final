<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else bloginfo('name'); wp_title(''); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<!-- JAVA JQUERY -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- BOOTSTRAP JQUERY -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head();?>

</head>
<body>

<nav class="navbar" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href = "<?php bloginfo('url');?>" class = "navbar-brand">Stock Stalker</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<?php /* Primary navigation */
			wp_nav_menu( array(
			  'menu' => 'top_menu',
			  'depth' => 2,
			  'container' => false,
			  'menu_class' => 'navbar nav nav-pills navbar-right',
			  //Process nav menu using our custom nav walker
			  'walker' => new wp_bootstrap_navwalker())
			);
		?>
	</div><!-- /.navbar-collapse -->
</nav>

