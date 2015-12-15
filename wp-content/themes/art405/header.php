<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else bloginfo('name'); wp_title(''); ?></title>

<!-- Boostrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<!-- my css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/nav.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/hover.css">

<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Exo:400,300,300italic,500,400italic,500italic,700,700italic' rel='stylesheet' type='text/css'>

	<?php wp_head();?>

</head>
<body>
	<div>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><logo>StockStalker</logo></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class=""><a href="<?php bloginfo('url'); ?>">HOME<span class="sr-only">(current)</span></a></li>
						<li class=""><a href="<?php bloginfo('url'); ?>/about">ABOUT</a></li>
						<li class=""><a href="<?php bloginfo('url'); ?>/posts">POSTS</a></li>
						<li class=""><a href="<?php bloginfo('url'); ?>/gallery">GALLERY</a></li>
						<li class=""><a href="<?php bloginfo('url'); ?>/advertise">ADVERTISE</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->

			</div><!-- /.container-fluid -->
		</nav>
	</div>
	