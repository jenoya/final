<?php get_header(); 
/*
Template Name: Contact Page
*/
?>


<div class="container-full">
	<div class="row title-top-section text-center">
		<h1 class="title-section-text"><?php the_title();?></h1>
	</div>
</div>
<div class="container">
	<div class="panel panel-default panel-body">
		<form class="form-horizontal" role="form" method="post" action="MAILTO:max.murillo.408@my.csun.edu">
		    <div class="form-group">
		        <label for="name" class="col-sm-2 control-label blue-text">Name</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="email" class="col-sm-2 control-label blue-text">Email</label>
		        <div class="col-sm-10">
		            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="">
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="message" class="col-sm-2 control-label blue-text">Message</label>
		        <div class="col-sm-10">
		            <textarea class="form-control" rows="4" name="message"></textarea>
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-10 col-sm-offset-2">
		            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary btn-block">
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-10 col-sm-offset-2">
		            <!-- Will be used to display an alert to the user -->
		        </div>
		    </div>
		</form>
	</div>
</div>



<?php get_footer(); ?>