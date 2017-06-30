<?php
/*
Template Name: Blogs
 */
get_header('other');
 ?>


<!-- ===========BLOG CONENT=================== -->
<div class="container">
	<div class="row" id="primary">
			<main id="main" class="col-sm-8" role="main">
				<div class="blog-heading">
						<i class="fa fa-folder icon-blue" aria-hidden="true"></i> <h1>Category</h1>
				</div>
				<hr class="blue-hr">
				<?php if ( have_posts() ) : ?>

					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('template-parts/content', get_post_format()); ?>
					<?php endwhile; ?>
						<?php 	the_posts_navigation(); ?>
				<?php else : ?>
					<?php get_template_part('template-parts/content', 'none'); ?>

				<?php endif; ?>

			</main><!--content -->
			<!-- ================= Get SIDEBAR ================ -->
			  <aside class="col-md-3 col-md-offset-1">
					<hr class="side-blue-hr">
					<div class="sidebar-container side-bar">
					<?php get_sidebar(); ?>
				</div>
				</aside>
	</div> <!--primary-->
</div><!--container-->



<?php get_footer(); ?>
