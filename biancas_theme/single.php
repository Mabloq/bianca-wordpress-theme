<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Biancas_theme
 */

get_header('other'); ?>

<!-- ===========BLOG CONENT=================== -->
<div class="container">
	<div class="row" id="primary">
			<main id="main" class="col-md-10 col-md-offset-1" role="main">
        <div class="blog-heading">
            <i class="fa fa-folder icon-blue" aria-hidden="true"></i> <h1>Blog</h1>
        </div>
        <hr class="blue-hr">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content-single', get_post_format() );


					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!--content -->
		</div> <!--primary-->

		<div class="row">
			<!-- ================= Get SIDEBAR ================ -->
				<aside id="secondary" class="col-sm-8 col-md-offset-2" role="complementary">
						<div class="side-bar-wrap">
						<hr class="side-blue-hr">
						<div class="sidebar-container side-bar">
						<?php get_sidebar(); ?>
						</div>
					</div>
				</aside>
		</div>

  </div><!--container-->
<h1 style="margin-bottom:75px"></h1>



<?php get_footer(); ?>
