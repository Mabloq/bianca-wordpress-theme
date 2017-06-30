<?php
/* Template Name: Full-width Template */

get_header('other');
$contact_header = get_post_meta(1861, 'contact_header', true);
$page_object = get_queried_object();
$page_id = get_queried_object_id();
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($page_id));
$the_content = the_content();
?>


<div class="container">
  <div class="row" id="primary">
    <div class="col-sm-12" id="content">
      <section class="main-content">
        <p class="lead"><?php echo $contact_header; ?></p>

        <?php
          // TO SHOW THE PAGE CONTENTS
          while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <div class="contact-form">
                  <?php the_content(); ?> <!-- Page Content -->
              </div><!-- .entry-content-page -->

          <?php
          endwhile; //resetting the page loop
          wp_reset_query(); //resetting the page query
          ?>



      </section>

    </div>
  </div>

</div>
<?php get_footer(); ?>
