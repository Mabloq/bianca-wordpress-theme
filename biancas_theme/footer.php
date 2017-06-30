<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Biancas_theme
 */
 $subscribe_popup      = get_post_meta(1844, 'subscribe_popup', true);

?>

	</div><!-- #content -->

  <!--==========FOOTER SECTION===============-->
  <footer id="run-footer">
    <div class="container icon-bottom">
      <div class="row">
        <div class="col-md-4">
          <h2 class="footer-head">Navigate</h2>
          <a class="footer-links" href="http://www.runderstandme.com">Home</a>
          <a class="footer-links" href="http://www.runderstandme.com/blog/">Blog</a>
          <a class="footer-links" href="http://www.runderstandme.com/contact-us/">Contact</a>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <h2 class="footer-head pull">Contact</h2>
          <i class="fa fa-envelope icon-white " aria-hidden="true"></i> <p class="footer-links" style="float:left;">btoledo@ramapo.edu</p>
        </div>
      </div>

    </div>

  </footer>
    <!--modal  -->
    <div class="modal fade" id="myModal">
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us15.list-manage.com","uuid":"398b820a7d682e5a9a2dd392f","lid":"a7980097c0"}) })</script>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/main.js">

    </script>

<?php wp_footer(); ?>

</body>
</html>
