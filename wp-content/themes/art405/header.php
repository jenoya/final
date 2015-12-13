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
	<link href='https://fonts.googleapis.com/css?family=Exo:400,300,300italic,500,400italic,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head();?>

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
    </div>
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>



