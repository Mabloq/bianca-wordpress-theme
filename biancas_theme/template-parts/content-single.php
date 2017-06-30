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

		<?php
		if ( is_single() ) :
			the_title( '<p class="blog-title-single">', '</p>' );
		else :
			the_title( '<p class="blog-title-single"><a class="blog-title" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p> <hr>' );

		endif;


			 edit_post_link(' Edit', '<i class="fa fa-pencil"></i>', ' '); ?>

<div class="blog-single">

		<?php if (has_post_thumbnail()) { //check for feature image?>

			<img class="blog-img-single" src="<?php echo $url ?>">
			</div>
		<?php } ?>

	<div class="blog-body">
	<?php the_content(); ?>
 </div>
</div>

</article><!-- #post-## -->
