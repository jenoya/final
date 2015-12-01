<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else bloginfo('name'); wp_title(''); ?></title>
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<!-- JAVA JQUERY -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- BOOTSTRAP JQUERY -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>


	<?php wp_head();?>

</head>
<body>

	