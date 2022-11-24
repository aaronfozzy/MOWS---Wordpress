<?php
  /* Template Name: Login Template  */
?>
<?php
  get_header();
?>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-12 col-sm-12 col-lg-6">
      <h1 class="upper-margin">My Account</h1>
      <?php
        if (have_posts()) {
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        }
      ?>
    </div>
    <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xs-12">
      <section class="left-6">
        <div class="container">
          <div class="row justify-content-between align-items-center py-5">
            <div class="col-12 col-md-12 order-12 order-md-12">
              <h4 class="mb-3">Memberships</h4>
              <h1>Need a Membership?</h1>
              <p class="mb-4">Even if you had registered for a membership last year you still need to re-register and create a new account for this season.</p>
              <div class="row">
                <div class="col-6 col-md-6 col-lg-12 col-xs-12"><button class="btn btn-primary btn-block" onclick="window.location.href='/membership-account/membership-levels/'">Memberships</button></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<?php
  get_footer();
?>
