<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Biancas_theme
 */

get_header('other'); ?>


		<?php
		if ( have_posts() ) : ?>


		<div class="container">
			<div class="row" id="primary">
				<main id="content" class="col-sm-8">
					<div class="blog-heading">
	            <i class="fa fa-folder icon-blue" aria-hidden="true"></i> <h1><?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?></h1>
	        </div>
	        <hr class="blue-hr">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</main>
	<!-- ================= Get SIDEBAR ================ -->
	<aside class="col-md-3 col-md-offset-1">
			<div class="side-bar-wrap">
			<hr class="side-blue-hr">
			<div class="sidebar-container side-bar">
			<?php get_sidebar(); ?>
			</div>
		</div>
	</aside>
</div>

</div>
<h1 style="margin-bottom:75px"></h1>

<?php
get_footer();
