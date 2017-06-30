<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Biancas_theme
 */
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="post-details">
			<i class="fa fa-calendar" aria-hidden="true"></i>	<time><?php the_date(); ?></time>
			<i class="fa fa-folder"></i> <?php the_category(', ') ?>

			<?php edit_post_link(' Edit', '<i class="fa fa-pencil"></i>', ' '); ?>
		</div>
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<div class="blog-post">
		<?php if (has_post_thumbnail()) { //check for feature image?>
		<div class="blog-img" style="background:url('<?php echo $url ?>');background-color: #ec004e;background-repeat: no-repeat; background-size: cover;">
				<?php
				if ( is_single() ) :
					the_title( '<p class="blog-title">', '</p>' );
				else :
					the_title( '<p class="blog-title"><a class="blog-title"href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p> <hr>' );

				endif;?>

		</div>
		<?php } ?>
		<div class="blog-content">
		<?php the_excerpt(); ?>
	 	</div>
 </div>
</article><!-- #post-## -->
