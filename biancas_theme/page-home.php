<?php
/*
  Template Name: Home Page

*/

//Custom Fields
$tag_description      = get_post_meta(1844, 'tag_description', true);
$red_button           = get_post_meta(1844, 'red_button', true);
$subscribe_header     = get_post_meta(1844, 'subscribe_header', true);
$subscribe_small      = get_post_meta(1844, 'subscribe_small', true);
$subscribe_popup      = get_post_meta(1844, 'subscribe_popup', true);

//Advanced Custom Fields
$run_life_image                 = get_field(run_life_image);
$workouts                       = get_field(workouts);
$gear_review                    = get_field(gear_review);
$post_race                      = get_field(post_race);
//<?php echo $subscribe_header;
get_header(); ?>

<!--==========SUBSCRIBE BAR===============-->
<div id="subscribe-bar">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <p class="lead"><strong>Subscribe to our mailing list.</strong> Get the heads up on new content!</p>
    </div>

  </div>
  </div>
</div>
<!--==========QUOTE SECTION===============-->
<div id="quote-section">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <img class="quote-image" src="http://www.runderstandme.com/wp-content/uploads/2017/06/Bianca-profile.png" alt="">
          <p class="quote-quote">"Get everything you need to Runderstand"</p>
      </div>
    </div>
  </div>
</div>
<!--==========CATEGORY SECTION===============-->
    <div id="category-section">
      <div class="container hear-rate">
        <div class="col-md-4">
          <a href="http://www.runderstandme.com/category/workouts/"><img class="cat-img" src="http://www.runderstandme.com/wp-content/uploads/2017/06/Workout200.png" alt=""></a>
          <h2 class="cat-h2">Workouts</h2>
        </div>
        <div class="col-md-4">
          <a href="http://www.runderstandme.com/category/race-journal/"><img class="cat-img" src="http://www.runderstandme.com/wp-content/uploads/2017/06/RunningMan200.png" alt=""></a>
          <h2 class="cat-h2">Race Journal</h2>
        </div>
        <div class="col-md-4">
          <a href="http://www.runderstandme.com/category/gear-reviews/"><img class="cat-img" src="http://www.runderstandme.com/wp-content/uploads/2017/06/GearReview200.png" alt=""></a>
          <h2 class="cat-h2">Gear Review</h2>
        </div>
      </div>
    </div>


<?php

get_footer();
?>
