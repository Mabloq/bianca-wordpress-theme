<?php
/*
Template Name: About Me
*/

get_header('footer'); ?>
<div class="my-feat">

</div>

<!-- ===========About Me CONTENT=================== -->
<div class="container">
	<div class="row" id="primary">
			<main id="main" class="col-md-8" style="margin: auto;" role="main">
        <h1 style="margin-top:50px;">About Me</h1>

	       <?php echo the_content(); ?>
         <h1 style="margin-bottom: 50px;"></h1>
			</main><!--content -->
	</div> <!--primary-->
</div><!--container-->



<?php get_footer(); ?>
