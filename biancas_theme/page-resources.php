<?php

/*
  Template Name: Resources Page
*/
get_header('other');
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
 ?>

 <?php if( has_post_thumbnail()) {//cheack for feature image ?>
   <section class="feature-image" style="background:url('<?php echo $thumbnail_url;?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </section>
 <?php } else { //fallback image} ?>
 <section>
   <h1 class="page-title"><?php the_title(); ?></h1>
 </section>
 <?php } ?>