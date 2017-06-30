<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Biancas_theme
 */
 $page_object = get_queried_object();
 $page_id = get_queried_object_id();
 $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($page_id));

get_header('other'); ?>


<!-- ===========BLOG CONENT=================== -->
<div class="container">
	<div class="row" id="primary">
			<main id="main" class="col-sm-8" role="main">
        <div class="blog-heading">
            <i class="fa fa-folder icon-blue" aria-hidden="true"></i> <h1>Blog</h1>
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
        <aside class="col-sm-3 col-sm-offset-1" >
            <div class="side-bar-wrap">
            <hr class="side-blue-hr">
            <div class="sidebar-container">
            <?php get_sidebar(); ?>
            </div>
          </div>
        </aside>
  </div> <!--primary-->
  </div><!--container-->
<h1 style="margin-bottom:75px"></h1>



<?php get_footer(); ?>
