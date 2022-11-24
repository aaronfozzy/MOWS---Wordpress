<?php
  /* Template Name: Group Home */
?>
<?php
  get_header();
?>
<?php
  if (have_posts()) {
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  }
?>
<div class="signup-group-site">
  <center>
    <div class="signup-close-holder">
      <div class="signup-close-button"></div>
    </div>
    <div class="signup-form-holder">
      <iframe id="newsletter-signup-group" src="https://mmsapp.mytriathlon.co.uk/forms/mows-group.html"></iframe>
    </div>
  </center>
</div>
<div class="signup-lakes-site">
  <center>
    <div class="signup-close-holder">
      <div class="signup-close-button"></div>
    </div>
    <div class="signup-form-holder">
      <iframe id="newsletter-signup-lakes" src="https://mmsapp.mytriathlon.co.uk/forms/mows-lake-district.html"></iframe>
    </div>
  </center>
</div>
<div class="signup-northwest-site">
  <center>
    <div class="signup-close-holder">
      <div class="signup-close-button"></div>
    </div>
    <div class="signup-form-holder">
      <iframe id="newsletter-signup-northwest" src="https://mmsapp.mytriathlon.co.uk/forms/mows-north-west.html"></iframe>
    </div>
  </center>
</div>
<?php
  get_footer();
?>
