<?php
  /* Template Name: Account Sessions Lake District  */
?>
<?php
  get_header();
?>
<h1 class="my-account-heading">My Account</h1>
<div class="account-navigation">
  <ul>
    <li class="membership-account">
      <a href="/membership-account/">
        <div class="tab-item">
          <span class="label">Memberships</span>
          <span class="status"></span>
          <span class="indicator"></span>
        </div>
      </a>
    </li>
    <li class="swim-session-account">
      <a href="/north-west/my-account/">
        <div class="tab-item">
          <span class="label">North West</span>
          <span class="status"></span>
          <span class="indicator"></span>
        </div>
      </a>
    </li>
    <li class="swim-session-account active">
      <a href="/lake-district/my-account/">
        <div class="tab-item">
          <span class="label">Lake District</span>
          <span class="status"></span>
          <span class="indicator"></span>
        </div>
      </a>
    </li>
    <li class="swim-shop-account">
      <a href="/account-profile/">
        <div class="tab-item">
          <span class="label">Swim Shop</span>
          <span class="status"></span>
          <span class="indicator"></span>
        </div>
      </a>
    </li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-12 col-sm-12 col-lg-12">
      <?php
        if (have_posts()) {
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        }
      ?>
    </div>
  </div>
</div>

<?php
  get_footer();
?>
